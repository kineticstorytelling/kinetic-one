<?php
/*
* Function definitions for Kinetic Theme 1
*/
?>

<?php

// First check if content width has been set after the kinetic setup function.
if( isset($content_width))

function kineticwp_setup(){
    add_theme_support('automatic-feed-links');
    // automatic feed links enable posts and comments automatically
    add_theme_support('title-tag');
    //this lets wordpress manage our title tag rather than using our hard coded one
}

add_action('after_setup_theme', 'kineticwp_setup');
// after setup is a wordpress hook which will be called queueing each page load. It's generally used to form a basic setup, registration and also any needed actions for our theme.
?>