<?php
$query_string = strip_tags($_GET['s']);
$total_results = $wp_query->found_posts;
if (have_posts()):
?>
<h1><?php echo $total_results ?> result(s) found for query '<?php echo $query_string; ?>'</h1>
<hr class="sep">
<?php
while(have_posts()):
the_post();
?>
<div class="post">
            <h2><a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php the_title(); ?></a></h2>
            <ul class="meta_links">
              <li>By <?php the_author_posts_link(); ?></li>
            </ul>
            <hr>
            <ul class="meta_links">
              <li><span class="icon icon-calender"></span> <?php the_date(); ?></li>
              <li><span class="icon icon-tag"></span> <?php the_category(','); ?></li>
              <li><span class="icon icon-comment"></span> <a href="<?php echo get_comments_link(); ?>" title="Comments"><?php comments_number(); ?></a></li>
            </ul>
            <hr class="space">
            <?php
			the_excerpt();
			?>
            <p><a href="<?php echo get_the_permalink(); ?>" class="read_more_link" title="Read more about <?php echo get_the_title(); ?>">Read More...</a></p>
            <hr class="sep">
            <hr class="space">
            <div class="clearfix"></div>
          </div>
<?php
endwhile;
else:
?>
<h1>No search result found for query '<?php echo $query_string ?>'</h1>
<p>Try searching again with a more generic query</p>
<p><?php get_search_form(); ?></p>
<?php
endif;
?>