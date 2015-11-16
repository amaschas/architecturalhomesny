<?php get_header(); ?>
	<div id="entry">
		<div class="title-wrapper">
			<h2 class="title-living-modern">Living Modern</h2>
		</div>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="blog-entry">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>