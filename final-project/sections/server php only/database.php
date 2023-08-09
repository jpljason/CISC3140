<?php
  $dBservername = "localhost";
  $dBusername = "root";
  $dBpassword = "root";
  $dbname = "finalproject";
  
  // Create connection
  $conn = new mysqli($dBservername, $dBusername, $dBpassword, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>