<?php

function amd_widgets(){
	register_sidebar(array(
		'name' => __('Sidebar Widgets','amd'),
        'id'   => 'amd_sidebar-widgets',
        'description'   => __('These are widgets for the sidebar.', 'amd'),
        'before_widget' => '<div id="%1$s" class="the-widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div><div class="widget-content">'
	));
}