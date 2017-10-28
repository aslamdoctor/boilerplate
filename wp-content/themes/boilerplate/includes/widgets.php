<?php
// Setup Widgets
function amd_widgets(){

	register_sidebar(array(
		'name' => __('Sidebar Widgets','amd'),
        'id'   => 'amd_sidebar-widgets',
        'description'   => __('These are widgets for the sidebar.', 'amd'),
        'before_widget' => '<div id="%1$s" class="the-widget %2$s col-sm-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
	));

}
add_action( 'widgets_init', 'amd_widgets' );