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


    // Add the custom lost password link above the login button
    function add_lost_password_above_button() {
        echo '<p class="woocommerce-LostPassword lost_password inpd">';
        echo '<a href="' . esc_url( wp_lostpassword_url() ) . '">';
        echo esc_html__('Forgot password?', 'woocommerce');
        echo '</a>';
        echo '</p>';
    }
    add_action('woocommerce_login_form', 'add_lost_password_above_button', 15);

    // Remove product tabs from the single product page
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

    // Filter to change the 'Stock' header to 'Spaces' in the variant table
add_filter('pvtfw_columns_labels', function($default) {
    // Change the label for the stock column (availability_html)
    if (isset($default['availability_html'])) {
        $default['availability_html'] = __('Spaces', 'product-variant-table-for-woocommerce');
    }
    return $default;
});

// Customize the stock availability text to only show the stock quantity
add_filter('woocommerce_get_availability_text', function($availability, $product) {
    if ($product->is_in_stock()) {
        $stock_quantity = $product->get_stock_quantity();
        if ($stock_quantity > 0) {
            $availability = sprintf(__('%d', 'woocommerce'), $stock_quantity); // Show only the quantity
        }
    }
    return $availability;
}, 10, 2);

// Override stock availability display for out of stock products to show "0"
add_filter('woocommerce_get_stock_html', function($html, $product) {
    if (!$product->is_in_stock()) {
        // If the product is out of stock, display "0" instead of "Out of stock"
        $html = '<p class="stock out-of-stock">' . __('0', 'woocommerce') . '</p>';
    }
    return $html;
}, 10, 2);


// Redirect to /basket instead of /cart after adding product to cart
add_filter('woocommerce_add_to_cart_redirect', function($url) {
    // Set the URL to the /basket page
    $basket_url = home_url('/basket');
    
    return $basket_url;
});