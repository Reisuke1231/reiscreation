	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header wrappter">
			<div class="left">
				<div class="date"><?php the_time('Y.n.j H:i'); ?></div>
				<div class="category"><?php the_category(); ?></div>
			</div>
			<div class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'twentytwelve'), the_title_attribute('echo=0'))); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</div>
		</header><!-- .entry-header -->
	</article>
