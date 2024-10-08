<?php
    if(!function_exists('cswSetup')){
        function cswSetup(){
            add_theme_support('title-tag');
            add_theme_support('post-thumbnails');
            add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));
            add_theme_support('woocommerce');

            register_nav_menus(array(
                'main_header_menu_nav' => __('Header Main Menu', 'cswSetup'),
                'footer_col1_menu_nav' => __('Footer Column 1 Menu', 'cswSetup'),
                'footer_col2_menu_nav' => __('Footer Column 2 Menu', 'cswSetup'),
            ));
        }
    }
    add_action('after_setup_theme', 'cswSetup');

    //Set custom post excerpt length (chars)
    function custom_excerpt_length( $length ) {
        return 30;
    }
    add_filter('excerpt_length', 'custom_excerpt_length', 999);

    //Remove the dots from post excerpt
    function remove_excerpt_more($more) {
        return '';
    }
    add_filter('excerpt_more', 'remove_excerpt_more');

    //Remove auto P from CF7
    add_filter('wpcf7_autop_or_not', '__return_false');