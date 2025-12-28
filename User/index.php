<?php
session_start();
$cartCount = $_SESSION['cart_count'] ?? 99;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GND Food Products - Premium Quality Meat & Seafood</title>

  <link rel="stylesheet" href="/Regis/assets/css/index.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
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
        <a href="/Regis/User/index.php" class="nav-link active">Home</a>
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
  <section class="hero">
    <div class="hero-content">
      <h1>Super duper fantastic deals</h1>
      <p>On all off our products</p>
      <p class="hero-subtitle">Save more with discounts up to 50%!</p>
      <a href="shop.php" class="btn btn-primary">Shop Now</a>
    </div>
    <div class="hero-image">
      <i class="fas fa-fish"></i>
    </div>
  </section>


  <section class="category-showcase">
    <?php
      $categories = [
        'Pork Belly', 'Chicken Wings', 'Grilled Fish',
        'Fresh Veggies', 'Happy Meals', 'Bulk Orders'
      ];
      foreach ($categories as $category):
    ?>
      <div class="category-item">
        <span><?= htmlspecialchars($category) ?></span>
      </div>
    <?php endforeach; ?>
  </section>
  
  <section class="featured-section">
    <h2>Featured Items</h2>
    <p class="section-subtitle">Check out these selection from our shop</p>

    <div class="products-grid">
      <?php
        $products = [
          ['Golden Pampano', 2250, 'fas fa-fish', true],
          ['Tuna Panga Premium', 2200, 'fas fa-drumstick-bite'],
          ['Tuna Belly', 3690, 'fas fa-fish'],
          ['Tuna Sashimi', 6000, 'fas fa-drumstick-bite'],
          ['Beef Shank Bulalo', 7500, 'fas fa-drumstick-bite'],
          ['Pork Belly Liempo', 6800, 'fas fa-fish'],
        ];

        foreach ($products as $product):
      ?>
      <div class="product-card">
        <?php if (!empty($product[3])): ?>
          <span class="badge best">BEST SELLER</span>
        <?php endif; ?>

        <div class="product-image">
          <i class="<?= $product[2] ?>"></i>
        </div>

        <div class="product-info">
          <h3><?= htmlspecialchars($product[0]) ?></h3>
          <div class="rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p class="price">₱<?= number_format($product[1]) ?></p>
          <button class="btn btn-secondary">Buy Now</button>
          <button class="btn-icon add-to-cart">
            <i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>
  
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

</div>

<script src="/Regis/script/index.js"></script>
</body>
</html>
