<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package blank
 */
?>

			</div><!-- #content -->
		</div>	<!-- END of main-page -->
	</div> <!-- END  of full -->

<div class="full">
	<div class="main-page">
		<footer id="colophon" class="site-footer inner" role="contentinfo">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'blank' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'blank' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'blank' ), 'blank', '<a href="http://raphaeljaybernardo.com" rel="designer">Raphael Jay Bernardo</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div> <!-- END of  main-page -->
</div>	<!-- END of full -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
