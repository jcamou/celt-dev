<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

$footer_post_ID = 568;
?>

</section>
<footer class="site-footer">
  <div class="container">
    <div class="row">
    	<?php do_action( 'foundationpress_before_footer' ); ?>
    	<?php dynamic_sidebar( 'footer-widgets' ); ?>
    	<?php do_action( 'foundationpress_after_footer' ); ?>
      <div class="medium-12 large-4 columns">
        <div class="logo-testing"></div>
        <div class="footer_copyright">
          <h6>Center for Excellence in Learning and Teaching</h6>
          <span>Copyright © 1995-<?php echo date('Y'); ?>, Iowa State University of Science and Technology. All rights reserved.</span>
        </div>
      </div>
      <div class="medium-12 large-6 columns">
        <?php if(have_rows('footer_quick_links', $footer_post_ID)): ?>
          <div class="footer_quick-links group">
            <h6>Quick Links</h6>
            <ul>
              <?php while(have_rows('footer_quick_links', $footer_post_ID)):the_row();?>
                <li class="small-12 medium-6 large-6 columns"><a href="<?php the_sub_field('link_url', $footer_post_ID); ?>"><?php the_sub_field('link_name', $footer_post_ID);?></a></li>
              <?php endwhile; ?>
            </ul>
          </div>
        <?php else: endif;?>
      </div>
      <div class="medium-12 large-2 columns">
        <?php if(have_rows('footer_social_links', $footer_post_ID)): ?>
          <div class="footer_follow">
            <h6>Follow CELT</h6>
            <ul>
              <?php while(have_rows('footer_social_links', $footer_post_ID)):the_row();?>
                <li><a href="<?php the_sub_field('social_link_url', $footer_post_ID); ?>"><?php the_sub_field('social_link_name', $footer_post_ID);?></a></li>
              <?php endwhile; ?>
            </ul>
          </div>
        <?php else: endif;?>
      </div>
    </div>
  </div>
</footer>
  </div>
  
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>