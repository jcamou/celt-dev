<?php
/*
Template Name: CELT Events
*/
get_header(); ?>
<div class="row">
    <div class="small-12 large-8 large-push-4 columns" role="main">

        <?php do_action( 'foundationpress_before_content' ); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <header>
                    <?php 

                        $image = get_field('section_image');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)

                        if( $image ) {

                            echo wp_get_attachment_image( $image, $size );

                        }
                    ?>
                </header>
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                <div class="entry-content celt-events">
                    <?php the_content(); ?>
                </div>
                <footer>
                    <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
                    <p><?php the_tags(); ?></p>
                </footer>
                <?php do_action( 'foundationpress_page_before_comments' ); ?>
                <?php comments_template(); ?>
                <?php do_action( 'foundationpress_page_after_comments' ); ?>
            </article>
        <?php endwhile;?>

        <?php do_action( 'foundationpress_after_content' ); ?>

    </div>
    <?php get_sidebar( 'left' ); ?>
</div>
<?php get_footer(); ?>