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
              <img class="item-image" src="../images/item imgs/puma/puma2.jpg">
            </div>
          </div>
          <div class="col">
            <div class="details">
              <h2 class="page-item-name">MB.02 'PHENOM'</h2>
              <div class="star-system">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                12
              </div><br>
              <span class="price">$119.99</span> <br>
              <select class="size-selection">
                <option value="" disabled selected>Size</option>
                <option value="5.5">5.5</option>
                <option value="6">6</option>
                <option value="6.5">6.5</option>
                <option value="7">7</option>
                <option value="7.5">7.5</option>
                <option value="8">8</option>
                <option value="8.5">8.5</option>
                <option value="9">9</option>
                <option value="9.5">9.5</option>
                <option value="10">10</option>
                <option value="10.5">10.5</option>
                <option value="11">11</option>
                <option value="11.5">11.5</option>
                <option value="12">12</option>
                <option value="12.5">12.5</option>
                <option value="13">13</option>
              </select>
              <br><br>
              <div class="add-to-cart">
                Add to Cart
              </div>
              <hr>
              <h7>Product Description</h7>
              <p>The Puma LaMelo Ball MB02 Phenom is a highly anticipated basketball sneaker that is set to release on November 23, 2022, with a retail price of $130. This sneaker is designed to meet the needs of basketball players who demand both style and performance. The upper of the Puma LaMelo Ball MB02 Phenom is made of a combination of synthetic leather and mesh, which provides both durability and breathability. The midsole is made of Puma's proprietary foam, which offers excellent cushioning and support. The outsole is made of rubber, which provides excellent traction on the court. The Puma LaMelo Ball MB02 Phenom comes in a sleek black and white colorway, with subtle Puma branding on the side and tongue. The design is simple yet stylish, making it a versatile sneaker that can be worn both on and off the court. Something we love about the Puma LaMelo Ball MB02 Phenom is its combination of style and performance. Our experts think that the best features of this sneaker are its durable upper, comfortable midsole, and excellent traction. We also love the sleek black and white colorway, which makes it a versatile sneaker that can be worn with a variety of outfits. Overall, the standout feature of the Puma LaMelo Ball MB02 Phenom is its ability to meet the needs of basketball players who demand both style and performance.</p>
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