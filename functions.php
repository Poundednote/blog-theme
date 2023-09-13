<?php

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/dist/main.css', [], '1.0.0', 'all');
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/dist/main.js', [], '1.0.0', true);
});


register_nav_menu("blog-theme-menu", "the primary menu used throught blog-theme");

// Add bootstraps nav class to wordpress navbar items
function bootstrap_nav_item($classes, $item, $args, $depth)
{
    $classes[] = "nav-item";
    return $classes;
}

add_filter('nav_menu_css_class', 'bootstrap_nav_item', 10, 4);

function bootstrap_nav_link($atts, $item, $args, $depth)
{
    $atts['class'] = "nav-link";
    return $atts;
}

add_filter('nav_menu_link_attributes', 'bootstrap_nav_link', 10, 4);
