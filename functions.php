<?php

function beauty_clinic_assets() {
    // فراخوانی فایل CSS اصلی قالب
    wp_enqueue_style( 
        'beauty-clinic-style', 
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // فراخوانی فایل JavaScript
    wp_enqueue_script( 
        'beauty-clinic-script', 
        get_template_directory_uri() . '/main.js', 
        array(), 
        '1.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'beauty_clinic_assets' );

// افزودن قابلیت عنوان داینامیک
add_theme_support( 'title-tag' );

?>