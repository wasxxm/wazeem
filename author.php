<?php
get_header();
?>

<div id="main_body_wrapper">
  <div id="main_body">
    <div id="main_body_inner">
      <?php get_template_part('loop', 'author'); ?>
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
