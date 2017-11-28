<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class="surround-it-all">

	<div class="start-flexing-single">
		<div id="primary single-page-contained" class="content-area">
			<main id="main i-want-this-page" class="site-main wow ouch" role="main" style:"width=867px;">
				<div id="blah" class="test-blah">
						<?php while ( have_posts() ) : the_post(); ?>
				
						<?php get_template_part( 'template-parts/content', 'single' ); ?>
			
						<?php the_post_navigation(); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

						<?php endwhile; // End of the loop. ?>
				</div> <!-- testing crap here -->
			</main><!-- #main -->
		</div><!-- #primary single-page-contained -->	

			<div class="single-sidebar">
				<?php get_sidebar(); ?>	
			</div> <!-- single-sidebar -->
	</div> <!-- start-flexing-single -->		
</div> <!--surround-it-all-->

<div class="footer-over-here">
	<?php get_footer(); ?>
</div> <!-- footer-over-here -->

	



