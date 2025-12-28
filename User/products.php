<?php
session_start();
$cartCount = $_SESSION['cart_count'] ?? 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tuna Belly - GND</title>

  <link rel="stylesheet" href="/Regis/products.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="user-app">
    <header class="user-header">
      <div class="header-container">
        <a href="index.php" class="logo">
          <i class="fas fa-utensils"></i>
          <span>GND</span>
        </a>
        <nav class="main-nav">
          <a href="/Regis/User/index.php" class="nav-link">Home</a>
          <a href="/Regis/User/shop.php" class="nav-link">Shop</a>
          <a href="/Regis/User/blog.php" class="nav-link">Blog</a>
          <a href="/Regis/User/about.php" class="nav-link">About</a>
        </nav>
        <div class="header-actions">
          <a href="cart.php" class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-badge"><?= $cartCount ?></span>
          </a>
        </div>
      </div>
    </header>

    <section class="product-page container">
      <div class="product-grid">
        <div class="product-images">
          <img id="mainImage" src="assets/img/tuna-belly.jpg" alt="Tuna Belly">
          <div class="thumbs">
            <img src="assets/img/tuna-belly.jpg" onclick="changeImage(this.src)">
            <img src="assets/img/tuna-2.jpg" onclick="changeImage(this.src)">
            <img src="assets/img/tuna-3.jpg" onclick="changeImage(this.src)">
          </div>
        </div>

        <div class="product-info">
          <p class="breadcrumb">Home / Tuna</p>
          <h1>Tuna Belly</h1>

          <div class="price-group">
            <p class="price">
              ₱<span id="totalPrice">3,690</span>
              <span class="muted">/ <span id="totalKg">10</span> kilos</span>
            </p>
            <p class="perkg">₱369 per kilo</p>
          </div>

          <div class="actions">
            <input type="number" id="kgInput" min="1" value="10" placeholder="KG">
            <button onclick="addToCart()">Add to Cart</button>
          </div>

          <div class="details">
            <h3>Product Details</h3>
            <p class="desc">
              Premium tuna belly sourced fresh daily. Ideal for sashimi, grilling,
              or premium dishes. Carefully handled to preserve freshness and flavor.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="featured">
      <h2>Featured Items</h2>
      <p class="subtitle">Check out these selection from our shop!</p>

      <div class="featured-grid">
        <div class="featured-card">
          <span class="badge">Best Seller</span>
          <img src="assets/img/pampano.jpg">
          <h4>Golden Pampano</h4>
          <p class="price">₱2,250</p>
        </div>

        <div class="featured-card">
          <img src="assets/img/tuna-panga.jpg">
          <h4>Tuna Panga Premium</h4>
          <p class="price">₱2,200</p>
        </div>

        <div class="featured-card">
          <span class="badge">Best Seller</span>
          <img src="assets/img/tuna-belly.jpg">
          <h4>Tuna Belly</h4>
          <p class="price">₱3,690</p>
        </div>
      </div>

      <section class="newsletter">
        <div class="newsletter-container">
          <h2>Join Our Food Community</h2>
          <p>Subscribe to get weekly recipes and cooking tips</p>
          <form class="newsletter-form" method="post" action="subscribe.php">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit" class="btn btn-secondary">Subscribe</button>
          </form>
        </div>
      </section>

      <footer class="user-footer">
        <div class="footer-container">
          <div class="footer-section">
            <h3>GND</h3>
            <p>Delivering fresh, delicious ingredients for your culinary adventures.</p>
          </div>
          <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="/Regis/User/index.php">Home</a></li>
              <li><a href="/Regis/User/shop.php">Shop</a></li>
              <li><a href="/Regis/User/blog.php">Blog</a></li>
              <li><a href="/Regis/User/about.php">About</a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h4>Contact Us</h4>
            <p><i class="fas fa-envelope"></i> info@gnd.com</p>
            <p><i class="fas fa-phone"></i> (123) 456-7890</p>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; <?= date('Y') ?> GND. All rights reserved.</p>
        </div>
      </footer>
    </section>
  </div>

  <script src="/Regis/cart.js"></script>
</body>
</html>
