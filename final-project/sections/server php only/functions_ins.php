<?php

function emptyInputSignup($name, $email, $userID, $password, $passwordRepeat){
  $result;
  if(empty($name) || empty($email) || empty($userID) || empty($password) || empty($passwordRepeat)){
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}

function invalidUid($userID){
  $result;
  if(!preg_match("/^[a-zA-Z0-9]*$/", $userID)) {
    $result = true; 
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email){
  $result;
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true; 
  }
  else {
    $result = false;
  }
  return $result;
}

function pwdMatch($password, $passwordRepeat){
  $result;
  if($password !== $passwordRepeat) {
    $result = true; 
  }
  else {
    $result = false;
  }
  return $result;
}

function uidExists($conn, $userID){
  $sql = "SELECT * FROM users WHERE usersUid = ?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $userID);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($resultData)){
    return $row;
  }
  else{
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $userID, $password){
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPassword) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $userID, $hashedPassword);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../signup.php?error=none");
  exit();
}

function emptyInputLogin($username, $password){
  $result;
  if(empty($username) || empty($password)){
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}

function loginUser($conn, $username, $password){
  //use uidExists method to determine if the user id entered exists
  $userIDExists = uidExists($conn, $username);

  //if the user id does not exist, return the user to the login page
  if($userIDExists === false){
    header("location: ../login.php?error=wronglogin");
    exit();
  }

  //gets the hashed password from the user id's row in the database
  $pwdHashed = $userIDExists["usersPassword"];
  //checks if hashed password matches the password user entered
  $checkPwd = password_verify($password, $pwdHashed);

  if($checkPwd === false){
    header("location: ../login.php?error=wronglogin");
    exit();
  }
  //if password matches the hashed password, start a login session for the user
  else if($checkPwd === true){
    session_start();
    $_SESSION["userid"] = $userIDExists["usersId"];
    $_SESSION["useruid"] = $userIDExists["usersUid"];
    $_SESSION["userRealName"] = $userIDExists["usersName"]; 
    header("location: ../index.php");
    exit();
  }
}

function search($conn, $searchTerm){
  $sql = "SELECT * FROM sneakers WHERE sneakersBrand LIKE '%$searchTerm%' OR sneakersName LIKE '%$searchTerm%'";
  $run = mysqli_query($conn, $sql) or die(mysqli_error($conn));

  if(mysqli_num_rows($run) == 0){
    echo '<div class="search-results">There are no search results for <span class="search-term">"' . $searchTerm . '"</span></div>';
  }
  else{
    echo '<div class="search-results">'. mysqli_num_rows($run) . ' search results were found for <span class="search-term">"' . $searchTerm . '"</span></div>';
    echo '<section class="item-grid">';
    while($runrows = mysqli_fetch_assoc($run)){
      $sneakerName = $runrows['sneakersName'];
      $sneakerPrice = $runrows['sneakersPrice'];
      $sneakerRating = $runrows['sneakersRating'];
      $sneakerLink = $runrows['sneakersLink'];
      $sneakerImg = $runrows['sneakersImg'];
      echo '<a class="item" href="' . $sneakerLink . '">
              <div class="item-container">
                <img class="item-pic" src="' . $sneakerImg .'">
                <div class="item-name">' . $sneakerName . '</div>
                <div class="star-system">'
                  . $sneakerRating .
                '</div>
                <div class="price">' . $sneakerPrice . '</div>
              </div>
            </a>';
    }
    echo '</section>';
  }
  mysqli_close($conn);
}