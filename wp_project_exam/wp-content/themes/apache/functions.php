<?php
    add_theme_support('post-thumbnails');

    function mighty_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'mighty' ),
	    	'footer_menu'  => __( 'Footer Menu', 'mighty' ),
	    	'sidebar_menu'  => __( 'Sidebar Menu', 'mighty' ),
		    ) );
	    }
	    add_action( 'after_setup_theme', 'mighty_register_nav_menu' );


?>