<?php
/**
 * The template for displaying comments.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<?php if ( have_comments() || comments_open() || pings_open() ) : ?>
<aside id="comments" class="c-comments">

	<?php if ( have_comments() ) : ?>
		<?php
		$avatar_size = 100;

		$comment_args = array(
			'status'  => 'approve',
			'post_id' => get_the_ID(),
			'type'    => 'comment',
			'count'   => true,
		);
		$comments_count = get_comments( $comment_args );

		$pings_args = array(
			'status'  => 'approve',
			'post_id' => get_the_ID(),
			'type'    => 'pings',
			'count'   => true,
		);
		$pings_count = get_comments( $pings_args );
		?>

		<h2 class="c-comments__title">
			<?php echo esc_html( 'Comments &amp; Trackback', 'fleur' ); ?>
		</h2>

		<div class="c-comments__tabs">
			<ul class="c-comments__tabs-list">
				<li class="c-comments__tab c-comment-tab"><?php printf( esc_html__( 'Comments (%s)', 'fleur' ), absint( $comments_count ) ); ?></li>
				<li class="c-comments__tab c-ping-tab"><?php printf( esc_html__( 'Trackbacks (%s)', 'fleur' ), absint( $pings_count ) ); ?></li>
			</ul>
		</div>

		<?php if ( $comments_count > 0 ) : ?>
			<div class="c-comments__area">
				<ol id="comment-list" class="c-comments-area__list c-comments-list">
					<?php wp_list_comments( array(
						'avatar_size' => $avatar_size,
						'style'       => 'ol',
						'type'        => 'comment',
						'callback'    => 'fleur_theme_comments',
						'short_ping'  => true,
						'reply_text'  => '<i class="fa fa-comment-o" aria-hidden="true"></i>' . __( 'Reply', 'fleur' ),
					) ); ?>
				</ol><!-- /#comment-list -->
			</div><!-- /.c-comments-area -->
		<?php endif; ?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<?php get_template_part( 'template-parts/navigation/pagination', 'comments' ); ?>
		<?php endif; ?>

		<?php if ( $pings_count > 0 ) : ?>
			<div class="c-pings__area">
				<ol id="ping-list" class="c-comments-area__list c-pings-list">
					<?php wp_list_comments( array(
						'avatar_size' => $avatar_size,
						'style'       => 'ol',
						'type'        => 'pings',
						'callback'    => 'fleur_theme_pings',
						'short_ping'  => true,
					) ); ?>
				</ol><!-- /#ping-list -->
			</div><!-- /.c-pings__area -->
		<?php endif; ?>

	<?php endif; ?>

	<?php if ( comments_open() ) : ?>
		<div id="respond" class="c-comments__form">
			<?php comment_form(); ?>
		</div>
	<?php else : ?>
		<?php fleur_comment_closed(); ?>
	<?php endif; ?>

</aside><!-- #comments -->
<?php endif; ?>
