
<?php
//sets up theme styling
function test_files(){
  wp_enqueue_style('test_main_stylesheet', get_template_directory_uri(). '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'test_files');



// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


// custom excerpt length
function custom_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');

?>
