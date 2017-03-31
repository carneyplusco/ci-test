<?php
  use Roots\Sage\Extras;
  $category = get_the_category()[0];
  $category_number = Extras\menu_number('Home Nav', $category->name);
?>

<?php while (have_posts()) : the_post(); ?>
  <section class="page-header">
    <span class="section-number"><i class="up-arrow"></i></span>
    <h1 class="page-header__title"><?php the_category(' ') ?></h1>
    <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
  </section>

  <section class="page-content">
    <!-- Fix: update count to get the article’s position in the list view -->
    <?php $count = $category->category_count; ?>
    <span class="section-number"><?= $category_number .'.'. $count-- ?></span>
    <article <?php post_class('article-item'); ?>>
      <h2 class="article-item__title"><?php the_title(); ?></h2>
      <h3 class="article-item__date"><?php the_date("d M Y"); ?></h2>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
  </section>

  <footer class="post-nav">
    <?php
      $prev_link = get_previous_post_link('%link', 'Previous', true);
      $next_link = get_next_post_link('%link', 'Next', true);
    ?>
    <?php if($prev_link): ?>
      <div class="post-nav__link">
        <span class="section-number"><i class="left-arrow"></i></span>
        <span class="post-nav__link -previous"><?= $prev_link ?></span>
      </div>
    <?php endif; ?>

    <?php if($next_link): ?>
      <div class="post-nav__link">
        <span class="section-number"><i class="right-arrow"></i></span>
        <span class="post-nav__link -previous"><?= $next_link ?></span>
      </div>
    <?php endif; ?>
  </footer>

  <?php get_template_part('templates/nav','page') ?>
<?php endwhile; ?>
