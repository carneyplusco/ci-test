<nav class="page-nav">
  <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => 'main-nav', 'items_wrap' => '<ol id="%1$s" class="%2$s">%3$s</ol>']);
    endif;
  ?>
</nav>

<span class="section-number"><i class="icon-search"></i></span>
<?php get_search_form(); ?>
