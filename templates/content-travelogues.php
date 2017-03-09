<?php
  use Roots\Sage\Extras;

  $menu_items = wp_get_nav_menu_items('Home Nav');
  $menu_number = Extras\menu_number('Home Nav', get_the_title());

  $travelogue_tag_id = 117;
  $posts = json_decode(file_get_contents("http://blog.cmoa.org/wp-json/wp/v2/posts?tags={$travelogue_tag_id}&order=asc"));
  $post_count = 1;
?>

<div class="article-list">
  <?php if($post_count): ?>
    <?php foreach($posts as $p): ?>
      <span class="article-list__section-number"><?= $menu_number .'.'. $post_count++ ?></span>
      <article class="article-item" vocab="http://schema.org/" typeof="NewsArticle">
        <h2 property="headline"><a property="url" href="<?= $p->link ?>" class="external-link"><?= $p->title->rendered ?></a></h2>
        <span class="screen-reader-text">(Link opens on an external site)</span>
        <?= wpautop($p->post_list_text) ?>
      </article>
    <?php endforeach; ?>
  <?php else: ?>
    <div class="article-item">
      <p>No posts were found. Check back soon.</p>
    </div>
  <?php endif; ?>
</div>
