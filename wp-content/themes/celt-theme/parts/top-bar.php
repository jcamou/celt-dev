<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<div class="top-bar-container contain-to-grid show-for-medium-up">
    <div class="top-bar">
        <div class="title-area">
            <span class="isu-nameplate">
                <img src="http://localhost:8888/Github/celt-dev/wp-content/uploads/2015/11/logo.png">
            </span>
            <!-- <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <span><?php bloginfo( 'description' ); ?></span> -->
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