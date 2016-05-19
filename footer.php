<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package faux-cale
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'faux-cale' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'faux-cale' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'faux-cale' ), 'faux-cale', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<!--Masonry init-->
<script>
jQuery( document ).ready( function( $ ) {
    $( '#grid-container' ).masonry( { itemSelector: '.brick', columnWidth: 270, gutter: 10} );
} );
</script>

<?php wp_footer(); ?>

</body>
</html>
