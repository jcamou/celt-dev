<?php 
  function get_list_of_children($postID) {
    $args = array(
      'post_parent' => $postID,
      'post_type'   => 'page', 
      'numberposts' => -1,
      'order'       => 'ASC',
      'orderby'     => 'menu_order',
      'post_status' => 'any' 
    );

    $children = get_children($args);

    if ($children) { ?>
      <ul class="subpage_list"> <?php
        foreach ($children as $children) { 
          ?>
            <li>
              <a class="subpage_container" href="<?php echo get_permalink($children->ID); ?>">
                <h4 class="subpage_title"><?php echo $children->post_title; ?></h4>
                <p class="subpage_excerpt"><?php echo $children->post_excerpt; ?></p>
              </a>
            </li>
      <?php
        
      } ?>
    </ul> <?php
    }


  }

?>