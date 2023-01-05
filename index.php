<?php
/*
* The main template file
*/
?>
<?php get_header() ?>
<!-- this is the Wordpress Loop -->
<?php if(have_posts()) : while(have_posts()) : the_post();?>
<div <?php post_class('custom-class'); ?> > 
<!-- post class added -->
    <div class="blogs">
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
            <p class="blogs-date"><?php echo get_the_date('F j. Y'); ?> by <a href=""><?php the_author(); ?></a></p>
            <div>
                <i class="fas fa-tags"></i>
                <p><?php the_tags('Tagged: '. ' ~ ') ?></p>
            </div>
            <!-- This is the thumbnail -->
            <div>
                <?php the_post_thumbnail(); ?>
            </div>
            <!-- <p><php the_content() ></p> -->
            <p><?php the_excerpt() ?></p>
            
            <a href="<?php the_permalink(); ?>">
                <?php _e('Read more...') ?>
            </a>
        </div>
    </div>
    <aside>
        <?php get_sidebar(); ?>
    </aside>
<?php endwhile; else : ?>
<!-- Blogs set up including the date and set up and tags -->
<?php
endif;
?>
    <nav>
        <ul class="nav">
            <li><?php next_posts_link(); ?></li> &nbsp;
            <li><?php previous_posts_link(); ?></li>
        </ul>
    </nav>
    <!-- This is for the next page when there are too many posts on one page -->
    <p><?php _e('Sorry, no posts match your criteria'); ?></p>
 <!-- underscore e function allows our text to be translated later on in a theme which is pretty essential part of any theme -->

<!-- This is the side bar that is referring to the sidebar file -->
<!-- Footer section -->
<?php get_footer() ?>