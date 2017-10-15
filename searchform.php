<?php
/**
 * Template for displaying search forms.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="c-search__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $unique_id ); ?>">
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'fleur' ); ?></span>
	</label>

	<input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="c-search__field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'fleur' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />

	<button type="submit" class="c-search__submit">
		<i class="fa fa-search" aria-hidden="true"></i>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'fleur' ); ?></span>
	</button>
</form>
