<?php
/**
 * Great Outdoors functions and definitions
 *
 * @package KSU_DPT
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1450; /* pixels */
}

// Register sidebar widgets
require_once( 'lib/functions/register-sidebars.php' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

// Add theme support
require_once( 'lib/functions/theme-support.php' );

// Add SVG support
require_once( 'lib/functions/svg-support.php' );

// Remove version number from page head and RSS feeds
require_once( 'lib/functions/remove-version-info.php' );

// Add responsive images functionality
require_once( 'lib/functions/responsive-images.php' );

// Remove dupe sticky class in WordPress and let Foundation use it
require_once( 'lib/functions/remove-sticky-class.php' );

// Enqueue scripts and styles
require_once( 'lib/functions/enqueue-scripts.php' );

// Dequeue unneeded styles
require_once( 'lib/functions/dequeue-styles.php' );

// Register all navigation menus
require_once( 'lib/functions/foundation-topbar-menu.php' );

// Add menu walker
require_once( 'lib/functions/foundation-menu-walker.php' );

// Add breadcrumbs
require_once( 'lib/functions/breadcrumbs.php' );

//* Enqueue script to activate WOW.js
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');
function sk_wow_init_in_footer() {
	add_action( 'print_footer_scripts', 'wow_init' );
}

//* Add JavaScript before </body>
function wow_init() { ?>
	<script type="text/javascript">
		new WOW().init();
	</script>
<?php }

//*Custom excerpt lanuage for home page
function custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('read more...', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).', read alert...';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}

function content($limit) {
 $content = explode(' ', get_the_content(), $limit);
 if (count($content)>=$limit) {
 array_pop($content);
 $content = implode(" ",$content).', read alert';
 } else {
 $content = implode(" ",$content);
 }
 $content = preg_replace('/[.+]/','', $content);
 $content = apply_filters('the_content', $content);
 $content = str_replace(']]>', ']]&gt;', $content);
 return $content;
}