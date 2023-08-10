<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Drop n Shop</title>
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
    Adidas
    <img class="logo" src="../images/logos/adidas logo.jpg">
  </div>
  <section class="item-grid">
    <a class="item" href="../product detail pages/adidas1.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/adidas/adidas1.jpg">
        <div class="item-name">YEEZY SLIDES 'BONE' 2022</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          42
        </div>
        <div class="price">$149.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/adidas2.php">
      <div class="item-container">
        <img class="item-pic" src="../images/item imgs/adidas/adidas2.jpg">
        <div class="item-name">YEEZY BOOST 350 V2 'ZEBRA' 2022/2023</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          84
        </div>
        <div class="price">$299.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/adidas3.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/adidas/adidas3.jpg">
        <div class="item-name">SUPERSTAR 'CORE BLACK WHITE'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star-half-o"></span>
          54
        </div>
        <div class="price">$75.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/adidas4.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/adidas/adidas4.jpg">
        <div class="item-name">ULTRABOOST 4.0 DNA 'CLOUD WHITE'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          187
        </div>
        <div class="price">$149.99</div>
      </div>
    </a>
  </section>

  <?php include_once 'footer.php'; ?>
</body>
</html>