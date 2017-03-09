<?php
/**
 * Template Name: Programs
 */
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php while (have_posts()) : the_post(); ?>
  <section class="page-content">
    <?php get_template_part('templates/content', 'programs'); ?>
  </section>
<?php endwhile; ?>
