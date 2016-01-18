<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

$celt_logo = wp_get_attachment_image_src(513, 'full');

?>
<?php get_template_part('parts/nav_isu-top-bar'); ?>
<div class="top-bar-container contain-to-grid show-for-medium-up">
    <div class="top-bar">
        <div class="title-area">
            <a href="http://www.iastate.edu/" class="title-area_isu-logo"></a>
            <a href="<?php echo home_url();?>" class="title-area_celt-logo"></a>
        </div>
        <div class="right">
            <?php wp_nav_menu( array( 'menu' => 'Support' ) ); ?>
        </div>
    </div>
    <nav class="site-nav" data-topbar role="navigation">
        <div class="row">
            <div class="small-12 small-centered columns">
                <?php wp_nav_menu( array('menu' => 'Global' )); ?>
            </div>
        </div>
    </nav>
</div>