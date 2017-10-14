<?php
/**
 * Displays footer site info.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

$theme_link = sprintf(
	'<a href="' . esc_url( 'http://mignonstyle.com/' ) . '" target="_blank">%s</a>',
	__( 'Mignon Style', 'fleur' )
);

$wordpress_link = sprintf(
	'<a href="' . esc_url( 'https://wordpress.org/' ) . '" target="_blank">%s</a>',
	__( 'WordPress', 'fleur' )
);

$theme_by   = sprintf( __( 'Fleur theme by %s', 'fleur' ), $theme_link );
$powered_by = sprintf( __( 'Powered by %s', 'fleur' ), $wordpress_link );
$copyright  = $theme_by . ' | ' . $powered_by;
?>

<div class="c-site-info">
	<div class="c-site-info__copyright">
		<?php echo wp_kses_post( apply_filters( 'fleur_copyright', $copyright ) ); ?>
	</div>
</div>
