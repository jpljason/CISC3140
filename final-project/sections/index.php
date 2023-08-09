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
  <link rel="stylesheet" href="../styles/general.css">
  <link rel="stylesheet" href="../styles/main.css">
  <link rel="stylesheet" href="../styles/items-section.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>
<body onload="loadAll()" onscroll="scrollChange()">
  <!--Header section-->
  <div id="gif-container" class="gif-container"> 
    <?php include_once 'header.php';  ?>
  </div>

  <!--Features section-->
  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col fade">
          <h3><span>New</span><br>AIR JORDAN 1 RETRO HIGH OG UNC TOE</h3>
          <p>The Jordan 1 High OG UNC Toe showcases University Blue on the toe box and heel, which perfectly contrasts with the crisp White leather on the mid-panel and Black on the Swoosh and ankle collar. These kicks sit on a clean white midsole, offset by a vibrant University Blue outsole, creating an impressive visual balance.</p>
          <a class="shop-link" href="../product detail pages/airjordan1.php">Shop</a>
        </div>
        <div class="col smaller fade">
          <img class="feature-imgs" src="../images/main page/airjordan1.jpg">
        </div>
      </div>
    </div>
  </div>
  <div class="features dunks">
    <div class="container">
      <div class="row">
        <div class="col fade">
          <img class="feature-imgs" src="../images/main page/dunklows.webp">
        </div>
        <div class="col fade">
          <h3><span>Back in Stock</span><br>NIKE DUNK LOW BLACK WHITE</h3>
          <p>The upper Nike Dunk Low Retro White Black is constructed of white leather with black leather overlays and Swooshes. Classic Nike branding is featured on the nylon tongue, nodding to traditional Dunk design elements. A white midsole and black outsole complete the design.</p>
          <a class="shop-link" href="../product detail pages/nike1.php">Shop</a>
        </div>
      </div>
    </div>
  </div>

  <div class="other-features">
    <div class="more-features-title"><h3>More Featured Items</h3></div>
    <section class="item-grid">
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
        </div>
      </a>
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
        </div>
      </a>
    </section>
  </div>

  <div class="other-features last">
    <div class="more-features-title"><h3>Selling Out Fast</h3></div>
    <section class="item-grid">
      <a class="item" href="../product detail pages/nike1.php">
        <div class="item-container">
          <img  class="item-pic" src="../images/item imgs/nike/nike1.jpg">
          <div class="item-name">DUNK LOW 'BLACK WHITE'</div>
          <div class="star-system">
            <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          257
          </div>
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
        </div>
      </a>
    </section>
  </div>

  <?php include_once 'footer.php'; ?>
</body>
</html>