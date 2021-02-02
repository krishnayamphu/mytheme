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

    register_nav_menus(array(
        'quick-links' => __('Quick Links', 'myTheme'),
    ));

}

add_action('after_setup_theme', 'myTheme_setup');



//enable featured image
add_theme_support('post-thumbnails');


//post formats
function myTheme_post_formats_setup() {
 add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
}
add_action( 'after_setup_theme', 'myTheme_post_formats_setup');


//custom user widget function
function myTheme_widgets_init()
{


    //recent post
    register_sidebar(array(
        'name' => __('Recent Post', 'myTheme'),
        'id' => 'recent-post',
        'description' => __('Add ads here to appear on blog posts area.', 'myTheme'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));


    //banner ads
    register_sidebar(array(
        'name' => __('Header Banner', 'myTheme'),
        'id' => 'header-banner',
        'description' => __('Add ads here to appear on header area.', 'myTheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
    ));

    //recent post
    register_sidebar(array(
        'name' => __('Quick Links', 'myTheme'),
        'id' => 'quick-links',
        'description' => __('Add ads here to appear on blog posts area.', 'myTheme'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}

add_action('widgets_init', 'myTheme_widgets_init');


