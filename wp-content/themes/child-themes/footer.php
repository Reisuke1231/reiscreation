<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="footer-menu wrapper">
			<div class="menu menu1"><ul><?php dynamic_sidebar('footer1'); ?></ul></div>
			<div class="menu menu2"><ul><?php dynamic_sidebar('footer2'); ?></ul></div>
			<div class="menu menu3"><ul><?php dynamic_sidebar('footer3'); ?></ul></div>
		</div>
		<div class="site-info">
			<?php echo date('Y'); ?> &copy; Rei's Creation, LLC.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
