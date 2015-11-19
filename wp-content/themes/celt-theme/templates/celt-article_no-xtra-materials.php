<?php
/*
Template Name: CELT Article without Extra Materials
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
                    <?php the_content(); ?>
                    <?php
                        // check if the repeater field has rows of data
                        if( have_rows('celt-milestone') ):
                            ?>
                            <h2>CELT Milestones</h2>
                            <div class="about-milestones_list">
                                <?php
                                // loop through the rows of data
                                while ( have_rows('celt-milestone') ) : the_row();
                                    // display a sub field value
                                    ?>
                                    <div class="about-miletones_milestone">
                                        <h3><?php the_sub_field('celt-milestone_year');?></h3>
                                        <?php
                                        the_sub_field('celt-milestone_event');?>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                            </div>
                            <?php
                        else :
                            // no rows found
                        endif;
                    ?>
                </div>
                <footer>
                    <?php get_template_part('parts/after-article-recommendation'); ?>
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
