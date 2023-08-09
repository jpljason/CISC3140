<?php

if(isset($_POST["submit"])){
  $username = $_POST["userID"];
  $password = $_POST["password"];

  require_once 'database.php';
  require_once 'functions_ins.php';

  if(emptyInputLogin($username, $password) !== false){
    header("location: ../login.php?error=emptyinput");
    exit();
  }
  loginUser($conn, $username, $password);
}
else{
  header("location: ../login.php");
  exit();
}