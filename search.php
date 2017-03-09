<?php use Roots\Sage\Extras; ?>

<section class="page-header">
  <h1 class="page-header__title"><span class="page-title">Search Results</span></h1>
  <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
</section>

<section class="page-header">
  <span class="section-number"><i class="icon-search"></i></span>
  <?php get_search_form(); ?>
</section>

<section class="page-content">
  <div class="article-list">
    <?php if(have_posts()): ?>
      <?php $count = count($wp_query->posts); ?>
      <?php while (have_posts()): the_post(); ?>
        <article class="article-item">
          <h2 class="article-item__title"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h2>
          <h3 class="article-item__date"><?php the_time("d M Y"); ?></h2>
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile; ?>
    <?php else: ?>
      <div class="article-item">
        <p>Sorry, no results were found.</p>
      </div>
    <?php endif; ?>
    </div>
</section>
