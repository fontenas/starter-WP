<?php 

/**
 * Importation des feuilles de style
 */
function starter_enqueue_style() {
	wp_enqueue_style('core', 'style.css', false );
}
add_action( 'wp_enqueue_scripts', 'starter_enqueue_style' );

/**
 * Importation des scripts
 */

/**
 * Enregistrement des menus
 */
function starter_register_menus() {
	register_nav_menus(
		array(
			'main-navigation' => 'Navigation principale',
			'secondary-navigation' => 'Navigation secondaire'
		)
	);
}
add_action( 'init', 'starter_register_menus' );

/**
 * Activation des Posts-Thumbnail
 */
add_theme_support('post-thumbnail' );

/**
 * Activation des Posts-Formats
 */
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image' , 'quote', 'status', 'video', 'audio') );

/**
 * Activation du Custom Header
 */
$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

/**
 * Activation du Custom-Background
 */
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

/**
 * Activation des flux RSS
 */
add_theme_support( 'automatic-feed_links' );

/**
 * Gestion automatique de la balise <title>
 */
add_theme_support( 'title-tag' );

/**
 * Enregistrement des widgets
 */
function startr_widgets_init() {
	$args = array(
		'name'          => 'Widgets',
		'id'            => 'sidebar-1',
		'description'   => '',
		'class'         => 'widget',
		'before_widget' => '<li id="%1" class="widget %2">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	);

	register_sidebar( $args );
}
add_action('widgets_init', 'starter_widgets_init' );




 ?>