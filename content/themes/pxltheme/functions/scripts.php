<?php
/**
 * function pxltheme_enqueue_scripts_styles()
 * enqueues the theme scripts and styles in the head or footer
 */
function pxltheme_enqueue_scripts_styles() {

	global $wp_styles, $is_IE;


	/* SCRIPTS
	=============================================================*/
	/* load the theme js file */
	wp_enqueue_script(
		'pxltheme_js',
		get_template_directory_uri(). '/assets/js/main-min.js',
		array( 'jquery' ), // dependencies
		null, // no version
		true // enqueue in footer

	);

	/* load the theme js file */
	wp_enqueue_script(
		'pxltheme_grunticon',
		get_template_directory_uri(). '/assets/images/svg/grunticons/grunticon.loader.js',
		array( 'jquery' ), // dependencies
		null, // no version
		false // enqueue in <head>
	);

	/* Load Google Maps */
	$gmap_api_key = '';
	wp_enqueue_script(
		'google_maps',
		'https://maps.googleapis.com/maps/api/js?key=' . $gmap_api_key,
		array(), // no dependencies
		null, // no version
		true // enqueue in footer
	);


	/* STYLESHEETS
	=============================================================*/
	/* load the themes styles */
	wp_enqueue_style(
		'pxltheme_styles',
		get_template_directory_uri(). '/assets/css/style.css',
		array( 'dashicons' ), // dependencies
		array(), // no version
		'all' // for all media types
	);


	/* FONTS
	=============================================================*/
	/* add custom fonts */
	wp_enqueue_style(
		'pxltheme_fonts',
		pxltheme_fonts_url(),
		array(), // no dependencies
		null, // no version
		'all' // for all media types
	);


	/* ICON FONTS
	=============================================================*/
	/* load in font awesome css */
	wp_enqueue_style(
		'pxjn_fontawesome',
		'//use.fontawesome.com/releases/v5.5.0/css/all.css'
	);


	/* load in google material font */
	// wp_enqueue_style(
	// 	'pxjn_googlematerial',
	// 	'https://fonts.googleapis.com/icon?family=Material+Icons'
	// );


	/* REMOVE SCRIPTS
	=============================================================*/

}

function pxltheme_enqueue_admin(){
	wp_enqueue_style(
		'pxjn_fontawesome',
		'https://use.fontawesome.com/releases/v5.5.0/css/all.css'
	);
}

add_action( 'admin_init', 'pxltheme_enqueue_admin' );

add_action( 'wp_enqueue_scripts', 'pxltheme_enqueue_scripts_styles' );
