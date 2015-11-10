<div id="rightcol">
	<div id="todd-photo"></div>
	<div id="rightnav">
		<?php if ( is_archive() || is_single() && 'property' === $post->post_type ) : ?>
			<?php wp_nav_menu( array( 'menu' => 'Property Menu' ) ); ?> 
		<?php endif; ?>
	</div>
</div>
<a id="hl-logo" target="_blank" href="http://www.houlihanlawrence.com">Houlihan Lawrence</a>