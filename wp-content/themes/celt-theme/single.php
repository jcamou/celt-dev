<?php
/*
Template Name: CELT Post
*/
get_header(); ?>
<div class="row">
    <div class="small-12 large-8 columns right" role="main">
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
                    <?php foundationpress_entry_meta(); ?>
                </header>
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                    
                </div>
                <footer>
                    <?php
                       $nextPage = get_next_posts_link();
                    ?>

                    <div class="after-article-recommendation_container column small-12 large-12">
                      <div class="small-12 large-6 column after-article-recommendation_back-to-top left">
                        <a href="#top">Back to Top</a>
                      </div>
                      <div class="small-12 large-6 column after-article-recommendation_next-page right">
                        <label>Continue on</label>
                        <?php previous_post_link( '%link', '%title', TRUE ); ?>

                      </div>
                    </div>
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
    <aside id="sidebar" class="small-12 large-3 columns  nav_side-bar left">
      <?php do_action( 'foundationpress_before_sidebar' ); 
        $category = get_the_category();
        $firstCategory = $category[0]->cat_name;
      ?>
      <a href="<?php echo get_permalink($id); ?>"><h2 class="section-title"><?php echo $firstCategory;?></h2></a>
    </aside>
</div>
<?php get_footer(); ?>
