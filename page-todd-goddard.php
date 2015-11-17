<?php get_header(); ?>
	<div class="page-content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="title-wrapper">
					<h2 class="title-todd-goddard"><?php the_title(); ?></h2>
				</div>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>