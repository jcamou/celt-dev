<?php
/**
 * Template part for left subsection menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

$class = '';
/* is it a page */

$cat = get_the_category();
echo $cat[1];
?>
<aside id="sidebar" class="small-12 large-3 columns  nav_side-bar left">
  <?php do_action( 'foundationpress_before_sidebar' ); ?>
  <a href="<?php echo get_permalink($id); ?>"><h2 class="section-title"><?php echo the_category(); ?></h2></a>
  <?php dynamic_sidebar( 'sidebar-widgets' ); ?>
  <?php do_action( 'foundationpress_after_sidebar' ); ?>
  <div class="side-bar_navigation">
    <?php wp_nav_menu( array( 'menu' => $class ) );?>
  </div>
</aside>


