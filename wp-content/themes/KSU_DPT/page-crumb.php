<?php
/*
Template Name: Breadcrumb
*/
/**
 * The template for displaying custom breadcrumb pages.
 *
 * @package KSU_DPT
 */

get_header(); ?>
	
<div id="content" class="site-content">
	<div class="row full-width">
		<div class="medium-8 columns">
			<div id="primary" class="content-area">
			   <div class="hide-for-small-only hide-for-print"><br />
			      <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
				   <main id="main" class="site-main" role="main">
					
					<?php while ( have_posts() ) : the_post(); ?>
					
						<?php get_template_part( 'templates/content', 'page' ); ?>
						<small>
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
					<br />
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div class="medium-3 sb columns">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- .columns -->

<?php get_footer(); ?>