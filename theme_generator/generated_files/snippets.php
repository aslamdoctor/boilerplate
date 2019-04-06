add_image_size( 'featured-image', 1200, 400, 400 ); 
add_image_size( 'post-thumbnail', 100, 100, 100 ); 



register_nav_menus( 

	array( 
		'top-menu' => __( 'Top Menu', 'amd' ), 
		'mobile-menu' => __( 'Mobile Menu', 'amd' ), 
		'footer-menu' => __( 'Footer Menu', 'amd' ), 
	) 

); 



