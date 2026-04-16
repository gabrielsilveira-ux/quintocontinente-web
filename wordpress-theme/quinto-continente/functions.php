<?php

if (!defined('ABSPATH')) {
    exit;
}

function qc_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Menu Principal', 'quinto-continente'),
    ]);
}
add_action('after_setup_theme', 'qc_theme_setup');

function qc_enqueue_assets() {
    wp_enqueue_style(
        'qc-fonts',
        'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=Inter:wght@300;400;500&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'qc-style',
        get_template_directory_uri() . '/assets/css/style.css',
        ['qc-fonts'],
        filemtime(get_template_directory() . '/assets/css/style.css')
    );

    wp_enqueue_style(
        'qc-media',
        get_template_directory_uri() . '/assets/css/media.css',
        ['qc-style'],
        filemtime(get_template_directory() . '/assets/css/media.css')
    );

    wp_enqueue_script(
        'qc-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );

    wp_enqueue_script(
        'qc-banner',
        get_template_directory_uri() . '/assets/js/banner.js',
        [],
        filemtime(get_template_directory() . '/assets/js/banner.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'qc_enqueue_assets');

function qc_nav_fallback() {
    echo '<ul class="nav-links">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'quinto-continente') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/sobre/')) . '">' . esc_html__('Quem Somos', 'quinto-continente') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/servicos/')) . '">' . esc_html__('Serviços', 'quinto-continente') . '</a></li>';
    echo '<li><a href="https://blog.quintocontinente.com.br" target="_blank" rel="noopener">' . esc_html__('Blog', 'quinto-continente') . '</a></li>';
    echo '</ul>';
}
