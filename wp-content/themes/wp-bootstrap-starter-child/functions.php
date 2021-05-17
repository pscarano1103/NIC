<?php


// Enqueue needed scripts
function needed_styles_and_scripts_enqueue() {

    wp_enqueue_style( 'owlcarousel-min-css', get_template_directory_uri() . '/lib/owlCarousel/dist/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'owlcarousel-min-theme', get_template_directory_uri() . '/lib/owlCarousel/dist/assets/owl.theme.default.min.css' );

    if (is_page_template('page-contato.php')) {
        wp_enqueue_style( 'page-contato', get_template_directory_uri() . '/assets/css/page-contato.css' );
    } 
    
    if (is_page_template('page-home.php')) {
        wp_enqueue_style( 'page-home', get_template_directory_uri() . '/assets/css/page-home.css' );
         
    } 
    
    if (is_page_template('page-service.php')) {
        wp_enqueue_style( 'page-service', get_template_directory_uri() . '/assets/css/page-service.css' );
    }

    if ( is_single() && 'servicos' == get_post_type() ){
        wp_enqueue_style( 'page-service-sub', get_template_directory_uri() . '/assets/css/page-service-sub.css' );
    }

    if (is_page_template('page-portifolio.php')) {
        wp_enqueue_style( 'page-portifolio', get_template_directory_uri() . '/assets/css/page-portifolio.css' );
    }

    if (is_page_template('page-sobre.php')) {
        wp_enqueue_style( 'page-sobre', get_template_directory_uri() . '/assets/css/page-sobre.css' );
    }

    wp_enqueue_script('jquery');
    wp_enqueue_script('olw-carousel-js', get_template_directory_uri() . '/lib/owlCarousel/dist/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('olw-carousel-script', get_template_directory_uri() . '/assets/js/carousel-script.js', array('olw-carousel-js'), '1.0', true);
    
}

add_action( 'wp_enqueue_scripts', 'needed_styles_and_scripts_enqueue' );