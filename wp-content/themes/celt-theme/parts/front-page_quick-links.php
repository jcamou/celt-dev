<div class="row">
    <div class="small-12 large-7 columns">
      <h1 class="celt_mini-header">Quick Links</h1>
      <div class="small-12 large-6 columns front-page_quick-link-container">
        <?php 
          // check if the repeater field has rows of data
          if( have_rows('quick-links_instructor-list') ):
        ?>
            <h2>For Faculty</h2>
            <ul class="front-page_quick-links-list">
              <?php while( have_rows('quick-links_instructor-list') ): the_row(); 
                $post = get_sub_field('quick-links_instructor-link');
                setup_postdata( $post ); 
              ?>
                <li><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></li>
                <?php wp_reset_postdata();?>
              <?php endwhile; ?>
            </ul>
            
        <?php
          else :
            // no rows found
          endif;
        ?>
      </div>
      <div class="small-12 large-6 columns front-page_quick-link-container">
        <?php 
          // check if the repeater field has rows of data
          if( have_rows('quick-links_student-list') ):
        ?>
            <h2>For Grad Students & Postdocs</h2>
            <ul class="front-page_quick-links-list">
              <?php while( have_rows('quick-links_student-list') ): the_row(); 
                $post = get_sub_field('quick-links_student-link');
                setup_postdata( $post ); 
              ?>
                <li><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></li>
                <?php wp_reset_postdata();?>
              <?php endwhile; ?>
            </ul>
            
        <?php
          else :
            // no rows found
          endif;
        ?>
      </div>
    </div>
    <div class="small-12 large-3 right columns">
      <h1 class="celt_mini-header">Tweets</h1>
    </div>
  </div>