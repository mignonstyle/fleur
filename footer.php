<?php
/**
 * The template for displaying the footer
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */
?>

		</div><!-- /#content -->

		<footer id="colophon" class="l-site-footer" role="contentinfo">
			<div class="c-container">
				<?php
				// Displays footer widgets if assigned.
				get_template_part( 'template-parts/widgets/footer', 'widgets' );

				// Display social navigation.
				get_template_part( 'template-parts/navigation/menu', 'social' );

				// Displays footer site info.
				get_template_part( 'template-parts/footer/site', 'info' );

				// Back to the top of the page button.
				get_template_part( 'template-parts/footer/to', 'top' );
				?>
			</div><!-- /.c-container -->
		</footer><!-- #colophon -->

	</div><!-- /.l-site-contents -->

</div><!-- /#page -->
<?php wp_footer(); ?>

</body>
</html>
