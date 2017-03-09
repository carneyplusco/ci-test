<?php
  use Roots\Sage\Extras;

  $menu_items = wp_get_nav_menu_items('Home Nav');
  $menu_number = Extras\menu_number('Home Nav', get_the_title());

  $participants_query = array(
    'post_type'      => 'participant',
    'post_status'    => 'publish',
    'orderby'        => 'meta_value',
    'meta_key'       => 'last_name',
    'order'          => 'ASC',
  );
  $participants = new WP_Query($participants_query);
?>

<section class="page-content">
  <article <?php post_class('article-item'); ?>>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </article>
</section>

<section class="page-content">
  <section class="page-header">
    <span class="section-number"><i class="icon-search"></i></span>
    <?php get_template_part('templates/party', 'searchform'); ?>
  </section>
</section>

<?php if($participants->have_posts()): ?>
  <section class="page-content">
    <?php $post_count = 1 ?>
    <div class="article-list -participants">
      <?php while ($participants->have_posts()) : $participants->the_post(); ?>
        <span class="article-list__section-number"><?= $menu_number .'.'. $post_count++ ?></span>
        <div class="article-link" vocab="http://schema.org/" typeof="Person">
          <h2 class="article-item__title" property="name"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
<?php endif; ?>
