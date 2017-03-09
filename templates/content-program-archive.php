<section class="page-header">
  <h2 class="page-header__title underline"><span class="page-title"><?php the_title() ?></a></h2>
</section>

<section class="page-content">
  <div class="article-list">
    <div class="page-content__body">
      <?php the_content() ?>
    </div>

    <?php
      $archived_category = get_field('archive_category');
      $args = array(
        'post_type'   => 'program',
        'post_status' => 'publish',
        'order'       => 'asc',
        'tax_query'   => [
          [
            'taxonomy' => 'program_categories',
            'field' => 'term_id',
            'terms' => $archived_category->term_id
          ]
        ]
      );
      $archive_posts = get_posts($args);
      $post_count = 1;
    ?>

    <?php if(count($archive_posts)): ?>
      <?php foreach($archive_posts as $post): setup_postdata($post); ?>
        <article class="article-item" vocab="http://schema.org/" typeof="NewsArticle">
          <h3 class="article-item__title" property="headline"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
          <h4 class="article-item__date" aria-label="<?= the_time("F jS, Y") ?>">
            <time property="datePublished" datetime="<?php the_time("Y-m-d"); ?>"><?php the_time("d M Y"); ?></time>
          </h4>
        </article>
      <?php endforeach; wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</section>
