<?php
/**
 * Theme functions and definitions
 *
 * @package Devrix
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme setup
 */
function devrix_setup() {
    // Add theme support for title tag
    add_theme_support('title-tag');
    
    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add theme support for automatic feed links
    add_theme_support('automatic-feed-links');
    
    // Add theme support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'devrix'),
        'footer' => __('Footer Menu', 'devrix'),
    ));
    
    // Set content width
    $GLOBALS['content_width'] = 1200;
}
add_action('after_setup_theme', 'devrix_setup');

/**
 * Enqueue scripts and styles
 */
function devrix_scripts() {
    // Enqueue theme stylesheet (WordPress requires style.css in root)
    wp_enqueue_style(
        'devrix-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
    
    // Enqueue compiled CSS from Vite
    wp_enqueue_style(
        'devrix-main',
        get_template_directory_uri() . '/assets/dist/css/main.css',
        array('devrix-style'),
        filemtime(get_template_directory() . '/assets/dist/css/main.css')
    );
    
    // Enqueue jQuery
    wp_enqueue_script('jquery');
    
    // Enqueue slick-carousel
    wp_enqueue_script(
        'slick-carousel',
        get_template_directory_uri() . '/assets/js/slick.min.js',
        array('jquery'),
        '1.8.1',
        true
    );
    
    // Enqueue JavaScript from Vite
    wp_enqueue_script(
        'devrix-scripts',
        get_template_directory_uri() . '/assets/dist/js/bundle.js',
        array('jquery', 'slick-carousel'),
        filemtime(get_template_directory() . '/assets/dist/js/bundle.js'),
        true
    );
    
    // Enqueue comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'devrix_scripts');
 
 
/**
 * Fallback menu if no menu is assigned
 */
function devrix_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . __('Home', 'devrix') . '</a></li>';
    wp_list_pages(array(
        'title_li' => '',
    ));
    echo '</ul>';
}

