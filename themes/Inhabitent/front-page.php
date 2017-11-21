<?php
/**
 * The Front Page template file.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<body>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>





			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<section class="product-info container"> <!-- Products I think -->
            <h2>Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product-type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">

                  <?php foreach ( $terms as $term ) : ?>

                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '../assets/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>

                  <?php endforeach; ?>

               </div>
               
            <?php endif; ?>
         </section>





<?php
$args = array(
	'posts_per_page'   => 3,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	  			 => '',
	'author_name'	 		 => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
$posts_array = get_posts( $args ); ?>

<?php $products = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $products->have_posts() ) : ?>
	 <?php while ( $products->have_posts() ) : $products->the_post(); ?>
		<div class="front_page_journal">
	 		<?php the_post_thumbnail( 'medium_large' )?>
      <h1><?php the_title(); ?></h1>
			<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
		</div>

   <?php endwhile; ?>
   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>




<div class="latest-adventures">
	<h1>Latest Adventures</h1>
</div>
<section class="latest-adventures-container">
	<div class="canoe-gal">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/canoe-girl.jpg" class="girl-in-canoe" alt="Girl in canoe" >
	</div>
	  <div class="three-pic-flex">
	  <div class="bonfire">
	    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/beach-bonfire.jpg" class="beach-fire" alt="Bonfire on the beach" >
    </div>
    <div class="mountain-night">
		  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/mountain-hikers.jpg" class="mountain-pic" alt="Mountain hiking"> 
		  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/night-sky.jpg" class="night-sky" alt="Sky at night" >
	  </div>
  </div>
<section>

</body>

<aside class-"footer-over-here"><?php get_sidebar(); ?></aside>
<?php get_footer(); ?>
