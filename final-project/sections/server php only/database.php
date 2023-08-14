<?php
  $dBservername = "localhost";
  $dBusername = "root";
  $dBpassword = "root";
  $dBname = "finalproject";
  
  // Create connection
  $conn = new mysqli($dBservername, $dBusername, $dBpassword, $dBname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>