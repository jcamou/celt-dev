<?php
/*
Template Name: CELT Front Page
*/

get_header(); ?>

<div class="front-page_intro">
  <?php get_template_part( 'parts/front-page_feature-img' ); ?>
  <?php get_template_part( 'parts/front-page_quick-links' ); ?>
</div>

<?php get_template_part( 'parts/front-page_news-tip-lists' ); ?>

<?php get_footer(); ?>