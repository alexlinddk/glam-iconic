<?php
// single.php

get_header(); // Include the header template
?>

<main>
  <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="treatment-details">
        <div class="treatment-image">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="treatment-description">
          <h1><?php the_title(); ?></h1>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </article>
  <?php endwhile; ?>
</main>

<?php
get_footer(); // Include the footer template
?>
