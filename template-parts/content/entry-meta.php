<?php
/**
 * The meta information for the time, author and categories.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

?>

<?php if ( is_singular() ) : ?>
	<div class="c-entry__meta">
		<ul class="c-entry-meta__lists">
			<li class="c-entry-meta__list"><?php fleur_entry_meta_date(); ?></li>
			<li class="c-entry-meta__list"><?php fleur_entry_meta_author(); ?></li>
			<li class="c-entry-meta__list"><?php fleur_entry_meta_cat(); ?></li>
		</ul><!-- /.c-entry-meta__lists -->
	</div><!-- /.c-entry__meta -->
<?php endif; ?>
