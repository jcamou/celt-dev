<?php
/*
Template Name: CELT Teaching Tip Archives 
*/
get_header(); ?>
<div class="row">
  <aside id="sidebar" class="small-12 large-3 columns  nav_side-bar left">
    <?php do_action( 'foundationpress_before_sidebar' ); ?>
    <a href="<?php echo get_permalink($id); ?>"><h2 class="section-title">Teaching Tips</h2></a>
  </aside>
  <div class="small-12 large-8 columns" role="main">
      <?php do_action( 'foundationpress_before_content' ); ?>
      <?php
        $catID = get_cat_ID( 'Teaching Tip');
        $the_query = new WP_Query( 'cat=' . $catID );?>
        <ul class="celt_archive-list">
         <?php // The Loop
          while ( $the_query->have_posts() ) :
            $the_query->the_post();?>

            <li>
              <h2><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h2>
              <p class="celt_post-date"><?php echo the_time('l, F jS, Y'); ?></p>
              <?php echo the_excerpt(); ?>

            </li>


          <?php endwhile;

          /* Restore original Post Data 
           * NB: Because we are using new WP_Query we aren't stomping on the 
           * original $wp_query and it does not need to be reset.
          */
          wp_reset_postdata();
         ?>
        </ul>
             

      <?php do_action( 'foundationpress_after_content' ); ?>

  </div>
</div>

<?php get_footer(); ?>
