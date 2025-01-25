<?php
//Adding support
add_theme_support( 'post-thumbnails' );
add_theme_support('custom-logo');

//hooks
add_action('customize_register', 'pp_customize_register');


//adding styles

add_action("wp_enqueue_scripts", "pp_theme_styles");

function pp_theme_styles() {
    //Função para adicionar estilos
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/style/bootstrap.css' );
    wp_enqueue_style('swiper_js', get_template_directory_uri().'/style/swiper.css' );
    wp_enqueue_style('style_css', get_template_directory_uri().'/style/scss/style.css' );
    //Função para adicionar scripts
    wp_enqueue_script("jquery_js", get_template_directory_uri().'/script/jquery.js' );
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/script/bootstrap.js');
    wp_enqueue_script('typed_js', get_template_directory_uri().'/script/typed.js');
    wp_enqueue_script('scrollReveal_js', get_template_directory_uri().'/script/scrollReveal.js');
    wp_enqueue_script('swiper_js', get_template_directory_uri().'/script/swiper.js');
    wp_enqueue_script('script_js', get_template_directory_uri().'/script/script.js', true);
}


