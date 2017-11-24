<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
                <?php
                    single_term_title( '<h1 class="page-title">', '</h1>' ); ?>
                    <?php 
                    the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
					
				<?php	the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
				
				<?php ?>
			</header><!-- .page-header -->

            <div class="shop-stuff-nav-items">
            
            <?php
						$terms = get_terms( array(
								'taxonomy' => 'product-type',
								'hide_empty' => 0,
						) );
						if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
				?>
				
						<div class="shop-stuff-nav-items-list">

							<?php foreach ( $terms as $term ) : ?>

									<div class="this-is-the-button">
					
										<p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>
									</div> <!-- this-is-the-button -->

							<?php endforeach; ?>

						</div> <!-- shop-stuff-nav-items-list -->
						
				<?php endif; ?>
                </div> <!-- shop-stuff-nav-items -->



			<div class="displaystuff">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
		
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="image-mask">
                           <?php the_post_thumbnail( 'medium' ); ?>    
                         </div>
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

			<?php endwhile; ?>
			
			<?php the_posts_navigation(); ?>
		
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		</div>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

    </div><!-- close .site -->
    
    <div class="footer-over-here">
        <?php get_footer(); ?>
    </div> <!-- footer-over-here -->
