<?php
/**
 * Template Name: My Projects
 * Template Post Type: page
 */

get_header("special");
?> <div class="loop"> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('template_parts/content', 'page'); ?> <?php endwhile; else : ?>
    <?php get_template_part('template_parts/content', 'error'); ?> <?php endif; ?> </div>
<?php get_footer("special"); ?>