<?php
/**
 * this file is used for the login screen functions
 */

/*********************************************************
 * Custom login page
**********************************************************/
// Custom Stylesheet
function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');



/**
 * Function mpcaps_login_logo()
 * Adds a login logo from the theme folder if present, otherwise
 * falls back to the default
 */
function pxltheme_login_logo() {

	if( !class_exists('acf') ) {
		return;
	}

	/* set the login logo path - filterable */
	$pxltheme_logo = get_template_directory_uri() . '/assets/images/svg/logo.svg';

	/* check whether a login logo exists in the child theme */
	if( !empty( $pxltheme_logo ) ) {

		echo '
			<style>
			.login h1 a {
				background-image: url(' . $pxltheme_logo . ');
			}
			</style>
		';

	} // end if login logo present in theme

}
add_action( 'login_head', 'pxltheme_login_logo' );



// Login Logo URL
function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

// Login Url Title
function my_login_logo_url_title() {
	return get_bloginfo( 'title' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
