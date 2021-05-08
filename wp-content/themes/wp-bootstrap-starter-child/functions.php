<?php


// Enqueue needed scripts
function needed_styles_and_scripts_enqueue() {
    

    if (is_page_template('page-contato.php')) {
        wp_enqueue_style( 'page-contato', get_template_directory_uri() . '/assets/css/page-contato.css' );
    } 
    
    if (is_page_template('page-home.php')) {
        wp_enqueue_style( 'page-home', get_template_directory_uri() . '/assets/css/page-home.css' ); 
    } 
    
    if (is_page_template('page-service.php')) {
        wp_enqueue_style( 'page-service', get_template_directory_uri() . '/assets/css/page-service.css' );
    }

    if (is_page_template('page-portifolio.php')) {
        wp_enqueue_style( 'page-portifolio', get_template_directory_uri() . '/assets/css/page-portifolio.css' );
    }

    if (is_page_template('page-sobre.php')) {
        wp_enqueue_style( 'page-sobre', get_template_directory_uri() . '/assets/css/page-sobre.css' );
    }
    

}

add_action( 'wp_enqueue_scripts', 'needed_styles_and_scripts_enqueue' );