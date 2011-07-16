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
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
		<nav id="footer-access" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</nav><!-- #access -->
			<h1 id="register">&copy; 2011 SCHECHTER DAY SCHOOL NETWORK, ALL RIGHTS RESERVED</h1>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>