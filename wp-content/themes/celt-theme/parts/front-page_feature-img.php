<?php 
  $feature_img = get_field("front-page_feature-img");
  $feature_heading = get_field('front-page_feature-heading');
  $feature_excerpt = get_field('front-page_feature-excerpt');
  $size = 'full'; // (thumbnail, medium, large, full or custom size)
?>
<div class="row">
  <div class="small-12 large-12 columns front-page_feature-container">
    <?php
      if( $feature_img ) {
          echo wp_get_attachment_image( $feature_img, $size );
      }
    ?>
    <div class="small-12 large-6 columns front-page_feature-text">
      <h2><?php echo $feature_heading; ?></h2>
      <p><?php echo $feature_excerpt; ?></p>
    </div>
  </div>
</div>