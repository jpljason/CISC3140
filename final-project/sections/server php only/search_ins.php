<?php

if(isset($_GET["search"])){
  $searchTerm = $_GET["search-term"];

  require_once 'database.php';
  require_once 'functions_ins.php';

  if(empty($searchTerm)){
    header("location: ../sections/index.php");
    exit();
  }
  search($conn, $searchTerm);
}
else{
  header("location: ../sections/index.php");
  exit();
}



