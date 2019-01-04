<?php
/**
 * this file is used for theme specific template functions
 */





// ==========================================================
// function smtheme_js_check()
//
// Check to see if js is enabled
// ==========================================================
function smtheme_js_check() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'smtheme_js_check' );





// ==========================================================
// function pxltheme_output_mobile_menu()
//
// adds the menu icon used for smaller screens
// ==========================================================
function pxltheme_mobile_icon( $html, $args ) {

	/* check this is the main menu location */
	if( $args->theme_location != 'primary_nav' ) {
		return $html;
	}

	/* add the menu icon */
	$html = '
		<label for="menu-toggle" class="menu-button">
			<span>Menu</span>
			<div class="hamburger-icon"></div>
		</label>' . $html;

	/* return the modified menu html */
	return $html;

}

// add_filter( 'wp_nav_menu', 'pxltheme_mobile_icon', 10, 2 );





// ==========================================================
// function pxltheme_fonts_url()
//
// register google fonts for this theme
// @return string Google fonts URL for the theme.
// ==========================================================
function pxltheme_fonts_url() {

	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* add noto sans font */
	$fonts[] = 'Merriweather';

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;

}





// ==========================================================
// function pxltheme_yoasttobottom()
//
// Move yoast metabox lower on page
// ==========================================================
function pxltheme_yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'pxltheme_yoasttobottom');





// ==========================================================
// function pxltheme_add_my_favicon()
// Add favicon to frontend and backend of site
// ==========================================================
function pxltheme_add_my_favicon() {

	echo '<!-- favicons -->
	<link rel="shortcut icon" href="' . get_template_directory_uri() . '/favicons/favicon.ico">
	<link rel="icon" sizes="16x16 32x32 64x64" href="' . get_template_directory_uri() . '/favicons/favicon.ico">
	<link rel="icon" type="image/png" sizes="196x196" href="' . get_template_directory_uri() . '/favicons/favicon-192.png">
	<link rel="icon" type="image/png" sizes="160x160" href="' . get_template_directory_uri() . '/favicons/favicon-160.png">
	<link rel="icon" type="image/png" sizes="96x96" href="' . get_template_directory_uri() . '/favicons/favicon-96.png">
	<link rel="icon" type="image/png" sizes="64x64" href="' . get_template_directory_uri() . '/favicons/favicon-64.png">
	<link rel="icon" type="image/png" sizes="32x32" href="' . get_template_directory_uri() . '/favicons/favicon-32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="' . get_template_directory_uri() . '/favicons/favicon-16.png">
	<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/favicons/favicon-57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="' . get_template_directory_uri() . '/favicons/favicon-114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="' . get_template_directory_uri() . '/favicons/favicon-72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="' . get_template_directory_uri() . '/favicons/favicon-144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="' . get_template_directory_uri() . '/favicons/favicon-60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="' . get_template_directory_uri() . '/favicons/favicon-120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="' . get_template_directory_uri() . '/favicons/favicon-76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="' . get_template_directory_uri() . '/favicons/favicon-152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="' . get_template_directory_uri() . '/favicons/favicon-180.png">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="' . get_template_directory_uri() . '/favicons/favicon-144.png">
	<meta name="msapplication-config" content="' . get_template_directory_uri() . '/favicons/browserconfig.xml">
	<!-- // favicons -->';
}
add_action( 'wp_head', 'pxltheme_add_my_favicon' ); //front end
add_action( 'admin_head', 'pxltheme_add_my_favicon' ); //admin end






// ==========================================================
// Add Google Analytics
// ==========================================================
function pxltheme_google_analytics() {
	$google_analytics = get_field('google_analytics', 'option');
	if( !empty( $google_analytics ) ) {
		echo $google_analytics;
	}
}
add_action( 'wp_head', 'pxltheme_google_analytics' );






// ==========================================================
// Add gforms anchor
// ==========================================================
add_filter('gform_confirmation_anchor', '__return_true');






// ==========================================================
// function pxltheme_remove_hentry()
//
// Removes hentry class from pages
// ==========================================================
function pxltheme_remove_hentry( $classes ) {
	if ( is_page() ) {
		$classes = array_diff( $classes, array( 'hentry' ) );
	}
	return $classes;
}
add_filter( 'post_class','pxltheme_remove_hentry' );
