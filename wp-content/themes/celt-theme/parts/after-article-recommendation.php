<?php
/**
 * Template part for CELT article
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<?php
   $nextPage = next_page_not_post('', 'true', '');
?>

<div class="after-article-recommendation_container column small-12 large-12">
  <div class="small-12 large-6 column after-article-recommendation_back-to-top left">
    <a href="#top">Back to Top</a>
  </div>
  <div class="small-12 large-6 column after-article-recommendation_next-page right">
    <label>Continue on</label>
    <a class="after-article-recommendation_next-page-title"><?php echo $nextPage; ?></a>
  </div>
</div>