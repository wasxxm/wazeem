<?php
get_header();
?>

<div id="main_body_wrapper">
  <div id="main_body">
    <div id="main_body_inner">
      <div class="post">
      <h1>Oppss! Sorry the page you're looking for does not exist.</h1>
      <p>Try searching it using the search form.</p>
      <p><?php get_search_form(); ?></p>
      </div>
    </div>
  </div>
  <?php get_template_part('sidebar', 'left'); ?>
</div>
</div>
<div id="right_sidebar">
<?php get_template_part('sidebar', 'right'); ?>
<?php 
get_footer();
?>
