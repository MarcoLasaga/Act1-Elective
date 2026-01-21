<?php
  // $active should be one of: home, about, reservation, contacts
  $active = $active ?? 'home';
?>
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
      <a class="<?= $active === 'home' ? 'active' : '' ?>" href="index.php">Home</a>
      <a class="<?= $active === 'about' ? 'active' : '' ?>" href="about.php">About</a>
      <a class="<?= $active === 'reservation' ? 'active' : '' ?>" href="reservation.php">Reservation</a>
      <a class="<?= $active === 'contacts' ? 'active' : '' ?>" href="contacts.php">Contacts</a>
    </nav>
  </div>
</header>


