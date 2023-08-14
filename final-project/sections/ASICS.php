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
    ASICS
    <img class="logo" src="../images/logos/asics logo.png">
  </div>
  <section class="item-grid">
    <a class="item" href="../product detail pages/ASICS1.php">
      <div class="item-container">
        <img class="item-pic" src="../images/item imgs/ASICS/asics1.jpg">
        <div class="item-name">KITH X MARVEL X GEL LYTE 3 '07 REMASTERED 'X-MEN 60TH ANNIV ...</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          17
        </div>
        <div class="price">$489.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/ASICS2.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/asics/asics2.jpg">
        <div class="item-name">CONCEPTS X GEL LYTE 5 'LIBERTEA'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star-half-o"></span>
          13
        </div>
        <div class="price">$169.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/ASICS3.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/asics/asics3.jpg">
        <div class="item-name">EX89 'CREAM WHITE'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          42
        </div>
        <div class="price">$99.99</div>
      </div>
    </a>
  </section>

  <?php include_once 'footer.php'; ?>
</body>
</html>