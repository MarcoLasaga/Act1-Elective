<?php
// Static landing page for Banky Less Hotel
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banky Less Five Star Hotel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/mico-marco.css">
</head>
<body>
  <div class="page">
    <!-- Top Navigation -->
    <header class="nav">
      <div class="nav-inner">
        <div class="brand">
          <div class="icon"><i class="fa-solid fa-hotel"></i></div>
          <div>
             <div>Banky Less</div>
            <small style="opacity:0.8;font-weight:500;">Five Star Hotel</small>
          </div>
        </div>
         <nav class="nav-links">
           <a href="bankyless/index.php">Home</a>
           <a href="bankyless/about.php">About</a>
           <a href="bankyless/reservation.php">Reservation</a>
           <a href="bankyless/contacts.php">Contacts</a>
         </nav>
      </div>
    </header>

    <!-- Hero -->
    <section class="hero" id="home">
      <div class="hero-inner">
         <h1>Welcome to Banky Less</h1>
        <p>Experience Luxury at Its Finest</p>
         <div class="hero-actions">
           <a class="btn btn-primary" href="bankyless/reservation.php">Book Now</a>
           <a class="btn btn-secondary" href="bankyless/about.php">Learn More</a>
         </div>
      </div>
    </section>

    <!-- Why Choose Us -->
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

    <!-- Accommodations -->
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
            <h3>De Luxe Room</h3>
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

    <!-- About -->
    <section class="section" id="about">
      <div class="about">
        <div class="section-header">
          <h2 class="section-title">About Banky Less</h2>
          <p class="section-subtitle">Your Premier Destination for Luxury Hospitality</p>
        </div>
        <div class="about-hero">
          <img src="https://images.unsplash.com/photo-1505761671935-60b3a7427bad?auto=format&fit=crop&w=1400&q=80" alt="Dining hall">
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

    <!-- Reservation -->
    <section class="section" id="reservation">
      <div class="reservation">
        <h2>Banky Less Five Star Hotel</h2>
        <p>Online Reservation</p>
        <form>
          <div class="form-grid">
            <div class="field">
              <label>Customer Name</label>
              <input type="text" placeholder="Your name">
            </div>
            <div class="field">
              <label>Contact Number</label>
              <input type="text" placeholder="09xx-xxx-xxxx">
            </div>
            <div class="field">
              <label>From</label>
              <input type="date">
            </div>
            <div class="field">
              <label>To</label>
              <input type="date">
            </div>
            <div class="field">
              <label>Room Type</label>
              <select>
                <option>Regular</option>
                <option>De Luxe</option>
                <option>Suite</option>
              </select>
            </div>
            <div class="field">
              <label>Room Capacity</label>
              <select>
                <option>Single</option>
                <option>Double</option>
                <option>Family</option>
              </select>
            </div>
            <div class="field">
              <label>Payment Type</label>
              <select>
                <option>Cash</option>
                <option>Cheque</option>
                <option>Credit Card</option>
              </select>
            </div>
            <div class="field">
              <label>Notes (optional)</label>
              <textarea placeholder="Special requests"></textarea>
            </div>
          </div>
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Submit Reservation</button>
            <button class="btn btn-secondary" type="reset">Clear Entry</button>
          </div>
        </form>
      </div>
    </section>

    <!-- Contact -->
    <section class="section" id="contact">
      <div class="contact-section">
        <div class="section-header">
          <h2 class="section-title">Contact Us</h2>
          <p class="section-subtitle">We'd love to hear from you</p>
        </div>
        <div class="grid contact-cards">
          <div class="card contact-card">
            <div class="icon-circle"><i class="fa-solid fa-location-dot"></i></div>
            <h4>Address</h4>
            <p>C5, corner Target Street<br>Taguig, Metro Manila</p>
          </div>
          <div class="card contact-card">
            <div class="icon-circle"><i class="fa-solid fa-phone"></i></div>
            <h4>Phone</h4>
            <div class="contact-body">
              <div>09202876573</div>
              <div>09920532549</div>
            </div>
          </div>
          <div class="card contact-card">
            <div class="icon-circle"><i class="fa-solid fa-envelope"></i></div>
            <h4>Email</h4>
            <div class="contact-body">
              <div>micocabrera1016@gmail.com</div>
              <div>mamamobenten@gmail.com</div>
            </div>
          </div>
          <div class="card contact-card">
            <div class="icon-circle"><i class="fa-solid fa-clock"></i></div>
            <h4>Business Hours</h4>
            <p>Front Desk: 24/7<br>Concierge: 6:00 AM - 10:00 PM</p>
          </div>
        </div>

        <div class="contact-grid">
          <div class="map-card">
            <div class="icon-circle"><i class="fa-solid fa-location-crosshairs"></i></div>
            <h4>Visit Us</h4>
            <p>Located in the heart of the city, easily accessible from all major points.</p>
          </div>
          <div class="form-card">
            <h3 style="margin-bottom:10px;">Send us a Message</h3>
            <div class="grid" style="grid-template-columns: repeat(auto-fit,minmax(220px,1fr)); gap:10px 14px;">
              <div class="field">
                <label>Your Name</label>
                <input type="text" placeholder="John Apolis">
              </div>
              <div class="field">
                <label>Email Address</label>
                <input type="email" placeholder="johnapolis@gmail.com">
              </div>
              <div class="field">
                <label>Phone Number</label>
                <input type="text" placeholder="+63 9xx xxx xxxx">
              </div>
              <div class="field" style="grid-column:1 / -1;">
                <label>Message</label>
                <textarea placeholder="How can we help you?"></textarea>
              </div>
            </div>
            <div class="form-actions" style="justify-content:flex-end;">
              <button class="btn btn-primary" type="button">Send Message</button>
            </div>
          </div>
        </div>

        <div class="assistance">
          <h3>Need Immediate Assistance?</h3>
          <p>Our team is available 24/7 to help you</p>
          <div class="assistance-grid">
            <div><strong>Emergency</strong><br>Call: +63 (2) 9999-9999</div>
            <div><strong>Reservations</strong><br>Call: +63 (917) 123-4567</div>
            <div><strong>Guest Services</strong><br>Dial 0 from your room</div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div>Banky Less Five Star Hotel</div>
      <div style="margin-top:6px;">&copy; <?php echo date('Y'); ?> All Rights Reserved</div>
    </footer>
  </div>

   <!-- Single-page script removed because tabs are now separate pages -->
</body>
</html>

