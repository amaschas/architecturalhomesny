<?php get_header(); ?>
	<div id="entry">
		<h2 class="title-properties">Properties</h2>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="property-listing">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'med-thumb' ); ?></a>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
			<?php endwhile; ?>
			<?php //nypost_next_posts_link(); ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>