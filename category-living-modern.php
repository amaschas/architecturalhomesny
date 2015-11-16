<?php get_header(); ?>
	<div id="entry">
		<div class="title-wrapper">
			<h2 class="title-living-modern">Living Modern</h2>
		</div>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="blog-entry">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			<div class="page-nav">
				<?php echo paginate_links( array(
					'prev_text' => 'previous',
					'next_text' => 'next'
				) ); ?>
			</div>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>