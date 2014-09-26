<?php
if (have_posts()):
while(have_posts()):
the_post();
?>
<div class="post">
            <h1><?php the_title(); ?></h1>
            <ul class="meta_links">
              <li>By <?php the_author_posts_link(); ?></li>
            </ul>
            <hr>
            <ul class="meta_links">
              <li><span class="icon icon-calender"></span> <?php the_date(); ?></li>
              <?php if (!is_page()): ?>
              <li><span class="icon icon-tag"></span> <?php the_category(','); ?></li>
              <?php endif; ?>
              <li><span class="icon icon-comment"></span> <a href="<?php echo get_comments_link(); ?>"><?php comments_number(); ?></a></li>
            </ul>
            <hr class="space">
            <?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} 
			?>
            <?php
			the_content();
			?>
            <hr class="sep">
            <?php comments_template(); ?>
            <hr class="space">
            <div class="clearfix"></div>
          </div>
<?php
endwhile;
endif;
?>