<?php use Roots\Sage\Extras; ?>

<?php while (have_posts()) : the_post(); ?>
  <section class="page-header">
    <span class="section-number"><i class="up-arrow"></i></span>
    <h1 class="page-header__title"><a href="/programs/">Programs</a></h1>
    <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
  </section>

  <section class="page-content">
    <span class="section-number">&nbsp;</span>
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
      $prev_link = get_previous_post_link('%link', 'Previous', true, [], 'program_categories');
      $next_link = get_next_post_link('%link', 'Next', true, [], 'program_categories');
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
<?php endwhile; ?>

<?php get_template_part('templates/nav','page') ?>
