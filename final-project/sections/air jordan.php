<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sneaker Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/categories-bar.css">
  <link rel="stylesheet" href="../styles/items-section.css">
  <link rel="stylesheet" href="../styles/general.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body onload="loadAll()">
  <?php include_once 'header.php'; ?>

  <div class="section-name">
    Air Jordan
    <img class="logo" src="../images/logos/air jordan logo.png">
  </div>
  <section class="item-grid">
    <a class="item" href="../product detail pages/airjordan1.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/air jordan/airjordan1.jpg">
        <div class="item-name">AIR JORDAN 1 RETRO HIGH OG 'UNC TOE'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star-half-o"></span>
          126
        </div>
        <div class="price">$199.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/airjordan2.php">
      <div class="item-container">
        <img class="item-pic" src="../images/item imgs/air jordan/airjordan2.jpg">
        <div class="item-name">AIR JORDAN 4 RETRO 'MILITARY BLACK'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star-half-o"></span>
          92
        </div>
        <div class="price">$269.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/airjordan3.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/air jordan/airjordan3.jpg">
        <div class="item-name">AIR JORDAN 4 RETRO 'THUNDER' 2023</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star-half-o"></span>
          89
        </div>
        <div class="price">$249.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/airjordan4.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/air jordan/airjordan4.jpg">
        <div class="item-name">AIR JORDAN 3 RETRO 'WASHINGTON WIZARDS'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          79
        </div>
        <div class="price">$249.99</div>
      </div>
    </a>
  </section>

  <?php include_once 'footer.php'; ?>
</body>
</html>