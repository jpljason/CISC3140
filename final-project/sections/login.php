<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sneaker Shop</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/categories-bar.css">
  <link rel="stylesheet" href="../styles/general.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../styles/login-signup.css">
</head>
<body onload="loadAll()">
  <?php include_once 'header.php'; ?>

  <section class="login">
    <div class="form-container">
      <form action="server php only/login_ins.php" method="post" class="form">
        <h2>Sign in</h2>
        <div class="message">
          <?php 
            if(isset($_GET["error"])){
              if($_GET["error"] == "emptyinput"){
                echo '<div class="red"> *Please fill in all fields!* </div>';
              }
              else if($_GET["error"] == "wronglogin"){
                echo '<div class="red"> *Invalid login information!* </div>';
              }
              else if($_GET["error"] == "stmtfailed"){
                echo '<div class="red"> *Something went wrong, try again!* </div>';
              }
            }
          ?>
        </div>
        <input type="text" name="userID" placeholder="Username">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <button type="submit" name="submit">Sign in</button>
        <div><br><hr></div>
        <center><p>Don't have an account?</p></center>
        <a class="bottom-button" href="signup.php">Sign up</a>
      </form>
    </div>
  </section>

  <?php include_once 'footer.php'; ?>
</body>
</html