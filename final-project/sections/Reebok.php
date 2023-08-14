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
    Reebok
    <img class="logo" src="../images/logos/reebok logo.png">
  </div>
  <section class="item-grid">
    <a class="item" href="../product detail pages/reebok1.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/reebok/reebok1.jpg">
        <div class="item-name">SNEEZE X CLASSIC LEATHER 'WHITE'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          7
        </div>
        <div class="price">$229.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/reebok2.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/reebok/reebok2.jpg">
        <div class="item-name">CLUB C 85 VINTAGE 'CHALK BRUSH BROWN'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star-half-o"></span>
          87
        </div>
        <div class="price">$99.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/reebok3.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/reebok/reebok3.jpg">
        <div class="item-name">PUMP TZ 'SOLAR YELLOW'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          23
        </div>
        <div class="price">$149.99</div>
      </div>
    </a>
  </section>

  <?php include_once 'footer.php'; ?>
</body>
</html>