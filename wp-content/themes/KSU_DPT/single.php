<?php
/**
 * The template for displaying all single posts.
 *
 * @package KSU_DPT
 */

get_header(); ?>

	<div class="row full-width" data-equalizer>
		<div class="medium-8 columns" data-equalizer-watch>
			<section id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'templates/content', 'single' ); ?>

						<?php great_outdoors_post_nav(); ?>

		        	<?php
			        	// If comments are open or we have at least one comment, load up the comment template
				        if ( comments_open() || '0' != get_comments_number() ) :
					        comments_template();
				        endif;
        			?>

		            <?php endwhile; // end of the loop. ?>

        		</main><!-- #main -->
	        </section><!-- #primary -->
        </div><!-- .columns -->
		
		<div class="medium-3 columns" data-equalizer-watch>
			<?php get_sidebar(); ?>
		</div>
		
<?php get_footer(); ?>