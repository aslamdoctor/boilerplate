<?php

function amd_setup_theme(){
	// register menus
	register_nav_menus(
        array(
            'top-menu' => __( 'Top Menu', 'amd' ),
            'mobile-menu' => __( 'Mobile Menu', 'amd' ),
            'footer-menu' => __( 'Footer Menu', 'amd' )
        )
    );

    /*
	Snippet to add on theme for generating menu
	<?php
	    wp_nav_menu( array(
		    'theme_location' => 'top-menu',
		    'menu_id' => 'top-menu',
		    'menu_class' => 'the-top-menu',
		    'container' => false
	    ) );
	?>
	*/
}