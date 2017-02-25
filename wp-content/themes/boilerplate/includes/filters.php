<?php

// Format page title
function amd_format_page_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'amd' ), max( $paged, $page ) );

    return $title;
}


// Remove empty paragraphs from shortcode string 
function amd_shortcode_empty_paragraph_fix( $content ) {
    $array = array (
        '<p>[' => '[',
        ']</p>' => ']',
        ']<br />' => ']'
    );

    $content = strtr( $content, $array );

    return $content;
}


// Add css class to next/prev post links
function amd_next_posts_link_attributes() {
    return 'class="older-posts"';
}
function amd_previous_posts_link_attributes() {
    return 'class="newer-posts"';
}


// Add css class to parent link of custom post type page
function amd_remove_parent_classes($class){
    // check for current page classes, return false if they exist.
    //return ($class == 'current_page_item' || $class == 'current_page_parent' || $class == 'current_page_ancestor'  || $class == 'current-menu-item') ? FALSE : TRUE;
    return ($class == 'current_page_item' || $class == 'current_page_parent' || $class == 'current_page_ancestor') ? FALSE : TRUE;
}
function amd_add_class_to_wp_nav_menu($classes){
    switch (get_post_type())
    {
        case 'my_post_type':
            // we're viewing a custom post type, so remove the 'current_page_xxx and current-menu-item' from all menu items.
            $classes = array_filter($classes, "amd_remove_parent_classes");

            /*// add the current page class to a specific menu item (replace ###).
            if (in_array('menu-item-592', $classes))
            {
               $classes[] = 'current_page_parent';
            }*/
        break;

    }
    return $classes;
}


// Display image sizes in media uploader 
function amd_display_image_size_names_muploader( $sizes ) {
    $new_sizes = array();

    $added_sizes = get_intermediate_image_sizes();

    // $added_sizes is an indexed array, therefore need to convert it
    // to associative array, using $value for $key and $value
    foreach( $added_sizes as $key => $value) {
        $new_sizes[$value] = $value;
    }

    // This preserves the labels in $sizes, and merges the two arrays
    $new_sizes = array_merge( $new_sizes, $sizes );

    return $new_sizes;
}


// Filter Search result 
function amd_search_filter($query) {
    if ($query->is_search) {
        $query->set('post_type', array('post'));
    }
    return $query;
}


// if no title then add widget content wrapper to before widget
function amd_check_sidebar_params( $params ) {
    global $wp_registered_widgets;

    $settings_getter = $wp_registered_widgets[ $params[0]['widget_id'] ]['callback'][0];
    $settings = $settings_getter->get_settings();
    $settings = $settings[ $params[1]['number'] ];

    if ( $params[0][ 'after_widget' ] == '</div></div>' && isset( $settings[ 'title' ] ) && empty( $settings[ 'title' ] ) )
        $params[0][ 'before_widget' ] .= '<div class="widget-content">';

    return $params;
}


// remove YARPP styles
function amd_dequeue_footer_styles(){
  wp_dequeue_style('yarppRelatedCss');
  wp_dequeue_style('yarpp-thumbnails-yarpp-thumbnail');
}