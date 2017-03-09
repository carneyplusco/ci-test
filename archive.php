<?php
  use Roots\Sage\Extras;
  $category = get_the_category()[0];
  $category_number = Extras\menu_number('Home Nav', $category->name);
?>

<section class="page-header">
  <span class="section-number"><?= $category_number ?>.</span>
  <h1 class="page-header__title underline"><?php the_category(' ') ?></h1>
  <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
</section>

<section class="page-content">
  <div class="article-list">
    <?php $count = $category->category_count; ?>
    <?php while (have_posts()) : the_post(); ?>
      <span class="article-list__section-number"><?= $category_number .'.'. $count-- ?></span>
      <article class="article-item" vocab="http://schema.org/" typeof="NewsArticle">
        <h2 class="article-item__title" property="headline"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h2>
        <h3 class="article-item__date" aria-label="<?= the_time("F jS, Y") ?>">
          <time property="datePublished" datetime="<?php the_time("Y-m-d"); ?>"><?php the_time("d M Y"); ?></time>
        </h2>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; ?>
  </div>
</section>
