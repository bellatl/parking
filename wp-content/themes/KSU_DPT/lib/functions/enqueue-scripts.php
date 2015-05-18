<?php
/**
* Enqueue scripts and styles.
*/

function dpt_scripts() {
	wp_enqueue_style( 'dpt-style', get_stylesheet_uri() );

	$font_base_url = '//fonts.googleapis.com/css';
	$font_query     = '?family=Open+Sans:400,700,800,400italic,700italic,800italic|PT+Serif:400,700,400italic,700italic|Roboto+Slab:400|Raleway:400,300,700';
	wp_enqueue_style( 'dpt-google-fonts', $font_base_url . $font_query );
	wp_enqueue_style( 'animate', 'http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css' );
	wp_enqueue_style( 'dpt-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );

	// Enqueue concatenated and minified JS
	wp_enqueue_script( 'picturefill', get_template_directory_uri() . '/js/lib/picturefill.min.js', array(), null );
	wp_enqueue_script( 'skrollr', get_template_directory_uri() . '/js/lib/skrollr.min.js', array(), null );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js', array(), null, false );
	wp_enqueue_script( 'retina', 'https://cdnjs.cloudflare.com/ajax/libs/retina.js/1.3.0/retina.min.js', array(), null, false );
	wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '', false );

	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js', array( 'jquery' ), null, true );

	wp_enqueue_script( 'dpt-js', get_template_directory_uri() . '/js/dpt.min.js', array( 'jquery' ), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dpt_scripts' );

function dpt_enqueue_editor_styles() {
	// This theme styles the visual editor to resemble the theme style.
	$font_base_url = '//fonts.googleapis.com/css';
	$font_query    = '?family=Open+Sans:400,700,800,400italic,700italic,800italic|PT+Serif:400,700,400italic,700italic|Roboto+Slab:400|Raleway:400,300,700';
	$font_url      = $font_base_url . $font_query;
	add_editor_style( array( 'editor-style.css', str_replace( ',', '%2C', $font_url ) ) );
}
add_action( 'after_setup_theme', 'dpt_enqueue_editor_styles' );

