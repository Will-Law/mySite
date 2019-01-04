<?php

//Load stylesheet
function loadstyles(){
  wp_enqueue_style('main_stylesheet', get_template_directory_uri(). '/assets/css/style.css');
  wp_enqueue_script('main_scripts', get_template_directory_uri(). '/assets/js/main-min.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'loadstyles');

//tidies up scripts and removes the 'type' tag
add_filter('script_loader_tag', 'clean_script_tag');
  function clean_script_tag($input) {
  $input = str_replace("type='text/javascript' ", '', $input);
  return str_replace("'", '"', $input);
}


//sets up menu functionality
function theme_setup(){
	add_theme_support('menus');
	register_nav_menu('navigation', 'Primary Menu');
}
add_action('init','theme_setup');


//Removes Wordpress Editor
add_action('admin_init', 'remove_textarea');

function remove_textarea() {
  remove_post_type_support( 'page', 'editor' );
}
