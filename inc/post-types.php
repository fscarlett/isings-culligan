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
    'rewrite'             => array( 'slug' => 'products' ),
    'capability_type'     => 'page',
    'map_meta_cap'        => true,
    'exclude_from_search' => false,
    'has_archive'         => true,
    'hierarchical'        => false,
    'menu_position'       => null,
    'supports'            => array( 'title', 'thumbnail', 'editor', 'excerpt', 'page-attributes' ),
    'menu_icon'           => 'dashicons-lightbulb',
    );

  register_post_type( 'ic_product', $product_args );


//register Problem post type
  $problem_labels = array(
    'name'                => 'Problems',
    'singular_name'       => 'Problem',
    'menu_name'           => 'Problems',
    'name_admin_bar'      => 'Problem',
    'add_new'             => 'Add New',
    'add_new_item'        => 'Add New Problem',
    'new_item'            => 'New Problem',
    'edit_item'           => 'Edit Problem',
    'view_item'           => 'View Problem',
    'all_items'           => 'All Problems',
    'search_items'        => 'Search For Problems',
    'parent_item_colon'   => 'Parent Problems:',
    'not_found'           => 'No Problem found.',
    'not_found_in_trash'  => 'No Problem found in trash.',
    );
  $problem_args = array(
    'labels'              => $problem_labels,
    'description'         => 'Problems',
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'problems' ),
    'capability_type'     => 'page',
    'exclude_from_search' => false,
    'has_archive'         => true,
    'hierarchical'        => true,
    'menu_position'       => null,
    'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
    'menu_icon'           => 'dashicons-warning',
    );

  register_post_type( 'ic_problem', $problem_args );

}

add_action( 'init', 'ic_post_types', 10 );
