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
  <link rel="stylesheet" href="../styles/cart.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body onload="loadAll()">
  <?php include_once 'header.php'; ?>
  
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

  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="about-us">
          <h4>About Us</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit expedita, consectetur repellat ipsum a omnis nesciunt repellendus porro totam maiores adipisci animi atque quisquam tenetur quidem repudiandae aperiam vero ipsa praesentium impedit sunt voluptas ullam veritatis ex. Asperiores recusandae, pariatur quis rem ipsam distinctio, quaerat quidem nulla placeat voluptatem atque.</p>
        </div>
        <div class="support">
          <a class="footer-support" href="../sections/index.php"><h4>Home</h4></a>
          <a class="footer-support" href="../sections/support.php"><h4>Support</h4></a>
        </div>
        <div class="socials">
          <h4 class="socials">Socials</h4>
          <div class="socials-tab">
            <img class="social-logo" src="../images/footer imgs/icons8-instagram-100.png">
            <img class="social-logo" src="../images/footer imgs/icons8-youtube-logo-100.png">
            <img class="social-logo" src="../images/footer imgs/icons8-facebook-100 (1).png">
            <img class="social-logo" src="../images/footer imgs/icons8-twitter-100 (1).png">
            <img class="social-logo" src="../images/footer imgs/icons8-pinterest-100.png">
            <img class="social-logo" src="../images/footer imgs/icons8-tiktok-100.png">
          </div>
        </div>
      </div>
      <br><hr>
      <div class="row">
        <div class="col">
          <p>Website Terms</p>&#x2022;<p>Privacy Policy</p>&#x2022;<p>Accessibility Statement</p>&#x2022;<p>Terms of Service</p>&#x2022;<p>&#169; 2023 All Rights Reserved</p>
        </div>
      </div>
    </div>
  </section>

  <script src="../javascript/script.js"></script>
  <script src="../javascript/cart1.js"></script>
</body>
</html>