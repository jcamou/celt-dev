<?php
/**
 * Template part for extra material box
 *
 * @package CELT Theme
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>


<?php 
  // check if there's data
  if( get_field('right_column_extra_content')):
?>
<div class="celt-article_extra-content-right">
  <?php the_field('right_column_extra_content'); ?>
</div>
<?php
  else :
    // no rows found
  endif;
?>