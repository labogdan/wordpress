<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package NetZeroWWW
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'netzerowww' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'netzerowww' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php /* printf( __( 'Theme: %1$s by %2$s.', 'netzerowww' ), 'NetZeroWWW', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); */ ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>Main.init();</script>

</body>
</html>
