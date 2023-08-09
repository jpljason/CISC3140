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
    Converse
    <img class="logo" src="../images/logos/converse logo.jpg">
  </div>
  <section class="item-grid">
    <a class="item" href="../product detail pages/converse1.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/converse/converse1.jpg">
        <div class="item-name">COMME DES GARCONS X CHUCK TAYLOR ALL STAR HIGH 'PLAY'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star-half-o"></span>
          68
        </div>
        <div class="price">$129.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/converse2.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/converse/converse2.jpg">
        <div class="item-name">WMNS CHUCK TAYLOR ALL STAR HIGH 'VALENTINE'S DAY 2023 - VINTAGE WHITE'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          32
        </div>
        <div class="price">$109.99</div>
      </div>
    </a>
  </section>

  <?php include_once 'footer.php'; ?>
</body>
</html>