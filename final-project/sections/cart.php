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
  <link rel="stylesheet" href="../styles/cart.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body onload="loadAll()">
  <?php include_once 'header.php'; ?>
  
  <div class="section-name">My Cart
    <img class="logo" src="../images/header imgs/shopping-cart-outline-svgrepo-com.svg">
  </div>
  <section class="cart-window">
    <div class="container">
      <div class="row">
        <div id="cart-items" class="cart-items col">
    <!-- <div class="cart-items-row">
            <div class="item-img-container">
              <img src="../images/item imgs/air jordan/airjordan1.jpg">
            </div>
            <div class="item-details">
              <h3>Shoe Name</h3>
              <div><span class="gray">Size:</span><span>10</span></div>
              <div><span class="gray quantity-label">Quantity:</span>
                <span>
                  <input class="quantity" type="number" value="1">
                </span>
              </div><div class="remove">Remove</div>
              <div><span class="price">Price:</span><span class="item-price">$199.99</span></div>
            </div>
          </div> -->
        </div>
        <div class="col order-summary">
          <h1>Order Summary:</h1>
          <div class="order-row"><h4 class="gray">Subtotal:</h4><span id="subtotal">$0.00</span></div><hr>
          <div class="order-row"><h4 class="gray">Shipping:</h4><span id="shipping">$0.00</span></div><hr>
          <div class="order-row"><h4 class="gray">Tax:</h4><span id="tax">$0.00</span></div><hr>
          <div class="order-row"><h4 class="price grand-total">Grand Total:</h4><span id="grand-total">$0.00</span></div><br>
          <button onclick="placeOrder()" class="place-order">Place Order</button>
        </div>
      </div>
    </div>
  </section>

  <dialog id="modal">
    <div id="modalMessage"></div>
    <button id="closeModal">Close</button>
  </dialog>

  <?php include_once 'footer.php'; ?>
</body>
</html>