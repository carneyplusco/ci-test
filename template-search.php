<?php
/**
 * Template Name: Search
 */
?>

<?php get_search_form(); ?>

<?php query_posts($query_string . '&showposts=3'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
