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

			<?php /* Start the Loop */ ?>
			<div class="product-grid">	
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="product-box">
				<?php
					get_template_part( 'template-parts/content', 'product-loop' );
				?>
</div>
			<?php endwhile; ?>
</div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	</div><!-- close .site -->

<div class="footer-over-here">
	<?php get_footer(); ?>
</div> <!-- footer-over-here -->