<?php
  use Roots\Sage\Extras;

  $menu_number = Extras\menu_number('Home Nav', get_the_title());

  $posts = json_decode(file_get_contents("http://cmoa.org/wp-json/events/v1/categories/carnegie-international"));
  $post_count = count($posts);
?>

<div class="article-list">
  <?php if(!empty($post_count)): ?>
    <?php foreach($posts as $p): ?>
      <?php
        $date = new DateTime($p->start);
        $excerpt = $p->excerpt.' <a class="moretag" href="'. $p->url . '">Read more <span class="screen-reader-text">about ' . $p->name . '</span></a>';
        $time_location = $date->format("g a");
        if(count($p->locations)) {
          $time_location .= ", ".implode($p->locations, ', ');
        }
        elseif(!empty($p->building_location)) {
          $time_location .= ", ".$p->building_location;
        }
      ?>
      <article class="article-item" vocab="http://schema.org/" typeof="Event">
        <h2 class="article-item__title" property="name"><a property="url" href="<?= $p->url ?>" class="external-link"><?= $p->name ?></a></h2>
        <span class="screen-reader-text">(Link opens on an external site)</span>
        <h3 class="article-item__date">
          <time property="startDate" aria-label="<?= $date->format("F jS, Y \a\\t g a") ?>" datetime="<?= $date->format("Y-m-d") ?>"><?= $date->format("d M Y") ?>
            <br />
            <?= $time_location ?>
          </time>
        </h3>
      </article>
    <?php endforeach; ?>
  <?php else: ?>
    <div class="article-item">
      <p>No programs are currently scheduled. Check back soon!</p>
    </div>
  <?php endif; ?>
</div>

<?php
  $args = array(
    'post_type'   => 'page',
    'post_parent' => get_the_ID(),
    'post_status' => 'publish',
    'orderby'     => 'menu_order',
    'order'       => 'asc'
  );
  $program_categories = get_posts($args);
  $post_count = 1;
?>

<?php if(count($program_categories)): ?>
  <section class="page-header">
    <span class="section-number"></span>
    <h2 class="page-header__title underline"><span class="page-title">Past Programs</span></h2>
  </section>
  <?php foreach($program_categories as $post): setup_postdata($post); ?>
    <section class="page-header">
      <span class="section-number"><?= $menu_number .'.'. $post_count++ ?></span>
      <h3 class="page-header__title"><a href="<?php the_permalink() ?>" class="page-title"><?php the_title() ?></a></h2>
    </section>
  <?php endforeach; wp_reset_postdata(); ?>
<?php endif; ?>
