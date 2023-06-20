<?php
// index.php

get_header(); // Include the header template

while (have_posts()) {
  the_post();
  // Display the content of each post or page
  ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </article>
  <?php
}

get_footer(); // Include the footer template
?>
