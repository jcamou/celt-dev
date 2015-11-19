<?php
  add_action('init', 'wpdocs_custom_init');
 
  /**
   * Add excerpt support to pages
   */
  function wpdocs_custom_init() {
      add_post_type_support( 'page', 'excerpt' );
  }
?>