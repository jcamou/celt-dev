<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

/* Get the Page Slug to Use as a Body Class, this will only return a value on pages! */
$class = '';
/* is it a page */
if( is_page() ) { 
  global $post;
        /* Get an array of Ancestors and Parents if they exist */
  $parents = get_post_ancestors( $post->ID );
        /* Get the top Level page->ID count base 1, array base 0 so -1 */ 
  $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
  /* Get the parent and set the $class with the page slug (post_name) */
        $parent = get_post( $id );
  $class = get_the_title($id);
}
?>
<aside id="sidebar" class="small-12 large-3 columns large-pull-8 nav_side-bar left">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<a href="<?php echo get_permalink($id); ?>"><h2 class="section-title"><?php echo $class; ?></h2></a>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
  <div class="side-bar_navigation">
    <?php wp_nav_menu( array( 'menu' => $class ) );?>
  </div>
</aside>


