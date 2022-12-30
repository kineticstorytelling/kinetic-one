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
?>