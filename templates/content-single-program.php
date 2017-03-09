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
      <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer>
    </article>
  </section>
<?php endwhile; ?>
