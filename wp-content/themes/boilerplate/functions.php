<?php
// All Includes
include( get_template_directory() . '/includes/setup.php' );

include( get_template_directory() . '/includes/enqueue_dequeue.php' );

include( get_template_directory() . '/includes/widgets.php' );

include( get_template_directory() . '/includes/actions.php' );

include( get_template_directory() . '/includes/filters.php' );

include( get_template_directory() . '/includes/shortcodes.php' );

include( get_template_directory() . '/includes/custom_functions.php' );

//include( get_template_directory() . '/includes/theme_options.php' ); 
































/*=============== Prevent loading Yarpp styles ===============*/
/*
add_action('wp_print_styles','lm_dequeue_header_styles');
function lm_dequeue_header_styles()
{wp_dequeue_style('yarppWidgetCss');}

add_action('get_footer','lm_dequeue_footer_styles');
function lm_dequeue_footer_styles()
{wp_dequeue_style('yarppRelatedCss');}
*/