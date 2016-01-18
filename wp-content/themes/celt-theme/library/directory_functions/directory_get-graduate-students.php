<?php 
   function get_grad_students() {
  // check if the repeater field has rows of data
    if( have_rows('celt_directory_graduate_students') ):
  ?>
    <h2>Graduate Students</h2>
    <table>
      <tbody>
        <tr>
          <td><strong>Name</strong></td>
          <td><strong>Title</strong></td>
          <td><strong>Email</strong></td>
        </tr>
        <?php while( have_rows('celt_directory_graduate_students') ): the_row(); 
          $name = get_sub_field('celt_directory_graduate_students_name');
          $title = get_sub_field('celt_directory_graduate_students_title');
          $email = get_sub_field('celt_directory_graduate_students_email');
          ?>
          <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $title; ?></td>
            <td><?php echo $email; ?></td>
          </tr>
         <?php endwhile; ?>
      </tbody>
    </table>
  <?php
    else :
      // no rows found
    endif;
}
?>