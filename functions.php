<?php
add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
{
    if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
        if (array_key_exists('data-toggle', $atts)) {
            unset($atts['data-toggle']);
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

if (!file_exists(get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php')) {
    // File does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

/**
 * bootstrap5 pagination
 */
if (!file_exists(get_template_directory() . '/inc/wp-bootstrap5.0-pagination.php')) {
    return new WP_Error('wp-bootstrap5.0-pagination', __('It appears the wp-custom-posts.php file may be missing.', 'wp-bootstrap5.0-pagination'));
} else {
    require_once get_template_directory() . '/inc/wp-bootstrap5.0-pagination.php';
}


/**
 * Retrieve Custom Posts
 */
if (!file_exists(get_template_directory() . '/inc/wp-custom-posts.php')) {
    return new WP_Error('wp-custom-posts', __('It appears the wp-custom-posts.php file may be missing.', 'wp-custom-posts'));
} else {
    require_once get_template_directory() . '/inc/wp-custom-posts.php';
}


if (!function_exists('mytheme_setup')) {
    add_action('after_setup_theme', 'mytheme_setup');
    function mytheme_setup()
    {
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'mytheme'),
        ));

        add_theme_support('post-thumbnails');
    }
}


/**
 * Widget registration
 */
add_action('widgets_init', 'mytheme_widgets_init');

function mytheme_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'mytheme'),
        'id' => 'sidebar',
        'description' => __('Add widgets here to appear in page or post .', 'mytheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('Footer 1', 'mytheme'),
        'id' => 'footer-1',
        'description' => __('Add widgets here to appear in your footer area.', 'mytheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-1">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));
    register_sidebar(array(
        'name' => __('Footer 2', 'mytheme'),
        'id' => 'footer-2',
        'description' => __('Add widgets here to appear in your footer area.', 'mytheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-1">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));
    register_sidebar(array(
        'name' => __('Footer 3', 'mytheme'),
        'id' => 'footer-3',
        'description' => __('Add widgets here to appear in your footer area.', 'mytheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-1">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));
}
