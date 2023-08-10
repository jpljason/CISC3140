<section class="header-container">
  <div class="left-header">
    <a class="logo-link" href="index.php">
      <img class="business-logo" src="../images/header imgs/business-logo2.png">
    </a>
  </div>
  <div class="middle-header">
    <div id="reminders" class="reminders">
      Free shipping on all orders over $150
    </div>
  </div>
  <div class="right-header">
    <div class="search-container">
      <input class="search-bar" type="text" name="search-bar" placeholder="Looking for something?">
      <button class="search-button">
        <img class="search-icon" src="../images/header imgs/icons8-search.svg">
      </button>
    </div>
    <a class="support-button" href="../sections/support.php">
      Support
    </a>
    <?php
      if(isset($_SESSION["userid"])){
        echo '<a class="login-button" href="../sections/server php only/logout.php">
        <img class="account-logo" src="../images/header imgs/logout.png">
        </a>';
      }
      else{
        echo '<a class="login-button" href="../sections/login.php">
        <img class="account-logo" src="../images/header imgs/account.png">
        </a>';
      }
    ?>
    <a class="cart-container" href="../sections/cart.php">
      <img class="shopping-cart" src="../images/header imgs/shopping-cart-outline-svgrepo-com.svg">
      <div class="cart-count"></div>
    </a>
  </div>
</section>

<nav class="categories-section">
  <div class="categories-selector">
    <a class="categories" href="../sections/all.php">All Sneakers</a>
    <a class="categories" href="../sections/nike.php">Nike</a>
    <a class="categories" href="../sections/air jordan.php">Air Jordan</a>
    <a class="categories" href="../sections/Adidas.php">Adidas</a>
    <a class="categories" href="../sections/vans.php">Vans</a>
    <a class="categories" href="../sections/converse.php">Converse</a>
    <a class="categories" href="../sections/Reebok.php">Reebok</a>
    <a class="categories" href="../sections/ASICS.php">ASICS</a>
    <a class="categories" href="../sections/puma.php">Puma</a>
  </div>
  <div class="reminders">
    Free shipping on all orders over $150
  </div>
  <img onclick="toggleMobileMenu()" id="hamburger-menu-icon" class="hamburger-menu-icon" src="../images/categories imgs/hamburger-menu.svg">
  <div id="mobile-categories-selector" class="mobile-categories-selector">
    <a class="categories-mobile" href="../sections/all.php"><div>All Sneakers</div><span class="red-arrow">&#187;</span></a>
    <a class="categories-mobile" href="../sections/nike.php"><div>Nike</div><span class="red-arrow">&#187;</span></a>
    <a class="categories-mobile" href="../sections/air jordan.php"><div>Air Jordan</div><span class="red-arrow">&#187;</span></a>
    <a class="categories-mobile" href="../sections/Adidas.php"><div>Adidas</div><span class="red-arrow">&#187;</span></a>
    <a class="categories-mobile" href="../sections/vans.php"><div>Vans</div><span class="red-arrow">&#187;</span></a>
    <a class="categories-mobile" href="../sections/converse.php"><div>Converse</div><span class="red-arrow">&#187;</span></a>
    <a class="categories-mobile" href="../sections/Reebok.php"><div>Reebok</div><span class="red-arrow">&#187;</span></a>
    <a class="categories-mobile" href="../sections/ASICS.php"><div>ASICS</div><span class="red-arrow">&#187;</span></a>
    <a class="categories-mobile" href="../sections/puma.php"><div>Puma</div><span class="red-arrow">&#187;</span></a>
    <a class="categories-mobile" href="../sections/support.php"><div class="support">Support</div><span class="red-arrow">&#187;</span></a>
  </div>
  <div id="liveTimer" class="liveTimer">
  </div>
</nav>