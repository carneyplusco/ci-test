<?php
/**
 * Template Name: Party Records
 */

use Roots\Sage\Extras;
?>

<section class="page-header">
  <h1 class="page-header__title"><span class="page-title"><?= get_query_var( 'search' ) ? "Search Results for Past Internationals" : "Party Records Search" ?></span></h1>
  <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
</section>

<section class="page-header">
  <span class="section-number"><i class="icon-search"></i></span>
  <?php get_template_part('templates/party', 'searchform'); ?>
</section>

<section class="page-content">
  <div class="article-list">
    <div id="search-results"></div>

    <div id="ajax-results" style="display: none;">
      <span class="section-number"><i class="icon-loop"></i></span>
      <div class="page-content__body">
        <a href="#">LOAD MORE</a>
      </div>
    </div>
  </div>
</section>
