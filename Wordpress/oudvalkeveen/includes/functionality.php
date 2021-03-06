<?php
/**
 * Disable admin bar
 */
function remove_admin_bar() {
	  show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

/*
Plugin Name: Remove Author Pages
Description: Trigger 404 error on author pages and change author links to home
Author: Vinicius Pinto <contact@codense.com>
Version: 0.2
*/

function remove_author_pages_page() {
	if ( is_author() ) {
		global $wp_query;
		$wp_query->set_404();
		status_header( 404 );
	}
}

function remove_author_pages_link( $content ) {
	return get_option( 'home' );
}

add_action( 'template_redirect', 'remove_author_pages_page' );
add_filter( 'author_link', 'remove_author_pages_link' );

add_theme_support( 'menus' );

// Add Your Menu Locations
function register_my_menus() {
  register_nav_menus(
    array(
      'header_navigation'  => __( 'Header Navigation'   ),
      'header_mobile_navigation'  => __( 'Header Mobile Navigation'   )
    )
  );
}
add_action( 'init', 'register_my_menus' );