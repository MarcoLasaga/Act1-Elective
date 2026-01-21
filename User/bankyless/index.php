<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banky Less Five Star Hotel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../../assets/css/mico-marco.css">
</head>
<body>
  <div class="page" id="home">
    <?php $active = 'home'; include __DIR__ . '/partials/nav.php'; ?>

    <section class="hero">
      <div class="hero-inner">
        <h1>Welcome to Banky Less</h1>
        <p>Experience Luxury at Its Finest</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="reservation.php">Book Now</a>
          <a class="btn btn-secondary" href="about.php">Learn More</a>
        </div>
      </div>
    </section>

    <section class="section" id="why">
      <div class="section-header">
        <h2 class="section-title">Why Choose Us</h2>
        <p class="section-subtitle">Discover what makes us special</p>
      </div>
      <div class="grid why-grid">
        <div class="card">
          <div class="icon-circle"><i class="fa-solid fa-star"></i></div>
          <h3>Five Star Service</h3>
          <p>World-class hospitality with dedicated staff available 24/7.</p>
        </div>
        <div class="card">
          <div class="icon-circle"><i class="fa-solid fa-gem"></i></div>
          <h3>Luxury Rooms</h3>
          <p>Elegantly designed rooms with premium amenities for your comfort.</p>
        </div>
        <div class="card">
          <div class="icon-circle"><i class="fa-solid fa-wifi"></i></div>
          <h3>Modern Amenities</h3>
          <p>High-speed WiFi, spa, fitness center, and much more.</p>
        </div>
      </div>
    </section>

    <section class="section" id="accommodations">
      <div class="section-header">
        <h2 class="section-title">Our Accommodations</h2>
        <p class="section-subtitle">Choose from our selection of premium rooms</p>
      </div>
      <div class="grid rooms-grid">
        <div class="card room-card">
          <div class="room-image" style="background-image:url('https://images.unsplash.com/photo-1600585152220-90363fe7e115?auto=format&fit=crop&w=900&q=80');"></div>
          <div class="room-body">
            <h3>Regular Room</h3>
            <div class="price">Starting from PHP 100/day</div>
            <div class="muted">Comfortable and affordable accommodation</div>
          </div>
        </div>
        <div class="card room-card">
          <div class="room-image" style="background-image:url('https://images.unsplash.com/photo-1505761671935-60b3a7427bad?auto=format&fit=crop&w=900&q=80');"></div>
          <div class="room-body">
            <h3>Deluxe Room</h3>
            <div class="price">Starting from PHP 300/day</div>
            <div class="muted">Elegance and premium comfort</div>
          </div>
        </div>
        <div class="card room-card">
          <div class="room-image" style="background-image:url('https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=900&q=80');"></div>
          <div class="room-body">
            <h3>Suite</h3>
            <div class="price">Starting from PHP 500/day</div>
            <div class="muted">Ultimate luxury and spacious elegance</div>
          </div>
        </div>
      </div>
    </section>

    <?php include __DIR__ . '/partials/footer.php'; ?>
  </div>
</body>
</html>


