<?php
/**
 * function pxltheme_register_sidebars()
 * registers sidebars for the theme
 */
function pxltheme_register_sidebars() {
	
	/* register the footer sidebar */
	register_sidebar(
		array(
			'id' => 'pxltheme_default_sidebar',
			'name' => __( 'Default Sidebar', 'pxltheme_textdomain' ),
			'description' => __( 'This is the default widget area for a sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget_title">',
			'after_title' => '</h3>'
		)
	);
			
}