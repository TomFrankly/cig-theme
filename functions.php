<?php 
/** functions.php
*
* Volatyl Starter Child Theme functions
*/
 
// Load Volatyl's functions file immediately!
require_once( get_template_directory() . '/inc/init-functions.php' );
 
/*---- All custom PHP belongs BELOW THIS LINE! ----*/

// Enqueue front-end child theme scripts and styles
function child_front_scripts() {
	
	// Load default Volatyl stylesheet - don't remove... unless you don't want styles!
	wp_enqueue_style('child-style', THEME_STYLESHEET);
	
	// Load Google web fonts
    wp_register_style( 'gfopensans', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' );
    wp_enqueue_style( 'gfopensans' );
}
add_action('wp_enqueue_scripts', 'child_front_scripts', 2);