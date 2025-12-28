<?php
session_start();
$cartCount = $_SESSION['cart_count'] ?? 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - GND</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="/Regis/assets/css/about.css">
</head>
<body>
  <div class="user-app">
    <!-- Header -->
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
          <a href="/Regis/User/about.php" class="nav-link active">About</a>
        </nav>
        <div class="header-actions">
          <a href="cart.php" class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-badge"><?= $cartCount ?></span>
          </a>
        </div>
      </div>
    </header>

    <!-- About Hero Section -->
    <section class="about-hero">
      <div class="about-hero-content">
        <h1>About GND</h1>
        <p>Bringing Fresh, Quality Ingredients to Your Table</p>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
      <div class="contact-container">
        <h2>Get in Touch</h2>

        <div class="contact-map">
          <iframe
            src="https://www.google.com/maps?q=123%20Market%20Street%20Food%20City&output=embed"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

        <div class="contact-info">
          <div class="contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <div>
              <h3>Address</h3>
              <p>123 Market Street<br>Food City, FC 12345</p>
            </div>
          </div>
          <div class="contact-item">
            <i class="fas fa-phone"></i>
            <div>
              <h3>Phone</h3>
              <p>(123) 456-7890</p>
            </div>
          </div>
          <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <div>
              <h3>Email</h3>
              <p>info@gnd.com</p>
            </div>
          </div>
          <div class="contact-item">
            <i class="fas fa-clock"></i>
            <div>
              <h3>Hours</h3>
              <p>Mon - Fri: 9AM - 6PM<br>Sat - Sun: 10AM - 5PM</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Story -->
    <section class="about-story">
      <div class="story-container">
        <div class="story-content">
          <h2>Our Story</h2>
          <p>
            Founded in 2015, GND started with a simple mission: to provide the freshest,
            highest-quality ingredients to food enthusiasts and professional chefs alike.
          </p>
          <p>
            We work directly with local farmers and suppliers to ensure every product
            meets our strict quality standards—from farm to table.
          </p>
        </div>
        <div class="story-image">
          <i class="fas fa-store"></i>
        </div>
      </div>
    </section>

    <!-- Mission & Values -->
    <section class="mission-values">
      <div class="mission-container">
        <div class="mission-card">
          <div class="mission-icon"><i class="fas fa-leaf"></i></div>
          <h3>Quality</h3>
          <p>Only the finest ingredients from trusted suppliers.</p>
        </div>
        <div class="mission-card">
          <div class="mission-icon"><i class="fas fa-handshake"></i></div>
          <h3>Sustainability</h3>
          <p>Committed to eco-friendly and ethical sourcing.</p>
        </div>
        <div class="mission-card">
          <div class="mission-icon"><i class="fas fa-heart"></i></div>
          <h3>Passion</h3>
          <p>We love food and helping you create amazing meals.</p>
        </div>
        <div class="mission-card">
          <div class="mission-icon"><i class="fas fa-users"></i></div>
          <h3>Community</h3>
          <p>Supporting local growers and food lovers.</p>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="team-section">
      <h2>Meet Our Team</h2>
      <div class="team-container">
        <div class="team-member">
          <div class="member-image"><i class="fas fa-user-circle"></i></div>
          <h3>John Smith</h3>
          <p class="member-role">Founder & CEO</p>
          <p class="member-bio">20+ years in the food industry.</p>
        </div>
        <div class="team-member">
          <div class="member-image"><i class="fas fa-user-circle"></i></div>
          <h3>Maria Garcia</h3>
          <p class="member-role">Head Chef</p>
          <p class="member-bio">Curates every product personally.</p>
        </div>
        <div class="team-member">
          <div class="member-image"><i class="fas fa-user-circle"></i></div>
          <h3>David Chen</h3>
          <p class="member-role">Operations Manager</p>
          <p class="member-bio">Ensures quality & smooth delivery.</p>
        </div>
        <div class="team-member">
          <div class="member-image"><i class="fas fa-user-circle"></i></div>
          <h3>Sarah Johnson</h3>
          <p class="member-role">Community Manager</p>
          <p class="member-bio">Connects food lovers together.</p>
        </div>
      </div>
    </section>

    <!-- Newsletter -->
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

    <!-- Footer -->
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
