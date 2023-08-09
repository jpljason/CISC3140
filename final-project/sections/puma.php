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
    Puma
    <img class="logo" src="../images/logos/puma logo.jpg">
  </div>
  <section class="item-grid">
    <a class="item" href="../product detail pages/puma1.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/puma/puma1.jpg">
        <div class="item-name">RICK AND MORTY X MB.01</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          57
        </div>
        <div class="price">$399.99</div>
        </div>
      </div>
    </a>
    <a class="item" href="../product detail pages/puma2.php">
      <div class="item-container">
        <img class="item-pic" src="../images/item imgs/puma/puma2.jpg">
        <div class="item-name">MB.02 'PHENOM'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          12
        </div>
        <div class="price">$119.99</div>
      </div>
    </a>
    <a class="item" href="../product detail pages/puma3.php">
      <div class="item-container">
        <img  class="item-pic" src="../images/item imgs/puma/puma3.jpg">
        <div class="item-name">TRC BLAZE COURT 'VENICE BEACH LEAGUE'</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          64
        </div>
        <div class="price">$199.99</div>
      </div>
    </a>
  </section>

  <?php include_once 'footer.php'; ?>
</body>
</html>