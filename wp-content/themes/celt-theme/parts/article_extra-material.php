<?php
/**
 * Template part for extra material box
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>


<?php 
  // check if the repeater field has rows of data
  if( (have_rows('celt-extra-materials_links')) or (have_rows('celt-extra-material_docs')) ):
?>
<div class="parts_extra-material">
  <h1>Extra Materials</h1>
  <?php 
    // check if the repeater field has rows of data
    if( have_rows('celt-extra-materials_links') ):
  ?>
    <div class="extra-materia_reading-container">
      <h2>Reading</h2>
      <ul>
        <?php while( have_rows('celt-extra-materials_links') ): the_row(); 
          $name = get_sub_field('celt-extra-materials_link-name');
          $url = get_sub_field('celt-extra-materials_link-url');
        ?>
        <li><a href="<?php echo $url; ?>"><?php echo $name;?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>
  <?php
    else :
      // no rows found
    endif;
  ?>

  <?php 
    // check if the repeater field has rows of data
    if( have_rows('celt-extra-materials_docs') ):
  ?>
    <div class="extra-materia_reading-container">
      <h2>Downloads</h2>
      <ul>
        <?php while( have_rows('celt-extra-materials_docs') ): the_row(); 
          $name = get_sub_field('celt-extra-materials_doc-name');
          $file_id = get_sub_field('celt-extra-materials_doc-upload');
        ?>
        <li><a href="<?php echo wp_get_attachment_url($file_id); ?>"><?php echo $name;?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>
  <?php
    else :
      // no rows found
    endif;
  ?>

<?php
  else :
    // no rows found
    endif;
?>