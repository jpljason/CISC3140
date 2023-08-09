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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../styles/productdetails.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    
  </style>
</head>
<body onload="loadAll()">
  
    <?php include_once '../sections/header.php'; ?>

  <section class="details-section">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="product-image-container">
            <img class="item-image" src="../images/item imgs/ASICS/asics3.jpg">
          </div>
        </div>
        <div class="col">
          <div class="details">
            <h2 class="page-item-name">EX89 'CREAM WHITE'</h2>
            <div class="star-system">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              42
            </div><br>
            <span class="price">$99.99</span> <br>
            <select class="size-selection">
              <option>Size</option>
              <option>5.5</option>
              <option>6</option>
              <option>6.5</option>
              <option>7</option>
              <option>7.5</option>
              <option>8</option>
              <option>8.5</option>
              <option>9</option>
              <option>9.5</option>
              <option>10</option>
              <option>10.5</option>
              <option>11</option>
              <option>11.5</option>
              <option>12</option>
              <option>12.5</option>
              <option>13</option>
            </select>
            <br><br>
            <div class="add-to-cart">
              Add to Cart
            </div>
            <hr>
            <h7>Product Description</h7>
            <p>The EX89™ sneaker blends the heritage influences of the GEL-EXTREME™ basketball shoe from 1989 with modern cushioning properties. It was originally created by Toshikazu Kayano in the late 1980s as his first design project with ASICS. The upper’s layered leather construction is also met with spirited color blocking that matches the era’s iconic NBA team uniforms.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <dialog id="modal">
    <div id="modalMessage"></div>
    <button id="closeModal">Close</button>
  </dialog>

  <?php include_once '../sections/footer.php'; ?>
</body>
</html>