<?php get_header(); ?>
	<div class="page-content">
		<div class="title-wrapper">
			<h2 class="title-links"><?php the_title(); ?></h2>
		</div>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_post_thumbnail( 'full', array( 'class' => 'links-photo' ) ); ?>
				<div id="links-box">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>