<?php
/**
 * Displays the navigation to next/previous post, when applicable.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

$prev_icon = '<i class="fa fa-angle-left" aria-hidden="true"></i>';
$next_icon = '<i class="fa fa-angle-right" aria-hidden="true"></i>';

$nav_text = '<span class="screen-reader-text">%1$s</span>';

$prev_text = sprintf(
	$nav_text,
	__( 'Previous Post', 'fleur' )
);

$next_text = sprintf(
	$nav_text,
	__( 'Next Post', 'fleur' )
);

$args = array(
	'prev_text' => $prev_icon . $prev_text . '%title',
	'next_text' => '%title' . $next_text . $next_icon,
);

$args = apply_filters( 'fleur_post_link_array', $args );
?>

<div class="c-prevnext-links c-post-navigation cf">
	<?php the_post_navigation( $args ); ?>
</div><!-- /.c-prevnext-links -->
