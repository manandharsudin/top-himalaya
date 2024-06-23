<?php
/**
 * ACF functions
*/

acf_add_options_page(
    array(
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'theme-option',
        'capability' => 'edit_posts',
        'redirect'   => false,
        'icon_url'   => 'dashicons-screenoptions'
    )
);