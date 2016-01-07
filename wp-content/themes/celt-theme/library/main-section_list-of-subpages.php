<?php 
  function get_list_of_subsections($postID) {
    $args = array(
      'post_parent' => $postID,
      'post_type'   => 'page', 
      'numberposts' => -1,
      'order'       => 'ASC',
      'orderby'     => 'title',
      'post_status' => 'any' 
    );

    $children = get_children($args);

     $count = 1;

    if ($children) { ?>
      <ul class="main-section_subpage-list"> <?php
        foreach ($children as $children) { 
          if ($count%2 == 1) {
            echo "<div class='row'>";
          }
          ?>
            <li class="main-section_subpage-container columns large-6 small-12 left">
              <a  class="main-section_subpage-title" href="<?php echo get_permalink($children->ID); ?>"><?php echo $children->post_title; ?></a>
              <p class="main-section_subpage-excerpt"><?php echo $children->post_excerpt; ?></p>
              <?php
                $subargs = array(
                  'post_parent' => $children->ID,
                  'post_type'   => 'page', 
                  'numberposts' => -1,
                  'order'       => 'ASC',
                  'orderby'     => 'menu_order',
                  'post_status' => 'any' 
                );

                $subchildren = get_children($subargs);

                if ($subchildren) {
              ?>
                <ul class="main-section_sublist-children-list"> <?php
                  foreach ($subchildren as $subchildren) { ?>
                      <li class="main-section_subpage-children-container">
                        <a  class="main-section_subpage-children-title" href="<?php echo get_permalink($subchildren->ID); ?>"><?php echo $subchildren->post_title; ?></a>
                      </li>
                      <?php } ?>
                </ul>
                <?php } ?>
              </a>
            </li>
      <?php
      if ($count%2 != 1) {
          echo "</div>";
        }
        $count++;
      } 

      if ($count%2 == 1) echo "</div>"; //This is to ensure there is no open div if the number of elements in user_kicks is not a multiple of 4?>
    </ul> <?php
    }


  }

?>