<?php

function eenvoud_roots_styles()
{
    if (get_template_directory_uri() . '/assets/css/vendor.min.css'){
        wp_enqueue_style( 'vendor_styles', get_template_directory_uri() . '/assets/css/vendor.min.css', array(), THEME_VERSION );
    }
    wp_enqueue_style( 'eenvoud_style', get_template_directory_uri() . '/assets/css/style.min.css', array(), THEME_VERSION );
}

if (!is_admin()) {
	add_action( 'wp_enqueue_scripts', 'eenvoud_roots_styles' );
}


// fix for visual composer and ACF repeater table in backend:


if (is_admin()) {
	add_action('admin_head', 'my_custom_fonts');

	function my_custom_fonts() {
	  echo '<style>
	    .acf_postbox .row:before {
			content: none;
		}
		.acf_postbox .row:after {
			content: none;
		}
	  </style>';
	}

}

