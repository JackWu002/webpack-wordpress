<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Logical_Solutions
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		SLOOOOOAAAANNNN
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'logical-solutions' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'logical-solutions' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'logical-solutions' ), 'logical-solutions', '<a href="http://square205.com" rel="designer">Square 205</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
