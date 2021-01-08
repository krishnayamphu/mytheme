<?php
//custom excerpt length
if (!file_exists(get_template_directory() . '/inc/wordpress-custom-excerpt-length-function.php')) {
    return new WP_Error('wordpress-custom-excerpt-length-function', __('It appears the wordpress-custom-excerpt-length-function.php file may be missing.', 'wordpress-custom-excerpt-length-function'));
} else {
    require_once get_template_directory() . '/inc/wordpress-custom-excerpt-length-function.php';
}

//bootstrap nav
function register_navwalker()
{
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'register_navwalker');


//bootstrap pagination
if (!file_exists(get_template_directory() . '/inc/wp-bootstrap4.4-pagination.php')) {
    return new WP_Error('wp-bootstrap4.4-pagination', __('It appears the wwp-bootstrap4.4-pagination.php file may be missing.', 'wp-bootstrap4.4-pagination'));
} else {
    require_once get_template_directory() . '/inc/wp-bootstrap4.4-pagination.php';
}

//custom user theme function
function myTheme_setup()
{

    //register navigations
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'myTheme'),
    ));

}

add_action('after_setup_theme', 'myTheme_setup');

//enable featured image
add_theme_support('post-thumbnails');


//custom user widget function
function myTheme_widgets_init()
{

}

add_action('widgets_init', 'myTheme_widgets_init');


