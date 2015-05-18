<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package KSU_DPT
 */

get_header(); ?>
	
<div id="content" class="site-content">
	<div class="row full-width" data-equalizer>
		<div class="medium-8 columns" data-equalizer-watch>
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					
					<?php while ( have_posts() ) : the_post(); ?>
					<small>
						<?php get_template_part( 'templates/content', 'page' ); ?>
						<div class="hide-for-print">
						<?php $u_time = get_the_time('U'); 
						$u_modified_time = get_the_modified_time('U'); 
						if ($u_modified_time >= $u_time + 86400) { 
						echo "Page last updated on "; 
						the_modified_time('F jS, Y'); 
						echo " at "; 
						the_modified_time();}?></div>
					<?php endwhile; // end of the loop. ?>
					</small>
					<br /><br />
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div class="medium-3 columns" data-equalizer-watch>
			<?php get_sidebar(); ?>
		</div>
	</div><!-- .columns -->

<?php get_footer(); ?>