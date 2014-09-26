<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage waZeem
 * @since waZeem 1.0
 */
?>
<!doctype html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
if (is_home())
{
   echo get_bloginfo('title');	
}
else
{
   if (is_author())
   {
	   echo 'Posts by ';   
   }
   else if (is_category())
   {
	   echo 'Posts in ';   
   }
   echo wp_title( '', false );
}
?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
</head>

<body>
<div id="main_wrapper">
  <div id="left_body">
    <header>
      <div id="logo_wrapper">
        <div id="logo_inner_wrapper"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>"></a></div>
<?php get_template_part('social', 'icons'); ?>
      </div>
      <nav id="top_menu">
         <ul>
            <li><a href="javascript:;"></a></li>
        <?php
		wp_nav_menu(
		    array(
			'menu' => 'Top Menu',
			'theme_location' => 'top_menu',
			'container' => '',
			'items_wrap' => '%3$s'
			)
		);
		
		?>
         </ul>
      </nav>
      <div class="handheld handheld-searchbox">
        <?php get_search_form(); ?>
      </div>
    </header>