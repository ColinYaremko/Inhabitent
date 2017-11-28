<?php
/**
 * Display archive pages.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php
					single_term_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->

		



		<div id="tax-pro-type-text" class="taxonomy-product-type-text">
			<?php /* Start the Loop */ ?>
				<div class="product-grid">	
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="product-box">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">

									<?php if ( has_post_thumbnail() ) : ?>
										<div class="taxonomy-page-damn-image"><?php the_post_thumbnail( 'large' ); ?> </div>
											<?php endif; ?>

											<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

											<?php if ( 'post' === get_post_type() ) : ?>
												<div class="entry-meta">
													<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
												</div><!-- .entry-meta -->
											<?php endif; ?>
								</header><!-- .entry-header -->

								<?php echo CFS()->get( 'price' ); ?>

			
							</article><!-- #post-## -->
						</div>
						<?php endwhile; ?>
				</div>
				<?php the_posts_navigation(); ?>

				<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
  </div> <!-- taxonomy-product-type-text -->
	</main><!-- #main -->
</div><!-- #primary -->

	</div><!-- close .site -->

<div class="footer-over-here">
	<?php get_footer(); ?>
</div> <!-- footer-over-here -->