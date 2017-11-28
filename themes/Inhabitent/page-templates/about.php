<?php

/**
*
* Template Name: About
*
* @package Inhabitent Theme
*
**/

get_header ();  ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" >
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header custom-hero">
        <div class="container">
          <?php the_title( '<h1 class="entry-title">', '</h1>'); ?>
        </div>
      </header>

      <div class="container maxcontain">
        <div class="entry-content">
          <h2>Our Story</h2>
          <?php echo CFS()->get( 'about_our_story' ); ?>

          <h2>Our Team</h2>
          <?php echo CFS()->get( 'about_our_team' ); ?>
        </div>
      </div>
    </article>
  </main> <!-- #main -->
</div> <!-- #primary -->


</div><!-- close .site -->


<?php get_footer(); ?>
