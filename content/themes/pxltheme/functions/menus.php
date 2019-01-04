<?php
/**
 * Registers nav menus locations
 */
function pxltheme_register_nav_menus() {
	register_nav_menus(
		array(
			'primary_nav' 	=> __( 'Primary Navigation', 'pxltheme_textdomain' )
		)
	);
}