<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<section class="want-to-contain-this" style="display:flex; flex-direction:row;">
	<div id="primary" class="content-area" style="width:70%";>
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->




<div class="sidebar-move" style="width:30%;">
<?php get_sidebar(); ?>
</div>
</section>
<?php get_footer(); ?>
