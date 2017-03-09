<?php
  use Roots\Sage\Extras;
  $title_number = Extras\menu_number('Home Nav', get_the_title());
?>

<section class="page-content">
  <article <?php post_class('article-item'); ?>>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
  </article>
</section>

<?php if(have_rows('postcard')): ?>
  <section class="page-content">
    <section class="page-header">
      <span class="section-number"></span>
      <h2 class="page-header__title underline"><span class="page-title">Postcards</span></h2>
    </section>
    <div class="article-list">
      <?php $row_count = count(get_field('postcard')); ?>
      <?php while(have_rows('postcard')): the_row(); ?>
        <?php $image = get_sub_field('image'); ?>
        <div class="article-image">
          <figure>
            <a href="<?= $image['url'] ?>">
              <img src="<?= $image['sizes']['medium_large'] ?>" alt="<?= $image['alt'] ?>" />
            </a>
          </figure>
        </div>
        <span class="article-list__section-number"><?= $title_number .'.'. $row_count-- ?></span>
        <div class="article-item">
          <h2><?= $image['caption'] ?></h2>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
<?php endif; ?>

<section class="page-content">
  <section class="page-header">
    <span class="section-number"><i class="icon-search"></i></span>
    <?php get_template_part('templates/party', 'searchform'); ?>
  </section>
</section>
