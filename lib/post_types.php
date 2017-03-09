<?php

namespace Roots\Sage\Setup;

/**
 * Custom post types / taxonomies
*/
function create_post_types() {
  register_post_type('program',
    array(
      'labels' => array(
        'name' => __('Programs'),
        'singular_name' => __('Program'),
        'add_new' => __('Add New' ),
        'add_new_item' => __('Add New Program'),
        'edit' => __('Edit'),
        'edit_item' => __('Edit Program'),
        'new_item' => __('New Program'),
        'view' => __('View Program'),
        'view_item' => __('View Program'),
        'search_items' => __('Search Programs'),
        'all_items' => __('Program Archive'),
        'not_found' => __('No programs found.'),
        'not_found_in_trash' => __('No programs found in Trash')
      ),
      'public' => true,
      'hierarchical' => false,
      'supports' => array(
        'title', 'editor', 'thumbnail', 'excerpt'
      ),
      'map_meta_cap' => true,
      'capabilities' => array(
        'read_posts' => 'read_programs',
        'read_private_posts' => 'read_private_programs',
        'edit_posts' => 'edit_programs',
        'edit_others_posts' => 'edit_others_programs',
        'edit_private_posts' => 'edit_private_programs',
        'edit_published_posts' => 'edit_programs',
        'publish_posts' => 'publish_programs',
        'create_posts' => 'edit_programs',
        'delete_posts' => 'delete_programs',
        'delete_published_posts' => 'delete_programs',
        'delete_others_posts' => 'delete_others_programs',
        'delete_private_posts' => 'delete_private_programs',
      ),
      'rewrite' => array('slug' => 'program', 'with_front' => false),
      'menu_icon' => 'dashicons-art'
    )
  );

  register_post_type('participant',
    array(
      'labels' => array(
        'name' => __('Participants'),
        'singular_name' => __('Participant'),
        'add_new' => __('Add New' ),
        'add_new_item' => __('Add New Participant'),
        'edit' => __('Edit'),
        'edit_item' => __('Edit Participant'),
        'new_item' => __('New Participant'),
        'view' => __('View Participant'),
        'view_item' => __('View Participant'),
        'search_items' => __('Search Participants'),
        'all_items' => __('All Participants'),
        'not_found' => __('No participants found.'),
        'not_found_in_trash' => __('No participants found in Trash')
      ),
      'public' => true,
      'hierarchical' => true,
      'supports' => array(
        'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt'
      ),
      'map_meta_cap' => true,
      'capabilities' => array(
        'read_posts' => 'read_participants',
        'read_private_posts' => 'read_private_participants',
        'edit_posts' => 'edit_participants',
        'edit_others_posts' => 'edit_others_participants',
        'edit_private_posts' => 'edit_private_participants',
        'edit_published_posts' => 'edit_participants',
        'publish_posts' => 'publish_participants',
        'create_posts' => 'edit_participants',
        'delete_posts' => 'delete_participants',
        'delete_published_posts' => 'delete_participants',
        'delete_others_posts' => 'delete_others_participants',
        'delete_private_posts' => 'delete_private_participants',
      ),
      'rewrite' => array('slug' => 'participant', 'with_front' => false),
      'menu_icon' => 'dashicons-businessman'
    )
  );
}
add_action('init', __NAMESPACE__ . '\\create_post_types');


function program_taxonomies() {
  register_taxonomy(
    'program_categories',
    'program',
    array(
      'labels' => array(
        'name' => __('Categories'),
        'singular_name' => __('Category'),
        'search_items' => __('Search Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
        'menu_name' => __('Categories'),
        'not_found' => __('No categories found.'),
        'not_found_in_trash' => __('No categories found in Trash')
      ),
      'hierarchical' => true,
      'rewrite' => array('slug' => 'program_category', 'with_front' => false)
    )
  );
}
add_action('init', __NAMESPACE__ . '\\program_taxonomies');
?>
