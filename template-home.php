<?php
/**
 * Template Name: Home
 */
?>

<h1 class="screen-reader-text">Carnegie International 2018, Home</h1>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'home'); ?>
<?php endwhile; ?>

<nav role="navigation" aria-label="Site navigation">
<?php
  if (has_nav_menu('primary_navigation')) :
    wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => 'main-nav', 'items_wrap' => '<ol id="%1$s" class="%2$s">%3$s</ol>']);
  endif;
?>
</nav>

<span class="section-number"><i class="icon-search"></i></span>
<?php get_search_form(); ?>
