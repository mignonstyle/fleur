<?php
/**
 * Custom template tags for this theme.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * Entry meta date time.
 */
if ( ! function_exists( 'fleur_entry_meta_date' ) ) :
function fleur_entry_meta_date() {
	$time_string = '<time class="c-entry__date c-published c-updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="c-entry__date c-published" datetime="%1$s">%2$s</time><time class="c-updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		get_the_date( DATE_W3C ),
		get_the_date(),
		get_the_modified_date( DATE_W3C ),
		get_the_modified_date()
	);

	// Wrap the time string in a link, and preface it with 'Posted on'.
	$time_date = sprintf(
		__( '<span class="screen-reader-text">Posted on</span> %s', 'fleur' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	// Allow tags.
	$date_param = array(
		'span' => array(
			'class'    => array(),
		),
		'a'    => array(
			'href'     => array(),
			'rel'      => array(),
		),
		'time' => array(
			'class'    => array(),
			'datetime' => array(),
		),
	);

	echo '<span class="c-entry-meta__item c-entry__date-link">';
	echo '<i class="fa fa-calendar" aria-hidden="true"></i>';
	echo wp_kses( $time_date, $date_param );
	echo '</span>';
}
endif;

/**
 * Entry meta author.
 */
if ( ! function_exists( 'fleur_entry_meta_author' ) ) :
function fleur_entry_meta_author() {
	printf(
		'<span class="c-entry-meta__item c-entry__author-link">%1$s<span class="screen-reader-text">%2$s</span><span class="author vcard"><a class="url fn n" href="%3$s">%4$s</a></span></span>',
		'<i class="fa fa-user" aria-hidden="true"></i>',
		esc_html__( 'Author', 'fleur' ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		get_the_author()
	);
}
endif;

/**
 * Entry meta categorys.
 */
if ( ! function_exists( 'fleur_entry_meta_cat' ) ) :
function fleur_entry_meta_cat() {
	$categories_list = get_the_category_list( esc_html__( '&nbsp;', 'fleur' ) );

	if ( $categories_list ) {
		printf(
			'<span class="c-entry-meta__item c-entry__cat-link">%1$s<span class="screen-reader-text">%2$s</span> %3$s</span>',
			'<i class="fa fa-folder-o" aria-hidden="true"></i>',
			esc_html__( 'Categories', 'fleur' ),
			wp_kses_post( $categories_list )
		);
	}
}
endif;

/**
 * Entry meta tags.
 */
if ( ! function_exists( 'fleur_entry_meta_tags' ) ) :
function fleur_entry_meta_tags() {
	$tags_list = get_the_tag_list( '', esc_html__( '&nbsp;', 'fleur' ) );

	if ( $tags_list ) {
		printf(
			'<span class="c-entry-meta__item c-entry__tags-link">%1$s<span class="screen-reader-text">%2$s</span> %3$s</span>',
			'<i class="fa fa-tag" aria-hidden="true"></i>',
			esc_html__( 'Tags', 'fleur' ),
			wp_kses_post( $tags_list )
		);
	}
}
endif;

/**
 * Returns an accessibility-friendly link to edit a post or page.
 */
if ( ! function_exists( 'fleur_edit_link' ) ) :
function fleur_edit_link() {
	edit_post_link(
		sprintf(
			__( '%1$sEdit
			<span class="screen-reader-text">%2$s</span>', 'fleur' ),
			'<i class="fa fa-pencil" aria-hidden="true"></i>',
			get_the_title()
		),
		'<span class="c-entry-meta__item c-entry__edit-link">',
		'</span>'
	);
}
endif;

/**
 * Entry meta comments link.
 */
if ( ! function_exists( 'fleur_entry_meta_comments_link' ) ) :
function fleur_entry_meta_comments_link() {
	$id = get_the_ID();
	$title = get_the_title();
	$number = get_comments_number( $id );

	if ( ! post_password_required() && ( comments_open() || $number ) ) {
		$comment_zero = sprintf(
			__( '0<span class="screen-reader-text"> No Comments on %s</span>', 'fleur' ),
			$title
		);

		$comment_one = sprintf(
			__( '1<span class="screen-reader-text"> Comment on %s</span>', 'fleur' ),
			$title
		);

		$comment_more = _n(
			'%1$s<span class="screen-reader-text"> Comment on %2$s</span>',
			'%1$s<span class="screen-reader-text"> Comments on %2$s</span>',
			$number,
			'fleur'
		);
		$comment_more = sprintf(
			$comment_more,
			number_format_i18n( $number ),
			$title
		);

		$comment_none = sprintf(
			__( '<span class="screen-reader-text">Comments Off on %s</span>', 'fleur' ),
			$title
		);

		$comment_icon = '<i class="fa fa-comment-o" aria-hidden="true"></i>';

		echo '<span class="c-entry-meta__item c-entry__comment-link">';
		comments_popup_link(
			$comment_icon . $comment_zero,
			$comment_icon . $comment_one,
			$comment_icon . $comment_more,
			'comments-link',
			$comment_none
		);
		echo '</span>';
	}
}
endif;
