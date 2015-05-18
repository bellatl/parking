<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package KSU_DPT
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar hide-for-print" role="complementary">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<div id="mainAlert1" data-alert class="alert-box secondary" tabindex="0" aria-live="assertive" role="dialogalert">
	  <?php $args = array( 'numberposts' => 1 ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> <div class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div> <?php echo excerpt(16); ?><?php endforeach; ?>
	  <button href="#" tabindex="0" class="close" aria-label="Close Alert">&times;</button>
	</div>
</div><!-- #secondary -->