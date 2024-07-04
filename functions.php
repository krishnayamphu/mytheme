<?php
if (!file_exists(get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php')) {
    // File does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
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
