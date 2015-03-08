<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function wp_umd_styles()
{
        wp_register_style( 'umd-header-footer-2014', get_stylesheet_directory_uri() . '/head-foot_2014.css', array(), '2014', 'all' );
        wp_enqueue_style( 'umd-header-footer-2014' );
}

add_action( 'wp_enqueue_scripts', 'wp_umd_styles',99 );

function add_umd_header() {
	echo file_get_contents(get_stylesheet_directory() . '/umd-header.html');
}
add_action( 'catcheverest_before_header', 'add_umd_header' );
?>
