<?php
// home.php

get_header(); // Include the header template
?>

<main>
  <h1>Welcome to the Home Page</h1>
   <!-- Hero Section -->
  <section class="hero">
    <h1>Welcome to Our Beauty Salon</h1>
    <a href="#" class="cta-button">Book Now</a>
  </section>

  <!-- About Us Section -->
  <section class="about-us">
    <h2>About Us</h2>
    <!-- Your about us content here -->
  </section>

  <!-- Treatment Offers Section -->
  <section class="treatment-offers">
    <h2>Treatment Offers</h2>
    <div class="offer">
      <img src="offer1.jpg" alt="Offer 1">
      <h3>Treatment 1</h3>
      <p>Price: $X</p>
    </div>
    <!-- Repeat the offer structure for the other treatment offers -->
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials">
    <h2>Testimonials</h2>
    <div class="testimonial-slider">
      <!-- Your testimonial slider implementation here -->
    </div>
  </section>
</main>

<?php
get_footer(); // Include the footer template
?>
