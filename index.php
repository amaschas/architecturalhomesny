<?php get_header(); ?>
	<div id="index-carousel">
		<?php for ( $i = 1, $i <= 13; $i++ ) : ?>
			<img src="<?php echo get_bloginfo( 'url' ) . AHNY_THEME_DIR . '/' . 'index-' . $i . '.jpg'; ?>" />
		<?php endfor; ?>
	</div>
<?php get_footer(); ?>