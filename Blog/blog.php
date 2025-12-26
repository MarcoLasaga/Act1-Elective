<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog - GND</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="/Regis/assets/css/UserStyles.css">
</head>
<body>
  <div class="user-app">
    <!-- Header -->
    <header class="user-header">
      <div class="header-container">
        <a href="index.html" class="logo">
          <i class="fas fa-utensils"></i>
          <span>GND</span>
        </a>
        <nav class="main-nav">
          <a href="index.html" class="nav-link">Home</a>
          <a href="shop.html" class="nav-link">Shop</a>
          <a href="blog.html" class="nav-link active">Blog</a>
          <a href="about.html" class="nav-link">About</a>
        </nav>
        <div class="header-actions">
          <a href="cart.html" class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-badge">3</span>
          </a>
        </div>
      </div>
    </header>

    <!-- Blog Hero Section -->
    <section class="blog-hero">
      <div class="blog-hero-content">
        <h1>Our Blog</h1>
        <p>Discover recipes, cooking tips, and food stories</p>
      </div>
    </section>

    <!-- Blog Search -->
    <section class="blog-search">
      <div class="search-container">
        <input type="text" placeholder="Search articles...">
        <button class="btn btn-primary">
          <i class="fas fa-search"></i>
          Search
        </button>
      </div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="blog-section">
      <div class="blog-grid">
        <!-- Blog Post 1 -->
        <article class="blog-card">
          <div class="blog-image">
            <i class="fas fa-utensils"></i>
          </div>
          <div class="blog-content">
            <div class="blog-meta">
              <span class="blog-date">
                <i class="fas fa-calendar"></i>
                June 15, 2023
              </span>
              <span class="blog-category">Recipes</span>
            </div>
            <h2 class="blog-title">10 Easy Dinner Recipes for Busy Weeknights</h2>
            <p class="blog-excerpt">Discover quick and delicious dinner ideas that will save you time without sacrificing flavor.</p>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>

        <!-- Blog Post 2 -->
        <article class="blog-card">
          <div class="blog-image">
            <i class="fas fa-seedling"></i>
          </div>
          <div class="blog-content">
            <div class="blog-meta">
              <span class="blog-date">
                <i class="fas fa-calendar"></i>
                June 10, 2023
              </span>
              <span class="blog-category">Health</span>
            </div>
            <h2 class="blog-title">The Benefits of Eating Seasonal Produce</h2>
            <p class="blog-excerpt">Learn why choosing seasonal fruits and vegetables is better for your health and the environment.</p>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>

        <!-- Blog Post 3 -->
        <article class="blog-card">
          <div class="blog-image">
            <i class="fas fa-bread-slice"></i>
          </div>
          <div class="blog-content">
            <div class="blog-meta">
              <span class="blog-date">
                <i class="fas fa-calendar"></i>
                June 5, 2023
              </span>
              <span class="blog-category">Baking</span>
            </div>
            <h2 class="blog-title">Perfect Artisan Bread at Home</h2>
            <p class="blog-excerpt">Master the art of homemade bread with our step-by-step guide to creating perfect loaves.</p>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>

        <!-- Blog Post 4 -->
        <article class="blog-card">
          <div class="blog-image">
            <i class="fas fa-leaf"></i>
          </div>
          <div class="blog-content">
            <div class="blog-meta">
              <span class="blog-date">
                <i class="fas fa-calendar"></i>
                May 28, 2023
              </span>
              <span class="blog-category">Sustainability</span>
            </div>
            <h2 class="blog-title">Reducing Food Waste in Your Kitchen</h2>
            <p class="blog-excerpt">Practical tips to minimize food waste and make the most of what you already have.</p>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>

        <!-- Blog Post 5 -->
        <article class="blog-card">
          <div class="blog-image">
            <i class="fas fa-pepper-hot"></i>
          </div>
          <div class="blog-content">
            <div class="blog-meta">
              <span class="blog-date">
                <i class="fas fa-calendar"></i>
                May 22, 2023
              </span>
              <span class="blog-category">Spices</span>
            </div>
            <h2 class="blog-title">The Science Behind Spicy Foods</h2>
            <p class="blog-excerpt">Explore how spices affect our taste buds and what makes some foods taste hotter than others.</p>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>

        <!-- Blog Post 6 -->
        <article class="blog-card">
          <div class="blog-image">
            <i class="fas fa-mug-hot"></i>
          </div>
          <div class="blog-content">
            <div class="blog-meta">
              <span class="blog-date">
                <i class="fas fa-calendar"></i>
                May 15, 2023
              </span>
              <span class="blog-category">Drinks</span>
            </div>
            <h2 class="blog-title">Crafting the Perfect Cup of Coffee</h2>
            <p class="blog-excerpt">From bean selection to brewing technique, learn how to make exceptional coffee at home.</p>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
      <div class="newsletter-container">
        <h2>Join Our Food Community</h2>
        <p>Subscribe to get weekly recipes and cooking tips</p>
        <form class="newsletter-form">
          <input type="email" placeholder="Enter your email" required>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h4>Contact Us</h4>
          <p><i class="fas fa-envelope"></i> info@gnd.com</p>
          <p><i class="fas fa-phone"></i> (123) 456-7890</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2023 GND. All rights reserved.</p>
      </div>
    </footer>
  </div>
</body>
</html>