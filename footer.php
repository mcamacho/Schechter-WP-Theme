<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				get_sidebar( 'footer' );
			?>
	</footer><!-- #colophon -->
	<div style="clear:left"></div>
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>