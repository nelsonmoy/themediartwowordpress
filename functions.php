<?php

register_nav_menus( array(
	'menu' => 'Menu superior',
));

add_theme_support( 'post-thumbnails' );
add_image_size( 'slider_thumbs', 900, 400, true );
add_image_size( 'list_articles_thumbs', 400, 200, true ); 

function quitar_version()
{
	return '';
}

add_filter('the_generator', 'quitar_version');

?>