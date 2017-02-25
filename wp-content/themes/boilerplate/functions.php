<?php
// Set up
automatic_feed_links();
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb-360x240', 360, 240, true );
add_image_size( 'featured-1200x400', 1200, 400, true );


// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/shortcodes.php' );
include( get_template_directory() . '/includes/filters.php' );
include( get_template_directory() . '/includes/custom_functions.php' );


// Action Hooks
add_action( 'wp_enqueue_scripts', 'amd_enqueue' );
add_action( 'after_setup_theme', 'amd_setup_theme' );
add_action( 'widgets_init', 'amd_widgets' );
add_action( 'get_footer','amd_dequeue_footer_styles');


// Filter Hooks
add_filter( 'widget_text', 'do_shortcode' );
add_filter( 'wp_title', 'amd_format_page_title', 10, 2 );
add_filter( 'the_content', 'amd_shortcode_empty_paragraph_fix' );
add_filter( 'next_posts_link_attributes', 'amd_next_posts_link_attributes' );
add_filter( 'previous_posts_link_attributes', 'amd_previous_posts_link_attributes' );
add_filter( 'nav_menu_css_class', 'amd_add_class_to_wp_nav_menu' );
add_filter( 'image_size_names_choose', 'amd_display_image_size_names_muploader', 11, 1 );
add_filter( 'pre_get_posts', 'amd_search_filter' );
add_filter( 'dynamic_sidebar_params', 'amd_check_sidebar_params' );


// Shortcodes
add_shortcode('my-shortcode', 'amd_my_test_shortcode');































/*=============== Prevent loading Yarpp styles ===============*/
/*
add_action('wp_print_styles','lm_dequeue_header_styles');
function lm_dequeue_header_styles()
{wp_dequeue_style('yarppWidgetCss');}

add_action('get_footer','lm_dequeue_footer_styles');
function lm_dequeue_footer_styles()
{wp_dequeue_style('yarppRelatedCss');}
*/