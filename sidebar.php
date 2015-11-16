<div id="rightcol">
	<div id="todd-photo"></div>
	<div id="rightnav">
		<?php if ( is_archive() || is_single() && 'property' === $post->post_type || 'page' === $post->post_type && ( 'Home Evaluation Request' === $post->post_title || 'Find a Home' === $post->post_title ) ) : ?>
			<?php wp_nav_menu( array( 'menu' => 'Property Menu' ) ); ?>
		<?php elseif ( is_single() && 'post' === $post->post_type ) : ?>
			<?php
				$posts = get_posts( array(
					'posts_per_page' => 5,
					'category_name' => 'Living Modern'
				) );
				foreach ( $posts as $single_post ) :
			?>
				<a href="<?php echo esc_url( get_permalink( $single_post->ID ) ); ?>"><?php echo esc_html( $single_post->post_title ); ?></a>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
<a id="hl-logo" target="_blank" href="http://www.houlihanlawrence.com">Houlihan Lawrence</a>