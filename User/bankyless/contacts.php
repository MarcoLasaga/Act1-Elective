<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts - Banky Less</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../../assets/css/mico-marco.css">
</head>
<body>
  <div class="page" id="contact">
    <?php $active = 'contacts'; include __DIR__ . '/partials/nav.php'; ?>

    <section class="section">
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

    <?php include __DIR__ . '/partials/footer.php'; ?>
  </div>
</body>
</html>


