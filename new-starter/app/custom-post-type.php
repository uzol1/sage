<?php

// Register the custom post type.
function register_example_cpt() {

    $labels = array(
        'name'               => __('testimony', 'sage'),
        'singular_name'      => __('testimony', 'sage'),
        'add_new'            => __('Add New testimony', 'sage'),
        'add_new_item'       => __('Add New testimony', 'sage'),
        'edit_item'          => __('Edit testimony', 'sage'),
        'new_item'           => __('New testimony', 'sage'),
        'view_item'          => __('View testimonye', 'sage'),
        'search_items'       => __('Search testimony', 'sage'),
        'not_found'          => __('No testimony found', 'sage'),
        'not_found_in_trash' => __('No testimony found in Trash', 'sage'),
        'parent_item_colon'  => __('Parent testimony:', 'sage'),
        'menu_name'          => __('testimony', 'sage'),
    );

    $args = array(
      'labels'              => $labels,
      'hierarchical'        => false,
      'description'         => 'description',
      'taxonomies'          => array(),
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_admin_bar'   => false,
      'menu_position'       => null,
      'menu_icon'           => null,
      'show_in_nav_menus'   => false,
      'publicly_queryable'  => true,
      'exclude_from_search' => true,
      'has_archive'         => true,
      'query_var'           => true,
      'can_export'          => true,
      'rewrite'             => true,
      'capability_type'     => 'post',
      'supports'            => array('title', 'thumbnail', 'editor')
    );

    register_post_type('testimony', $args );
}
add_action('init', 'register_example_cpt');

// Register the taxonomy.
function taxonomy_example_cpt_category()
{

  $labels = array(
    'name'                  => __('Categories', 'sage'),
    'singular_name'         => __('Category', 'sage'),
    'search_items'          => __('Search Categories', 'sage'),
    'popular_items'         => __('Popular Categories', 'sage'),
    'all_items'             => __('All Categories', 'sage'),
    'parent_item'           => __('Parent Category', 'sage'),
    'parent_item_colon'     => __('Parent Category', 'sage'),
    'edit_item'             => __('Edit Category', 'sage'),
    'update_item'           => __('Update Category', 'sage'),
    'add_new_item'          => __('Add New Category', 'sage'),
    'new_item_name'         => __('New Category Name', 'sage'),
    'add_or_remove_items'   => __('Add or remove Categories', 'sage'),
    'choose_from_most_used' => __('Choose from most used Categories', 'sage'),
    'menu_name'             => __('Categories', 'sage')
  );

  $args = array(
    'labels'            => $labels,
    'public'            => true,
    'show_in_nav_menus' => true,
    'show_admin_column' => true,
    'hierarchical'      => true,
    'show_tagcloud'     => true,
    'show_ui'           => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'example-cpt-category'),
    'query_var'         => true
    // 'capabilities'   => ''
  );

  register_taxonomy('example-cpt-category', array('testimony'), $args);
}
add_action('init', 'taxonomy_example_cpt_category');

