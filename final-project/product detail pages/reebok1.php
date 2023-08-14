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
              <img class="item-image" src="../images/item imgs/reebok/reebok1.jpg">
            </div>
          </div>
          <div class="col">
            <div class="details">
              <h2 class="page-item-name">SNEEZE X CLASSIC LEATHER 'WHITE'</h2>
              <div class="star-system">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                7
              </div><br>
              <span class="price">$229.99</span> <br>
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
              <p>Street art style for the win. A graffiti-inspired design of the SNEEZE logo puts a fresh spin on these Reebok Classic Leather shoes. The clean, court-inspired style has a minimalist look. Black pops against the subtle upper keep things fresh.</p>
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