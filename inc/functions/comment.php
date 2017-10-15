<?php
/**
 * Comment callback functions.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * Display comments format.
 */
if ( ! function_exists( 'fleur_theme_comment' ) ) :
function fleur_theme_comments( $comment, $args, $depth ) {
?>
	<li <?php comment_class( 'c-comment' ); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="c-comment__inner cf">
			<div class="c-comment__author vcard">
				<?php echo get_avatar( $comment, '50' ); ?>
			</div>

			<div class="c-comment__body">
				<?php if ( 0 == $comment->comment_approved ) : ?>
					<p class="c-comment__awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'fleur' ); ?></p>
				<?php endif; ?>

				<div class="c-comment__meta">
					<span class="c-comment__author"><?php
						$author = sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() );

						$author = sprintf(
							__( '%s <span class="c-says">says:</span>', 'fleur' ),
							$author
						);

						echo wp_kses_post( $author );
					?></span>

					<span class="c-comment__date">
						<time datetime="<?php the_time( 'c' ); ?>" pubdate="pubdate"><?php
							$date_time = sprintf(
								__( '%1$s at %2$s', 'fleur' ),
								get_comment_date(),
								get_comment_time()
							);

							echo wp_kses_post( $date_time );
						?></time>
					</span>

					<?php edit_comment_link( __( 'Edit', 'fleur' ), '<span class="c-comments__edit c-comment__edit">', '</span>' ); ?>
				</div><!-- /.c-comment__meta -->

				<div class="c-comment__content">
					<?php comment_text(); ?>
				</div><!-- /.c-comment__content -->

				<?php
				$reply_args = array_merge( $args, array(
					'reply_text' => __( 'Reply', 'fleur' ),
					'depth'      => $depth,
					'max_depth'  => $args['max_depth'],
				) );

				if ( ! empty( get_comment_reply_link( $reply_args ) ) ) : ?>
					<div class="c-comment__reply">
						<?php comment_reply_link( $reply_args ); ?>
					</div>
				<?php endif; ?>
			</div><!-- /.c-comment__body -->

		</article><!-- /#comment-## .c-comment__inner -->
<?php
}
endif;

/**
 * Display pings format.
 */
if ( ! function_exists( 'fleur_theme_pings' ) ) :
function fleur_theme_pings( $comment, $args, $depth ) {
?>
	<li <?php comment_class( 'c-pingback' ); ?>>
		<article id="pingback-<?php comment_ID(); ?>" class="c-pingback__inner cf">
			<p><span class="c-pinback__author"><?php comment_author_link(); ?></span>
			<?php edit_comment_link( __( 'Edit', 'fleur' ), '<span class="c-comments__edit c-pingback__edit">', '</span>' ); ?></p>
		</article><!-- /#pingback-## .c-pingback__inner -->
<?php
}
endif;

/**
 * Display a message when the comment is closed.
 */
if ( ! function_exists( 'fleur_comment_closed' ) ) :
function fleur_comment_closed() {
?>
	<div class="c-comments__close cf">
		<p class="c-no-comments"><?php esc_html_e( 'Comments are closed.', 'fleur' ); ?></p>
	</div>
<?php
}
endif;

/**
 * Move the comment text field to the bottom.
 * WordPress 4.4 or later.
 */
function fleur_comment_form_fields( $fields ) {
	$comment_field = $fields['comment'];

	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}
add_filter( 'comment_form_fields', 'fleur_comment_form_fields' );
