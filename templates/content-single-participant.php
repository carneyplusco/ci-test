<?php
  use Roots\Sage\Extras;

  $menu_items = wp_get_nav_menu_items('Home Nav');
  $menu_number = Extras\menu_number('Home Nav', 'Participants');

  $participants_query = array(
    'post_type'      => 'participant',
    'post_status'    => 'publish',
    'orderby'        => 'meta_value',
    'meta_key'       => 'last_name',
    'order'          => 'ASC',
  );
  $participants = new WP_Query($participants_query);

  $participant_name = get_post_meta($post->ID, 'first_name', true);
  $filtered_participants = array_filter($participants->posts, function($item) use ($post) {
    return get_field('first_name', $item) == get_field('first_name', $post);
  });

  $index = count($filtered_participants) == 1 ? key($filtered_participants) + 1 : 1;
?>

<?php while (have_posts()) : the_post(); ?>
  <section class="page-header">
    <span class="section-number"><i class="up-arrow"></i></span>
    <h1 class="page-header__title"><a href="/participants/">Participants</a></h1>
    <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
  </section>

  <section class="page-content">
    <span class="section-number"><?= $menu_number .'.'. $index ?></span>
    <article <?php post_class('article-item'); ?> vocab="http://schema.org/" typeof="Person">
      <h2 class="article-item__title" property="name"><?php the_title(); ?></h2>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
  </section>

  <footer class="post-nav">
    <?php
      $prev_link = get_previous_post_link('%link', 'Previous', false);
      $next_link = get_next_post_link('%link', 'Next', false);
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
