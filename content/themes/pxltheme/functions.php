<?php
/**
 * this is the themes functions file which stored theme related functionality
 * other functions files are loaded here located in the inc folder
 */

/* load theme dependent files */
load_template( get_template_directory() . '/functions/theme-dependencies.php' );
load_template( get_template_directory() . '/functions/widgets.php' );
load_template( get_template_directory() . '/functions/menus.php' );
load_template( get_template_directory() . '/functions/scripts.php' );
load_template( get_template_directory() . '/functions/custom-functions.php' );
load_template( get_template_directory() . '/functions/elements.php' );

load_template( get_template_directory() . '/login/login.php' );







/**
 * Theme setup functions - setups theme defaults and registers support
 * for various features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 */
function pxltheme_theme_setup() {

	/*
	* add_theme_support features go here
	*/

	/*
	* featured image support
	*/
	add_theme_support( 'post-thumbnails' );

	/*
	* title tag support
	*/
	add_theme_support( 'title-tag' );

	/* add image sizes */
	//add_image_size( 'post-thumb', 600, 600, true );
	// add large thumbnail to support working on mobile width devices at full width

	/* add your nav menus function to the 'init' action hook */
	if( function_exists('pxltheme_register_nav_menus') ) {
		add_action( 'init', 'pxltheme_register_nav_menus' );
	}

	/* add your sidebars function to the 'widgets_init' action hook */
	if( function_exists('pxltheme_register_sidebars') ) {
		add_action( 'widgets_init', 'pxltheme_register_sidebars' );
	}

	/*
	 * styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	/* adds the editor stylesheet */
	add_editor_style(
		array(
			'assets/css/editor-style.css',
			pxltheme_fonts_url()
		)
	);

	/**
	 * Set theme defaults, such as attachment and discussion settings
	 * sets thumbnail crop to true and blog public to true
	 */

	/* get the template name of this theme - used to store setup option name */
	$pxltheme_template = get_option( 'template' );

	/* check whether this has been run before */
	if ( get_option( $pxltheme_template . '_setup_status' ) != '1' ) {

		/* setup default wordPress settings array - these are options stored in the options table */
		$pxltheme_default_settings = array(
			'image_default_link_type'	=> '', // images link to nothing by default
			'thumbnail_crop' 			=> 1, // set wordpress to crop thumbnails always
			'users_can_register'		=> 0, // user can not register for this site
			'blog_public'				=> 1, // make sure that the site is not blocked from search engines
			'large_size_w'				=> '1000',
			'large_size_h'				=> '1000'
		);

		/* loop through each of the above, updating the option each time */
		foreach ( $pxltheme_default_settings as $key => $value ) {

			/* update each option in turn */
			update_option( $key, $value );

		}

		/* update the setup status option to prevent this running every time */
		update_option( $pxltheme_template . '_setup_status', '1' );

		/* output a message in the admin to let the user know some settings have changed */
		add_action(
			'admin_notices',
			function() {
				?>
				<div class="updated">
					<p>This theme has changed your WordPress default <a href="<?php echo admin_url( 'options-general.php' ); ?>" title="See Settings">settings</a></p>
				</div>
				<?php
			}
		);

	} // end if theme defaults already applied

}

add_action( 'after_setup_theme', 'pxltheme_theme_setup' );






// ==========================================================
// function pxltheme_remove_script_version()
// Remove version from static resources
// ==========================================================
function pxltheme_remove_script_version( $src ){
	$parts = explode( '?ver', $src );
	return $parts[0];
}
if( (defined( 'WP_LOCAL_DEV' ) && !WP_LOCAL_DEV) && (defined( 'WP_STAGING_DEV' ) && !WP_STAGING_DEV) ) {
	add_filter( 'script_loader_src', 'pxltheme_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', 'pxltheme_remove_script_version', 15, 1 );
}






// ==========================================================
// function add_excerpt_pages()
// Add excerpt support to pages
// ==========================================================
// function pxltheme_add_excerpt_pages() {
// 	add_post_type_support( 'page', 'excerpt' );
// }
// add_action('init', 'pxltheme_add_excerpt_pages');






// ==========================================================
// function pxltheme_img_caption_width()
// Remove the 10px captions width
// ==========================================================
function pxltheme_img_caption_width( $width, $atts, $content){
		//by default 10 is added if image caption
		return $width - 10;
 }

add_filter( 'img_caption_shortcode_width', 'pxltheme_img_caption_width', 10, 3 );
