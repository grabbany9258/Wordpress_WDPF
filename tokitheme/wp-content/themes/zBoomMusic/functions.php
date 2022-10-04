<?php
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );

    function zboom_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'zboommusic' ),
	    	'footer_menu'  => __( 'Footer Menu', 'zboommusic' ),
		) );
	}


// For sidebar widget

    add_action( 'after_setup_theme', 'zboom_register_nav_menu');

    function zboom_widgets_init() {
 
        register_sidebar( array(
            'name' => __( 'Right Sidebar', 'zboom' ),
            'id' => 'sidebar-1',
            'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
            'before_widget' => '<div class="col-1-3"><div class="wrap-col">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="box"><div class="heading"><h2>',
            'after_title' => '</h2></div><div class="content">',
        ) );
     
        register_sidebar( array(
            'name' =>__( 'Footer sidebar', 'zboom'),
            'id' => 'sidebar-2',
            'description' => __( 'Appears on the static front page template', 'wpb' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        }
     
    add_action( 'widgets_init', 'zboom_widgets_init' );




?>