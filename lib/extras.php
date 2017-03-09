<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Find the current item in a given menu
 */
function menu_number($menu_name, $item_name) {
  $menu_items = array_map(function($item) {
    return strtolower($item->title);
  }, wp_get_nav_menu_items($menu_name));

  $title_number = array_search(strtolower($item_name), $menu_items);

  return $title_number !== FALSE ? $title_number + 1 : 0;
}

/**
 * Add link to referrer if available, home otherwise
 */
function back_link() {
  return wp_get_referer() ?: home_url();
}

/**
 * Use | as separator
 */
function custom_separator($separator) {
  return "|";
}
add_filter('document_title_separator', __NAMESPACE__ . '\\custom_separator');

/**
 * Adjust title display
 */
function adjust_title($title) {
  if(is_front_page()) {
    $title['title'] = '';
  }
  else {
    $title['site'] = get_bloginfo('description');
  }
  return $title;
}
add_filter('document_title_parts',  __NAMESPACE__ . '\\adjust_title', 10);
