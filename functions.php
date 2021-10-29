<?php

add_theme_support('title-tag');

function loisirs_montagne_enqueue_scripts()
{
    wp_enqueue_style('loisirs-montagne-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'loisirs_montagne_enqueue_scripts');

function loisirs_montagne_register_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Menu Principal'),
            'footer-menu' => __('Menu Footer')
        )
    );
}
add_action('init', 'loisirs_montagne_register_menus');

function loisirs_montagne_configure_theme_support()
{
    add_theme_support('editor-styles');
    add_editor_style('style.css');
}
add_action('init', 'loisirs_montagne_configure_theme_support');


function loisirs_montagne_auto_id_headings($content)
{
    return preg_replace_callback('/(\<h[1-6](.*?))\>(.*)(<\/h[1-6]>)/i', function ($matches) {
        if (!stripos($matches[0], 'id=')) :
            $matches[0] = $matches[1] . $matches[2] . ' id="' . sanitize_title($matches[3]) . '">' . $matches[3] . $matches[4];
        endif;
        return $matches[0];
    }, $content);
}
add_filter('the_content', 'loisirs_montagne_auto_id_headings');
