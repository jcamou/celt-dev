<?php
/**
 * Add Directory Profile Post Type
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'directory',
    array(
      'labels' => array(
        'name' => __( 'Directory' ),
        'singular_name' => __( 'Profile' ),
        'edit_item' => __( 'Edit Profile'),
        'add_new_item' => __( 'Add New Profile'),
        'new_item' => __( 'New Profile'),
        'view_item' => __( 'View Profile'),
        'search_items' => __( 'Search Profiles'),
        'not_found' => __( 'Search Profiles')
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 20,
      'menu_icon'  => 'dashicons-id',
      'description' => 'Directory profile for each member of CELT',
      'hierarchical' => true,
      'supports' => array( 'title', 'editor', 'page-attributes' ), 
      'rewrite' => array( 'slug' => '', 'with_front' => false, 'feed' => false)
    )
  );
}



?>