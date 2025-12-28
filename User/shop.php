<?php
session_start();
$cartCount = $_SESSION['cart_count'] ?? 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop - GND</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="/Regis/assets/css/shop.css">
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
          <a href="/Regis/User/shop.php" class="nav-link active">Shop</a>
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

    <section class="shop-hero">
      <div class="shop-hero-content">
        <h1>Our Shop</h1>
        <p>Discover our premium selection of fresh ingredients and prepared dishes</p>
      </div>
    </section>

    <section class="shop-filters">
      <div class="filters-container">
        <div class="filter-group">
          <label for="category-filter">Category</label>
          <select id="category-filter">
            <option value="">All Categories</option>
            <option value="meat">Meat</option>
            <option value="poultry">Poultry</option>
            <option value="seafood">Seafood</option>
            <option value="vegetables">Vegetables</option>
          </select>
        </div>
        <div class="filter-group">
          <label for="price-filter">Price Range</label>
          <select id="price-filter">
            <option value="">All Prices</option>
            <option value="0-10">Under $10</option>
            <option value="10-25">$10 - $25</option>
            <option value="25+">Over $25</option>
          </select>
        </div>
        <div class="filter-group">
          <label for="sort-filter">Sort By</label>
          <select id="sort-filter">
            <option value="name">Name</option>
            <option value="price-low">Price: Low to High</option>
            <option value="price-high">Price: High to Low</option>
            <option value="rating">Rating</option>
          </select>
        </div>
      </div>
    </section>

    <section class="shop-products">
      <div class="products-container">
        <?php
        $products = [
          ['Premium Beef', 'Fresh, high-quality beef from local farms', '$12.99/lb'],
          ['Fresh Salmon', 'Wild-caught salmon, rich in omega-3 fatty acids', '$15.99/lb'],
          ['Organic Spinach', 'Fresh organic spinach, perfect for salads', '$3.99/bunch'],
          ['Free-range Chicken', 'Free-range chicken breast, tender and juicy', '$8.99/lb'],
          ['Avocados', 'Ripe, creamy avocados, perfect for guacamole', '$2.99/each'],
          ['Organic Tomatoes', 'Juicy organic tomatoes, great for salads', '$4.99/pound'],
        ];
        foreach ($products as $product):
        ?>
        <div class="product-card">
          <img src="https://via.placeholder.com/300x300" alt="Product Image">
          <div class="product-info">
            <h3><?= htmlspecialchars($product[0]) ?></h3>
            <p class="product-description"><?= htmlspecialchars($product[1]) ?></p>
            <div class="product-price"><?= htmlspecialchars($product[2]) ?></div>
            <button class="add-to-cart-btn">Add to Cart</button>
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
</body>
</html>
