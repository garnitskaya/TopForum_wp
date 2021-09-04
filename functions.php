<?php
add_action('wp_enqueue_scripts', 'topforum_sctipts' );

function topforum_sctipts() {
    wp_enqueue_style( 'topforum-style', get_stylesheet_uri() );

    wp_enqueue_script( 'topforum-script', get_template_directory_uri() . '/assets/js/script.js' );
}

add_theme_support('custom-logo'); 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );


add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
function filter_nav_menu_link_attributes($atts, $item, $argc, $depth) {
    if($argc->menu === 'Main'& $depth == 0 || $argc->menu === 'Footer') {
        $atts['class'] = 'menu__item';
        
    }else{
        $atts['class'] = 'sub-menu__item';
    };

    return $atts;
}

?>

