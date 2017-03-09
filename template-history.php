<?php
/**
 * Template Name: History
 */
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php while (have_posts()) : the_post(); ?>
  <section class="page-content">
    <?php get_template_part('templates/content', 'history'); ?>
  </section>
<?php endwhile; ?>
