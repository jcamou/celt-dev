<?php 
  function get_profiles($postID) {
    $args = array(
      'post_parent' => $postID,
      'post_type'   => 'page', 
      'numberposts' => -1,
      'orderby'     => 'menu_order',
      'order'       => 'ASC',
      'post_status' => 'any' 
    );

    $children = get_children($args);

    if ($children) { ?>
      <ul class="directory-list"> <?php
        foreach ($children as $children) { 
          $profile_title = get_field("directory-profile_title", $children->ID);
          $profile_email = get_field('directory-profile_email', $children->ID);
          $profile_telephone = get_field('directory-profile_telephone', $children->ID);
          $profile_office = get_field('directory-profile_office', $children->ID);
          $profile_image = get_field('directory-profile_picture', $children->ID);
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          ?>
            <li class="directory-list_profile small-12">
              <?php if( $profile_image ) { ?>
                <div class="directory-list_profile-picture">
                  <?php echo wp_get_attachment_image( $profile_image, $size ); ?>
                </div>
              <?php } ?>
              <div class="directory-list_profile-info">
                <a class="directory-list_profile-name" href="<?php echo get_permalink($children->ID); ?>"><?php echo $children->post_title; ?></a>
                <div class="directory-list_profile-title"><?php echo $profile_title; ?></div>
                <div class="directory-list_profile-email"><?php echo $profile_email; ?></div>
                <div class="directory-list_profile-telephone"><?php echo $profile_telephone; ?></div>
              </div>
            </li>
      <?php
        
      } ?>
    </ul> <?php
    }


  }

?>