<?php
// Register WP Menu
function register_my_menu()
{
    register_nav_menu('primary', __('Primary Menu'));
}
add_action('init', 'register_my_menu');

// Support Custom Header
$defaults = array(
'default-image'          => '',
'width'                  => 0,
'height'                 => 0,
'flex-height'            => false,
'flex-width'             => false,
'uploads'                => true,
'random-default'         => false,
'header-text'            => true,
'default-text-color'     => '',
'wp-head-callback'       => '',
'admin-head-callback'    => '',
'admin-preview-callback' => '',
);
add_theme_support( 'custom-header' );

// function my_theme_setup() {
//     add_theme_support( 'custom-header', array(
//         'width'  => 2000,
//         'height' => 500,
//     ) );
// }
// add_action( 'after_theme_setup', 'my_theme_setup' );
?>
