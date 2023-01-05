<?php
/*
* Function definitions for Kinetic Theme 1
*/
?>

<?php

// First check if content width has been set after the kinetic setup function. It also allows you to set the maximum allowed width so the user doesn't add an image that's too big
if( ! isset($content_width)){
    $content_width = 660; //If content width hasn't been set, set it to 660 px

}

function kineticwp_setup(){
    add_theme_support('automatic-feed-links');
    // automatic feed links enable posts and comments automatically
    add_theme_support('title-tag');
    //this lets wordpress manage our title tag rather than using our hard coded one
    add_theme_support('post-thumbnails');
    //For the thumbnail posts
    register_nav_menus(array(
        'primary' => __('Main header menu', 'kineticwp'),
        'footer' => __('Footer Menu', 'kineticwp')
    ));
}

add_action('after_setup_theme', 'kineticwp_setup');
// after setup is a wordpress hook which will be called queueing each page load. It's generally used to form a basic setup, registration and also any needed actions for our theme.

function kinetic_scripts(){
    /* Add styles */

    wp_enqueue_style('kinetic-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), '5.15.3');
    wp_enqueue_style('kinetic-style', get_template_directory_uri() . '/style.css');
    // wp_enqueue_script('kinetic-js', get_template_directory_uri() . '/js/bootstrap.js')
}
add_action('wp_enqueue_scripts', 'kinetic_scripts');

function new_excerpt_text(){
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_text');
// This filter plus the function is used to make the excerpt ... The fuck is the point of that.

function add_footer_menu_class($classes, $item, $args){
    if($args->theme_location == 'footer'){
        $classes[] = 'msg';
    }
    return $classes;
}
// this function runs the footer menu dynamic backend, with the class msg being used. Can change that to anything that matches with the footer.
//explanation of classes item args
add_filter('nav_menu_css_class', 'add_footer_menu_class', 10, 3);

// This is for the custom header V
$args = array(
    'width' => 2600,
    'height' => 650,
    // 'default-image' => get_template_directory_uri() . '/images/notebook.jpg',
    'uploads' => true //This allows the user to upload their own image
);
add_theme_support('custom-header', $args); //we need to register our custom headers functionality

//This is an unecessary custom header addtional options suggested for users
register_default_headers( array(
    'lake1' => array(
        'url' => get_template_directory_uri(),  
        // . '/image/what.png'
        'description' => __('Lake 1')
    ),
    'lake2' => array(
        'url' => get_template_directory_uri(),  
        // . '/image/what.png' add this ^
        'description' => __('Lake 2')
    ),
    )
);

?>