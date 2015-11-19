<?php
/*
// Template Name: CELT Directory
*/
get_header(); ?>
<div class="row">
    <div class="small-12 large-8 large-push-4 columns" role="main">

        <?php do_action( 'foundationpress_before_content' ); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <header>
                    <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
                        <?php if(function_exists('bcn_display')&& !is_front_page())
                        {
                            bcn_display();
                        }?>
                    </div>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                <div class="entry-content">
                    <?php the_content(); 
                        get_profiles(get_the_ID());
                    ?>
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