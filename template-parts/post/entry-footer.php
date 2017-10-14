<?php
/**
 * The meta information for the tags and comments.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

?>

<?php if ( is_single() ) : ?>
	<footer class="c-entry__footer">
		<ul class="c-entry-footer__lists">
			<li class="c-entry-footer__list"><?php fleur_entry_meta_tags(); ?></li>
			<li class="c-entry-footer__list"><?php fleur_edit_link(); ?></li>
		</ul><!-- /.c-entry-footer__lists -->
	</footer><!-- /.c-entry__footer -->
<?php endif; ?>
