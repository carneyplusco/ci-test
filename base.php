<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <a class="screen-reader-text" href="#main-content" tabindex="0">Skip to Content</a>

    <div class="outer-container">
      <div class="wrap container" role="document">
        <div class="content row">
          <?php get_template_part('templates/header'); ?>
          <main class="main" id="main-content">
            <div class="mobile-nav">
              <nav>
                <?php
                  if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => 'main-nav', 'items_wrap' => '<ol id="%1$s" class="%2$s">%3$s</ol>']);
                  endif;
                ?>
                <span class="section-number"><i class="icon-search"></i></span>
                <?php get_search_form(); ?>
              </nav>
            </div>
            <?php include Wrapper\template_path(); ?>
          </main>
        </div>
      </div>
      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      ?>
    </div>
  </body>
</html>
