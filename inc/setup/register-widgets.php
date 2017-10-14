<?php
/**
 * Register widget functions.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * Register widget area.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function fleur_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Top', 'fleur' ),
		'id'            => 'sidebar-top-widget-area',
		'description'   => __( 'Add widgets here will display it at the top of the sidebar.', 'fleur' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="c-widget__title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'fleur' ),
		'id'            => 'sidebar-widget-area',
		'description'   => __( 'Add widgets here will display it at the sidebar.', 'fleur' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="c-widget__title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar Bottom', 'fleur' ),
		'id'            => 'sidebar-bottom-widget-area',
		'description'   => __( 'Add widgets here will display it at the bottom of the sidebar.', 'fleur' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="c-widget__title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Archive sidebar', 'fleur' ),
		'id'            => 'archive-sidebar-widget-area',
		'description'   => __( 'Add widgets here will display it at the sidebar in archive page.', 'fleur' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="c-widget__title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Top', 'fleur' ),
		'id'            => 'content-top-widget-area',
		'description'   => __( 'Add widgets here will display it at the top of the content area.', 'fleur' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="c-widget__title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom', 'fleur' ),
		'id'            => 'content-bottom-widget-area',
		'description'   => __( 'Add widgets here will display it at the bottom of the content area.', 'fleur' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="c-widget__title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Top', 'fleur' ),
		'id'            => 'footer-top-widget-area',
		'description'   => __( 'Add widgets here will display it at the top of the footer.', 'fleur' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="c-widget__title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Bottom', 'fleur' ),
		'id'            => 'footer-bottom-widget-area',
		'description'   => __( 'Add widgets here will display it at the bottom of the footer.', 'fleur' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="c-widget__title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fleur_widgets_init' );
