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
      <footer>Pagination?
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer>
    </article>
  </section>
<?php endwhile; ?>
