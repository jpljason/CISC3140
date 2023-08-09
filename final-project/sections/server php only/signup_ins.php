<?php

if(isset($_POST["submit"])){
  $name = $_POST["userName"];
  $email = $_POST["userEmail"];
  $userID = $_POST["userID"];
  $password = $_POST["password"];
  $passwordRepeat = $_POST["passwordRpt"];

  require_once 'database.php';
  require_once 'functions_ins.php';

  if(emptyInputSignup($name, $email, $userID, $password, $passwordRepeat) !== false){
    header("location: ../signup.php?error=emptyinput");
    exit();
  }
  if(invalidUid($userID) !== false){
    header("location: ../signup.php?error=invaliduid");
    exit();
  }
  if(invalidEmail($email) !== false){
    header("location: ../signup.php?error=invalidemail");
    exit();
  }
  if(pwdMatch($password, $passwordRepeat) !== false){
    header("location: ../signup.php?error=passwordsdontmatch");
    exit();
  }
  if(uidExists($conn, $userID) !== false){
    header("location: ../signup.php?error=usernametaken");
    exit();
  }

  createUser($conn, $name, $email, $userID, $password);

}
else{
  header("location: ../signup.php");
  exit();
}