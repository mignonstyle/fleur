<?php
/**
 * Displays the comments paginate links.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

if ( 1 >= get_comment_pages_count() || ( ! get_option( 'page_comments' ) ) ) {
	return;
}

$prev_icon = '<i class="fa fa-angle-left" aria-hidden="true"></i>';
$next_icon = '<i class="fa fa-angle-right" aria-hidden="true"></i>';

$nav_text  = '<span class="screen-reader-text">%s</span>';

$prev_text = sprintf(
	$nav_text,
	__( 'Previous', 'fleur' )
);

$next_text = sprintf(
	$nav_text,
	__( 'Next', 'fleur' )
);

$args = array(
	'prev_text' => $prev_icon . $prev_text,
	'next_text' => $next_text . $next_icon,
	'type'      => 'plain',
);
?>

<div class="c-navigation c-comments-pagination cf">
	<?php the_comments_pagination( $args ); ?>
</div><!-- /.c-navigation -->
