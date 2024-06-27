<?php
if (!function_exists('mytheme_setup')) {
    add_action('after_setup_theme', 'mytheme_setup');
    function mytheme_setup()
    {
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'mytheme'),
        ));
    }
}
