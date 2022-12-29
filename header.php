<?php
    /*
    *The header for our theme
    */
?>
<?php get_header() ?>

<!DOCTYPE html>


<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?> 
        <!-- tells wordpress where we want to add auto-generated info -->
</head>
<body <?php body_class(); ?> >
<!-- this ^ allows Wordpress to add any class attributes to the body tag. We can also add our own classes as strings inside the parantheses ('custom') If you have multiple classes, you can add as an array "array('custom', 'custom2')" inside the parantheses. -->
    <header>
        <h2 class="logo">Kinetic 1</h2>
    <div class="nav_menu">
        <ul>
            <li><a href="#">Subscribe</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>"><?php echo get_bloginfo('name') ?></a></li>
            <!-- The home url retrieves the home page of Wordpress and pass it in esc_url to remove any unnecessary characters. get blog info is the site title name from wordpress in accounts -->
            <li><a href="#">Contact</a></li>
            <button class="nav_btn">Sign Up</button>
        </ul>
        
    </header>
    </div>

</body>
</html>