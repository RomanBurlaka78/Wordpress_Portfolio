<?php





function theme_name_scripts() {
    wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
	wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'style-animate', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'style-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'templatemo-style', get_template_directory_uri() . '/assets/css/templatemo-style.css');

    wp_enqueue_style('templatemo-style', "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" );
   

    

   
	wp_enqueue_script( 'script-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', true );

    wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-bootstrap_2','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');
    
    wp_enqueue_script( 'script-jquery.parallax', get_template_directory_uri() . '/assets/js/jquery.parallax.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-smoothscroll', get_template_directory_uri() . '/assets/js/smoothscroll.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );


  

}


add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

add_theme_support('post-thunbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


 the_content();






