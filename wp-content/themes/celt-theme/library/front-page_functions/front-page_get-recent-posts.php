<?php 
  function get_recent_posts($postType) {

    $catID = get_cat_ID( $postType );
?> 

    <h1 class="celt_mini-header"><?php echo $postType; ?></h1>
    <a class="celt_recent-post-archive-link" href="<?php echo get_category_link($catID); ?>">See Full List</a>
    <ul class="recent-post_list"> 
      <?php
        $args = array(
          'numberposts' => 5,
          'category'    => $catID
          );

        $recent_posts = wp_get_recent_posts( $args );
        $count = 0;
          foreach( $recent_posts as $recent ){
            if($count==0) {
              echo '<li class="recent-post_most-recent"><h2><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></h2>';
              echo '<p class="post_date">' . date("F d, Y", strtotime($recent["post_date"])) . '</p>'; 
              echo '<p>' . wp_trim_words ( $recent["post_content"], $num_words = 35, $more = '...') . '</p></li>';
            }
            else {
              echo '<li><h3><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></h3>';
              echo '<p class="post_date">' . date("F d, Y", strtotime($recent["post_date"])) . '</p></li>'; 

            }
            $count++;
          }

      ?>
    </ul>

<?php } ?>