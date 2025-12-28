<?php
session_start();
$cartCount = $_SESSION['cart_count'] ?? 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart - GND</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="/Regis/assets/css/cart.css">
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

    <section class="cart-hero">
      <div class="cart-hero-content">
        <h1>Shopping Cart</h1>
        <p>Review and manage your items</p>
      </div>
    </section>

    <section class="cart-content">
      <div class="cart-container">
        <div class="cart-items-section">
          <h2>Your Items</h2>

          <div class="cart-item">
            <div class="item-image"><i class="fas fa-drumstick-bite"></i></div>
            <div class="item-details">
              <h3>Premium Beef</h3>
              <p class="item-category">Meat</p>
              <p class="item-price">$12.99/lb</p>
            </div>
            <div class="item-quantity">
              <button class="qty-btn minus"><i class="fas fa-minus"></i></button>
              <input type="number" value="2" min="1">
              <button class="qty-btn plus"><i class="fas fa-plus"></i></button>
            </div>
            <div class="item-total"><p>$25.98</p></div>
            <button class="remove-btn"><i class="fas fa-trash"></i></button>
          </div>

          <div class="cart-item">
            <div class="item-image"><i class="fas fa-fish"></i></div>
            <div class="item-details">
              <h3>Fresh Salmon</h3>
              <p class="item-category">Seafood</p>
              <p class="item-price">$18.99/lb</p>
            </div>
            <div class="item-quantity">
              <button class="qty-btn minus"><i class="fas fa-minus"></i></button>
              <input type="number" value="1" min="1">
              <button class="qty-btn plus"><i class="fas fa-plus"></i></button>
            </div>
            <div class="item-total"><p>$18.99</p></div>
            <button class="remove-btn"><i class="fas fa-trash"></i></button>
          </div>

          <div class="cart-item">
            <div class="item-image"><i class="fas fa-leaf"></i></div>
            <div class="item-details">
              <h3>Fresh Vegetables</h3>
              <p class="item-category">Vegetables</p>
              <p class="item-price">$8.99/bundle</p>
            </div>
            <div class="item-quantity">
              <button class="qty-btn minus"><i class="fas fa-minus"></i></button>
              <input type="number" value="1" min="1">
              <button class="qty-btn plus"><i class="fas fa-plus"></i></button>
            </div>
            <div class="item-total"><p>$8.99</p></div>
            <button class="remove-btn"><i class="fas fa-trash"></i></button>
          </div>

          <div class="cart-actions">
            <a href="shop.php" class="btn btn-secondary">
              <i class="fas fa-arrow-left"></i>
              Continue Shopping
            </a>
            <button class="btn btn-danger">
              <i class="fas fa-trash"></i>
              Clear Cart
            </button>
          </div>
        </div>

        <div class="cart-summary-section">
          <div class="summary-card">
            <h3>Order Summary</h3>

            <div class="summary-row"><span>Subtotal:</span><span>$53.96</span></div>
            <div class="summary-row"><span>Shipping:</span><span>$5.00</span></div>
            <div class="summary-row"><span>Tax:</span><span>$4.68</span></div>

            <div class="summary-divider"></div>

            <div class="summary-row total"><span>Total:</span><span>$63.64</span></div>

            <button class="btn btn-primary btn-block">
              <i class="fas fa-credit-card"></i>
              Proceed to Checkout
            </button>

            <div class="promo-code">
              <input type="text" placeholder="Enter promo code">
              <button class="btn btn-secondary">Apply</button>
            </div>
          </div>

          <div class="shipping-info">
            <h4>Shipping Information</h4>
            <div class="shipping-option">
              <input type="radio" id="standard" name="shipping" checked>
              <label for="standard"><span>Standard Shipping (5-7 days)</span><span>$5.00</span></label>
            </div>
            <div class="shipping-option">
              <input type="radio" id="express" name="shipping">
              <label for="express"><span>Express Shipping (2-3 days)</span><span>$12.00</span></label>
            </div>
            <div class="shipping-option">
              <input type="radio" id="overnight" name="shipping">
              <label for="overnight"><span>Overnight Shipping</span><span>$25.00</span></label>
            </div>
          </div>

          <div class="security-info">
            <div class="security-item"><i class="fas fa-lock"></i><span>Secure Checkout</span></div>
            <div class="security-item"><i class="fas fa-shield-alt"></i><span>SSL Encrypted</span></div>
            <div class="security-item"><i class="fas fa-check-circle"></i><span>Money Back Guarantee</span></div>
          </div>
        </div>
      </div>
    </section>

    <section class="related-products">
      <h2>You Might Also Like</h2>
      <div class="products-grid">
        <div class="product-card">
          <div class="product-image"><i class="fas fa-egg"></i></div>
          <div class="product-info">
            <h3>Eggs (Dozen)</h3>
            <p class="product-category">Dairy</p>
            <div class="product-price">$4.99</div>
            <button class="add-to-cart-btn">Add to Cart</button>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image"><i class="fas fa-apple-alt"></i></div>
          <div class="product-info">
            <h3>Fresh Fruits</h3>
            <p class="product-category">Fruits</p>
            <div class="product-price">$7.99</div>
            <button class="add-to-cart-btn">Add to Cart</button>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image"><i class="fas fa-drumstick-bite"></i></div>
          <div class="product-info">
            <h3>Chicken Wings</h3>
            <p class="product-category">Poultry</p>
            <div class="product-price">$9.99</div>
            <button class="add-to-cart-btn">Add to Cart</button>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image"><i class="fas fa-cheese"></i></div>
          <div class="product-info">
            <h3>Artisan Cheese</h3>
            <p class="product-category">Dairy</p>
            <div class="product-price">$14.99</div>
            <button class="add-to-cart-btn">Add to Cart</button>
          </div>
        </div>
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
