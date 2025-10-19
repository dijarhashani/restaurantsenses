<?php

function senses_restaurant_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());


    
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css');
    
   
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), false, true);
   

    wp_enqueue_style('aos-css', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', array(), '2.3.4');
    
    // Enqueue AOS JS
    wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array('jquery'), '2.3.4', true);

    // Custom script to initialize AOS
    wp_add_inline_script('aos-js', 'AOS.init();');

   

    $custom_css = "
        @font-face {
            font-family: 'Regular';
            src: url('" . get_template_directory_uri() . "/assets/fonts/Panton-Trial-Regular.woff2') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Semi Bold';
            src: url('" . get_template_directory_uri() . "/assets/fonts/Panton-Trial-SemiBold.woff') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Regular Italic';
            src: url('" . get_template_directory_uri() . "/assets/fonts/Panton-Trial-RegularItalic.woff2') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Light';
            src: url('" . get_template_directory_uri() . "/assets/fonts/Panton-Trial-Light.woff2') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Light Italic';
            src: url('" . get_template_directory_uri() . "/assets/fonts/Panton-Trial-LightItalic.woff2') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
            @font-face {
            font-family: 'Thin';
            src: url('" . get_template_directory_uri() . "/assets/fonts/Panton-Trial-Thin.woff2') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
    ";
    wp_add_inline_style('custom-style', $custom_css);
    
}
add_action('wp_enqueue_scripts', 'senses_restaurant_scripts');


function senses_restaurant_setup() {
    
    add_theme_support('title-tag');
    
    add_theme_support('custom-logo');
    
    add_theme_support('post-thumbnails');
    
    add_theme_support('automatic-feed-links');
    
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-blank-theme'),
    ));

    
}
add_action('after_setup_theme', 'senses_restaurant_setup');
