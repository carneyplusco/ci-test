<?php
use Roots\Sage\Extras;

// Get the top-level Programs page
$programs_page = get_page_by_path('programs', OBJECT, 'page');
$menu_number = Extras\menu_number('Home Nav', 'Programs');

// Get the program category associated with this program
$category = get_the_terms($post, 'program_categories')[0];

$args = array(
  'post_type'   => 'page',
  'post_status' => 'publish',
  'posts_per_page' => 1,
  'order'       => 'asc',
  'meta_query' => [
    [
      'key'     => 'archive_category',
      'value'   => $category->term_id,
      'compare' => '=',
    ]
  ]
);
// Get all pages that have the custom field checked for the same program category
$archive_page = get_posts($args);

$args = array(
  'post_type'   => 'page',
  'post_parent' => $programs_page->ID,
  'post_status' => 'publish',
  'orderby'     => 'menu_order',
  'order'       => 'asc'
);
// Get all child pages of the top-level Programs page
$program_pages = get_posts($args);

// Find the page with the matching custom field in the list of child pages
$index = array_search($archive_page[0], $program_pages);
$archive_index = $index !== FALSE ? $index + 1: 1;

$args = array(
  'post_type'   => 'program',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'order'       => 'asc',
  'tax_query'   => [
    [
      'taxonomy' => 'program_categories',
      'field' => 'term_id',
      'terms' => $category->term_id
    ]
  ]
);
// Finally get all other program posts that have the same program category
$archive_posts = get_posts($args);

// Find the current program post in the list of all programs
$index = array_search($post, $archive_posts);
$post_index = $index !== FALSE ? $index + 1: 1;
?>

<?php while (have_posts()) : the_post(); ?>
  <section class="page-header">
    <span class="section-number"><i class="up-arrow"></i></span>
    <h1 class="page-header__title"><a href="/programs/">Programs</a></h1>
    <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
  </section>

  <section class="page-content">
    <span class="section-number"><?= $menu_number .'.'. $archive_index .'.'. $post_index ?></span>
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
