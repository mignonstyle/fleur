<?php
/**
 * Displays page-links for paginated posts. <!--nextpage--> tags.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

if ( ! is_singular() || empty( wp_link_pages( 'echo=0' ) ) ) {
	return;
}

$prev_icon = '<i class="fa fa-angle-left" aria-hidden="true"></i>';
$next_icon = '<i class="fa fa-angle-right" aria-hidden="true"></i>';

$nav_text  = '<span class="screen-reader-text">%s</span>';

$prev_text = sprintf(
	$nav_text,
	__( 'Previous page', 'fleur' )
);

$next_text = sprintf(
	$nav_text,
	__( 'Next page', 'fleur' )
);

$translated = __( 'Page', 'fleur' );
$navi_title = '<h2 class="screen-reader-text">' . __( 'Post content navigation', 'fleur' ) . '</h2>';

$args = array(
	'before'           => '<nav class="navigation post-pagination" role="navigation">' . $navi_title . '<div class="nav-links">',
	'after'            => '</div></div>',
	'link_before'      => '<span class="post-numbers"><span class="screen-reader-text">' . $translated . ' </span>',
	'link_after'       => '</span>',
	'previouspagelink' => $prev_icon . $prev_text,
	'nextpagelink'     => $next_text . $next_icon,
);
?>

<div class="c-navigation c-post-pagination cf">
	<?php wp_link_pages( $args ); ?>
</div><!-- /.c-navigation -->
