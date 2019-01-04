
<?php
//sets up theme styling
function test_files(){
  wp_enqueue_style('test_main_stylesheet', get_template_directory_uri(). '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'test_files');




?>
