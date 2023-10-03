<?php
/* Child theme generated with WPS Child Theme Generator */

if (!function_exists('generalnews_theme_enqueue_styles')) {
    add_action('wp_enqueue_scripts', 'generalnews_theme_enqueue_styles');

    function generalnews_theme_enqueue_styles()
    {
        $min = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';
        $parent_style = 'morenews-style';

        $fonts_url = 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700';
        wp_enqueue_style('generalnews-google-fonts', $fonts_url, array(), null);
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap' . $min . '.css');
        wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
        wp_enqueue_style(
            'generalnews',
            get_stylesheet_directory_uri() . '/style.css',
            array('bootstrap', $parent_style),
            wp_get_theme()->get('Version')
        );
    }
}

// Set up the WordPress core custom background feature.
add_theme_support('custom-background', apply_filters('morenews_custom_background_args', array(
    'default-color' => 'f5f5f5',
    'default-image' => '',
)));

function generalnews_filter_default_theme_options($defaults)
{
    $defaults['site_title_font_size'] = 56;
    $defaults['site_title_font']   = 'Source+Sans+Pro:400,400i,700,700i';
    $defaults['primary_font']      = 'Lato:400,300,400italic,900,700';
    $defaults['secondary_font']    = 'Source+Sans+Pro:400,400i,700,700i';
    $defaults['secondary_color'] = '#bb1919';
    $defaults['select_main_banner_layout_section'] = 'layout-1';
    $defaults['site_title_uppercase']  = 0;
    $defaults['show_watch_online_section']  = 0;
    $defaults['aft_custom_title']           = __('Watch Videos', 'general-news');

    return $defaults;
}
add_filter('morenews_filter_default_theme_options', 'generalnews_filter_default_theme_options', 1);


//Back to cart button on the Woocommerce Checkout page
/*
add_action( 'woocommerce_before_checkout_form', 'return_to_cart_notice_button' );
function return_to_cart_notice_button(){
    // HERE Type your displayed message and text button
    $message = __('Need to modify your order?  Go back to the Cart page:', 'woocommerce');
    $button_text = __('Back to Cart', 'woocommerce');
    $cart_link = WC()->cart->get_cart_url();
    wc_add_notice( '<a href="' . $cart_link . '" class="button wc-forward">' . $button_text . '</a>' . $message, 'notice' );
}

add_action( 'woocommerce_review_order_before_payment', 'return_to_cart_notice_button', 10 );
function return_to_cart_notice_button(){
    echo '<div class="woocommerce-info"><a href="https://wordpress-1076073-3805154.cloudwaysapps.com/shop/basket/" class="button wc-forward">Back to Cart</a>Need to modify your order?  Go back to the Cart page:</div>';
}
*/