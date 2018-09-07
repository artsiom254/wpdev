<?php

add_action('wp_enqueue_scripts', function (){
    wp_enqueue_style( 'bootstrap_css', get_parent_theme_file_uri( "assets/css/bootstrap.min.css" ) );
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', get_theme_file_uri('/assets/js/jquery-3.3.1.min.js'), array(), '3.3.1' );
    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', get_theme_file_uri('/assets/js/jquery-migrate-3.0.0.min.js'), array(), '3.0.0' );
    wp_enqueue_script( 'bootstrap_js', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array( ), '', true );
    wp_enqueue_script( 'functions', get_theme_file_uri( '/assets/js/functions.js' ), array( ), '', true );

});
