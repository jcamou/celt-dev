<?php
/*
// Template Name: CELT Directory Profiles
*/
get_header(); ?>
<div class="row">
    <div class="small-12 large-8 large-push-4 columns" role="main">

        <?php do_action( 'foundationpress_before_content' ); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?> top">
                <header class="directory-profile_header">
                    <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
                        <?php if(function_exists('bcn_display')&& !is_front_page())
                        {
                            bcn_display();
                        }?>
                    </div>

                    <?php 
                      $profile_title = get_field("directory-profile_title");
                      $profile_email = get_field('directory-profile_email');
                      $profile_telephone = get_field('directory-profile_telephone');
                      $profile_office = get_field('directory-profile_office');
                      $profile_image = get_field('directory-profile_picture');
                      $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    ?>

                    <?php if( $profile_image ) { ?>
                      <div class="directory-profile_picture">
                        <?php echo wp_get_attachment_image( $profile_image, $size ); ?>
                      </div>
                    <?php } ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>

                    <div class="directory-list_profile-title"><?php echo $profile_title; ?></div>
                    <a href="mailto:<?php echo $profile_email; ?>"><?php echo $profile_email; ?></a>
                    <div class="directory-list_profile-telephone"><?php echo $profile_telephone; ?></div>
                </header>
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php get_template_part('parts/article_extra-material'); ?>
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