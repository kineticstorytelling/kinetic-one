<?php
/*
* The template for displaying all single posts
*/
?>
<?php get_header() ?>

<?php if(have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content() ?>

<?php endwhile; else :
    <p><?php _e('Sorry, no pages match your criteria'); ?></p>
// underscore e function allows our text to be translated later on in a theme which is pretty essential part of any theme
endif;
?>

<!-- Footer section -->
<?php get_footer() ?>