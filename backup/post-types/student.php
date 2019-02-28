<?php

declare(strict_types=1);

// function create_post_type() {
//   register_post_type( 'acme_product',
//     array(
//       'labels' => array(
//         'name' => __( 'Products' ),
//         'singular_name' => __( 'Product' )
//       ),
//       'public' => true,
//       'has_archive' => true,
//     )
//   );
// }
// add_action( 'init', 'create_post_type' );

add_action('init', function(){
  register_post_type('student', [
    'has_archive' => true,
    'labels' => [
      'add_new_item' => __('Add New Student'),
      'edit_item' => __('Edit Student'),
      'name' => __('Students'),
      'search_items' => __('Search Students'),
      'singular_name' => __('Student'),
    ],
    'supports' => [
      'title',
      'editor',
      'thumbnail',
    ],
    'menu_icon' => 'dashicons-groups',
    'menu_position' => 20,
    'public' => true,
  ]);
});
