<?php
/**
 * Template Name: Program Archive
 */

use Roots\Sage\Extras;
?>

<section class="page-header">
  <span class="section-number"><i class="up-arrow"></i></span>
  <h1 class="page-header__title"><a href="/programs/">Programs</a></h1>
  <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
</section>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'program-archive'); ?>
<?php endwhile; ?>
