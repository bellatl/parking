<?php
/**
 * @package KSU_DPT
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ):
		echo great_outdoors_responsive_insert_header_image( $post->ID );
	endif; ?>

	<header class="entry-header">
		<?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>

		<div class="entry-meta">
			<?php great_outdoors_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'great-outdoors' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php great_outdoors_custom_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
