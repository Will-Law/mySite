<?php

// ===================================================
// function opstheme_theme_dependencies
//
// Displays error message if dependency is needed
// ===================================================
function pxltheme_theme_dependencies() {
	/* PLUGINS
	=============================================================*/
	if( ! is_plugin_active('pxl-utility/pxl-utility.php') ) {
		echo '<div class="notice notice-error is-dismissible"><p>' . __( 'Warning: This theme needs the ' ) .  '<strong>Pixel Utility</strong>' . __( ' plugin to function as it should.' ) . '</p></div>';
	}
}
add_action('admin_notices', 'pxltheme_theme_dependencies');
