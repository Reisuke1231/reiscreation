<?php
/**
 * The template for displaying Archive page.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>
<h1>ARCHIVE</h1>
<?php get_header(); ?>
	<?php do_action( 'spacious_before_body_content' ); ?>
	<div id="primary">
		<div id="content" class="clearfix">
			<header class="page-header">
				<h1 class="page-title"><?php single_cat_title(); ?></h1>
			</header>

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('content-archive'); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php get_template_part( 'navigation', 'archive' ); ?>
			<?php else : ?>
				<?php get_template_part( 'no-results', 'archive' ); ?>
			<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php spacious_sidebar_select(); ?>
	<?php do_action( 'spacious_after_body_content' ); ?>
<?php get_footer(); ?>
