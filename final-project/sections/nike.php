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
    Nike
    <img class="logo" src="../images/logos/nike logo.jpg">
  </div>
  <section class="item-grid">
    <a class="item" href="../product detail pages/nike1.php">
      <div class="item-container">
        <img class="item-pic" src="../images/item imgs/nike/nike1.jpg">
        <div class="item-name">DUNK LOW 'BLACK WHITE'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          257
        </div>
        <div class="price"> $159.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/nike2.php">
      <div class="item-container">
        <img class="item-pic" src="../images/item imgs/nike/nike2.jpg">
        <div class="item-name">TRAVIS SCOTT X DUNK LOW PREMIUM QS SB 'CACTUS JACK'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star-half-o"></span>
          36
        </div>
        <div class="price">$1349.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/nike3.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/nike/nike3.jpg">
        <div class="item-name">AIR FORCE 1 '07 'TRIPLE WHITE'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          123
        </div>
        <div class="price">$99.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/nike4.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/nike/nike4.jpg">
        <div class="item-name">OFF-WHITE X DUNK LOW 'LOT 45 OF 50'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star-half-o"></span>
          45
        </div>
        <div class="price">$419.99</div>
      </div>
    </a>
  </section>

  <?php include_once 'footer.php'; ?>
</body>
</html>