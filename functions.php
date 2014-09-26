<?php

add_action( 'after_setup_theme', 'wazeem_register_menu' );

function wazeem_register_menu()
{
  register_nav_menu( 'top_menu', 'Top Menu' );
  register_nav_menu( 'left_menu', 'Left Menu' );
}

add_theme_support( 'post-thumbnails' ); 

set_post_thumbnail_size( 520, 440, true );

add_image_size( 'post-default', 520, 440, true );

?>