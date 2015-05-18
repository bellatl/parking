<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package KSU_DPT
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ):
		echo great_outdoors_responsive_insert_header_image( $post->ID );
	endif; ?>

	<header class="entry-header">
		<?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>
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
		<?php edit_post_link( __( 'Edit', 'great-outdoors' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
