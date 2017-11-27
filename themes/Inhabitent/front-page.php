<?php
/**
 * The Front Page template file.
 *
 * @package Inhabitent_Theme
 */?>

<?php get_header(); ?>


<body>
	
	<div class="front-page-hero">
	</div> <!--front-page-hero-->
		<section class="custom-hero-banner">
    </section>	
		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		
		<div class="journal-information ">
		

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>




      </div> <!-- journal information -->
		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="product-information maxcontain">
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
</div> <!-- product information -->


<div id="something" class="products-or-something maxcontain">
		<h1>Inhabitent Journal</h1>
<section class="front_page_journal">
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
				
			<div class="single-journal-display">	
			<div class="journal-display-image"> 
			<?php the_post_thumbnail( 'large' )?>
			</div> <!-- journal-display-image-->
			<div class="journal-display-text">
			<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
			</div> <!--journal-display-text-->

			<div class="journal-display-title">
			<h3><?php the_title(); ?></h3>
			</div> <!-- journal-diplay-title-->
			
			<div class="journal-display-url">
			<a class="back-btn" href="http://inhabitent/ <?php the_title(); ?>">Read Entry</a>
     </div> <!-- journal-display-url -->
     </div> <!-- single-journal-display -->	
		


	 <?php endwhile; ?>
	</section> <!-- front_page_journal--> 
   <?php the_posts_navigation(); ?>
  <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
</div> <!-- products-or-something -->


<div class="adventures-wrapper maxcontain">



<div class="latest-adventures ">
	<h1>Latest Adventures</h1>
</div>
<div class="center-latest-adventures">

<section class="latest-adventures-container">
	<div class="canoe-gal">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/canoe-girl.jpg" class="girl-in-canoe" alt="Girl in canoe" >
		<h3 class="entry-title">
			Getting Back to Nature in a Canoe
		<h3>
		<a class="white-btn" href="http://localhost:3000/Inhabitent/">Read More</a>
	</div>
	  <div class="three-pic-flex">
	  <div class="bonfire">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/beach-bonfire.jpg" class="beach-fire" alt="Bonfire on the beach" >
			<h3 class="entry-title">
				A Night with Friends as the Beach
			<h3>
			<a class="white-btn" href="http://localhost:3000/Inhabitent/">Read More</a>
    </div>
    <div class="mountain-night">
			<div class="mountain-pic-one">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/mountain-hikers.jpg" class="mountain-pic" alt="Mountain hiking"> 
				<h3 class="entry-title">
					Taking in the View at Big Mountain
				<h3>
				<a class="white-btn" href="http://localhost:3000/Inhabitent/">Read More</a>
			</div> <!-- mountain-pic-one-->
			<div class="mountain-pic-two">		
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/night-sky.jpg" class="night-sky" alt="Sky at night" >
				<h3 class="entry-title">
					Star Gazing at the Night Sky
				<h3>
				<a class="white-btn" href="http://localhost:3000/Inhabitent/">Read More</a>
			</div> <!-- mountain-pic-two-->	
	  </div>
  </div>
</section>
</div> <!-- center-latest-adventures-->

</div>





<div class="footer-over-here">
<?php get_footer(); ?>
</div> <!-- footer-over-here -->


<!-- <img src="<?php echo get_template_directory_uri() . '/assets/images/inhabitent-logo-full.svg' ?>" class="logo-front" alt="Inhabitent logo" />
			 <img src="<?php echo get_template_directory_uri() . '/assets/images/home-hero.jpg' ?>" class="logo-back" alt="Inhabitent Hero" /> -->