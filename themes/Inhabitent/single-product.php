<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="border: none;">
			<div class="single-product-flex-container">
				<div class="single-product-image">
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
			 	</div> <!-- single-product-image -->
			 	<div class="single-product-text-media">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<?php echo CFS()->get('price'); ?>
					</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- entry-content -->

			<footer class="entry-footer">
				<?php inhabitent_entry_footer(); ?>
					<div class="social-media-buttons">
						<button><i class="fa fa-facebook"></i>  Like</button>
						<button><i class="fa fa-twitter"></i>  Tweet</button>
						<button><i class="fa fa-pinterest"></i>  Pin</button>
				</div> <!--social-media-buttons-->
			</footer><!-- .entry-footer -->
				</div> <!-- single-product-text-media -->
			</div> <!-- single-product-flex-container -->
		</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

</div><!-- close .site -->

<div class="footer-over-here">
	<?php get_footer(); ?>
</div> <!-- footer-over-here -->
