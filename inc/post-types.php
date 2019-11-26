<?php 

function ic_post_types() {

//register Product post type
  $product_labels = array(
    'name'                => 'Products',
    'singular_name'       => 'Product',
    'menu_name'           => 'Products',
    'name_admin_bar'      => 'Product',
    'add_new'             => 'Add New',
    'add_new_item'        => 'Add New Product',
    'new_item'            => 'New Product',
    'edit_item'           => 'Edit Product',
    'view_item'           => 'View Product',
    'all_items'           => 'All Products',
    'search_items'        => 'Search For Products',
    'parent_item_colon'   => 'Parent Products:',
    'not_found'           => 'No Product found.',
    'not_found_in_trash'  => 'No Product found in trash.',
    );
  $product_args = array(
    'labels'              => $product_labels,
    'description'         => 'Products',
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'product' ),
    'capability_type'     => 'page',
    'map_meta_cap'        => true,
    'exclude_from_search' => false,
    'has_archive'         => true,
    'hierarchical'        => false,
    'menu_position'       => null,
    'supports'            => array( 'title', 'thumbnail', 'excerpt', 'page-attributes' ),
    'menu_icon'           => 'dashicons-lightbulb',
    );

  register_post_type( 'ic_product', $product_args );


//register Event post type
  $event_labels = array(
    'name'                => 'Events',
    'singular_name'       => 'Event',
    'menu_name'           => 'Events',
    'name_admin_bar'      => 'Events',
    'add_new'             => 'Add New',
    'add_new_item'        => 'Add New Event',
    'new_item'            => 'New Event',
    'edit_item'           => 'Edit Event',
    'view_item'           => 'View Event',
    'all_items'           => 'All Events',
    'search_items'        => 'Search For Events',
    'parent_item_colon'   => 'Parent Events:',
    'not_found'           => 'No Event found.',
    'not_found_in_trash'  => 'No Event found in trash.',
    );
  $event_args = array(
    'labels'              => $event_labels,
    'description'         => 'Events',
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'event' ),
    'capability_type'     => 'page',
    'exclude_from_search' => false,
    'has_archive'         => true,
    'hierarchical'        => true,
    'menu_position'       => null,
    'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
    'menu_icon'           => 'dashicons-calendar',
    );

  // register_post_type( 'aanv_event', $event_args );

}

add_action( 'init', 'ic_post_types', 10 );
