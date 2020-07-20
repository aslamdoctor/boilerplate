<?php
// Enqueue/Add CSS and JS files
function amd_enqueue(){
	// Stylesheets
	wp_register_style('amd_resources_css', (get_template_directory_uri()."/css/resources.css"), false);
    wp_enqueue_style('amd_resources_css');
	wp_register_style('amd_app_css', (get_template_directory_uri()."/css/app.css"), false);
    wp_enqueue_style('amd_app_css');
	wp_register_style('amd_custom_css', (get_template_directory_uri()."/css/custom.css"), false);
    wp_enqueue_style('amd_custom_css');

    // Javascripts
    wp_register_script('amd_bootstrap_js', (get_template_directory_uri()."/lib/bootstrap/bootstrap.bundle.min.js"), array(), false, true);
    wp_register_script('amd_slick_carousel_js', (get_template_directory_uri()."/lib/slick/slick.min.js"), array(), false, true);
    wp_register_script('amd_app_js', (get_template_directory_uri()."/lib/app.js"), array(), false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('amd_bootstrap_js');
    wp_enqueue_script('amd_slick_carousel_js');
    wp_enqueue_script('amd_app_js');
}

add_action( 'wp_enqueue_scripts', 'amd_enqueue' );
?>
