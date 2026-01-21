<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - Banky Less</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../../assets/css/mico-marco.css">
</head>
<body>
  <div class="page" id="about">
    <?php $active = 'about'; include __DIR__ . '/partials/nav.php'; ?>

    <section class="section">
      <div class="about">
        <div class="section-header">
          <h2 class="section-title">About Banky Less</h2>
          <p class="section-subtitle">Your Premier Destination for Luxury Hospitality</p>
        </div>
        <div class="about-hero">
          <img src="../../assets/city-skyline.jpg" alt="City skyline near Banky Less Hotel">
        </div>
        <div class="story">
          <h3>Our Story</h3>
          <p style="margin-bottom:12px;">Banky Less Five Star Hotel sets the standard for luxury hospitality. Our commitment to excellence ensures every guest experiences the finest in comfort, cuisine, and customer care.</p>
          <p>Located in the heart of the city, we offer world-class accommodations that blend modern sophistication with timeless charm.</p>
          <div class="grid feature-cards">
            <div class="card">
              <div class="icon-circle"><i class="fa-solid fa-trophy"></i></div>
              <h3>Award Winning</h3>
              <p>Recognized internationally for excellence in hospitality.</p>
            </div>
            <div class="card">
              <div class="icon-circle"><i class="fa-solid fa-user-tie"></i></div>
              <h3>Expert Staff</h3>
              <p>Professionally trained team available 24/7.</p>
            </div>
            <div class="card">
              <div class="icon-circle"><i class="fa-solid fa-location-dot"></i></div>
              <h3>Prime Location</h3>
              <p>Centrally located near major attractions.</p>
            </div>
            <div class="card">
              <div class="icon-circle"><i class="fa-solid fa-clock"></i></div>
              <h3>24/7 Service</h3>
              <p>Round-the-clock assistance for all your needs.</p>
            </div>
          </div>
          <div class="amenities">
            <h3>Our Amenities</h3>
            <ul class="amenity-list">
              <li><i class="fa-solid fa-check-circle"></i> Fine Dining Restaurant</li>
              <li><i class="fa-solid fa-check-circle"></i> Luxury Spa & Wellness</li>
              <li><i class="fa-solid fa-check-circle"></i> State-of-the-art Gym</li>
              <li><i class="fa-solid fa-check-circle"></i> Swimming Pool</li>
              <li><i class="fa-solid fa-check-circle"></i> Business Center</li>
              <li><i class="fa-solid fa-check-circle"></i> Concierge Service</li>
              <li><i class="fa-solid fa-check-circle"></i> Valet Parking</li>
              <li><i class="fa-solid fa-check-circle"></i> Airport Shuttle</li>
              <li><i class="fa-solid fa-check-circle"></i> Free WiFi</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <?php include __DIR__ . '/partials/footer.php'; ?>
  </div>
</body>
</html>


