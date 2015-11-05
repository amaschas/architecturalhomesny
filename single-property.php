<?php

$property_meta = get_post_meta( $post->ID, 'property-meta' );

get_header(); ?>
	<?php if ( have_posts() ) : the_post(); ?>
	<div id="entry">
		<h2 class="title-properties">Properties</h2>
		<div id="property-description">
			<p><?php if ( ! empty( $property_meta[0]['name'] ) ) : ?>
				<?php echo esc_html( $property_meta[0]['name'] ); ?>&semi;
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['year-built'] ) ) : ?>
				<?php echo esc_html( $property_meta[0]['year-built'] ); ?>
			<?php endif; ?></p>
			<?php if ( ! empty( $property_meta[0]['architect'] ) ) : ?>
				<p><?php echo esc_html( $property_meta[0]['architect'] ); ?>, architect</p>
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['address'] ) ) : ?>
				<p><?php echo esc_html( $property_meta[0]['address'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['price'] ) ) : ?>
				<p><?php echo esc_html( $property_meta[0]['price'] ); ?></p>
			<?php endif; ?>
		</div>
		<div id="property-photo">
			<?php the_post_thumbnail( 'large-thumb' ); ?>
			<a href="#dialog" name="modal">Click to View More Photos</a>
		</div>
		<div class="textbox">
			<div class="description">
				<?php the_content(); ?>
			</div>
			<?php if ( ! empty( $property_meta[0]['listing-number'] ) ) : ?>
				<p><b>Listing Number:</b> <?php echo esc_html( $property_meta[0]['listing-number'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['status'] ) ) : ?>
				<p><b>Status:</b> <?php echo esc_html( $property_meta[0]['status'] ); ?></p>
			<?php endif; ?>
				<p><b>Listing Provided By:</b> Todd Goddard</p>
			<?php if ( ! empty( $property_meta[0]['type'] ) ) : ?>
				<p><b>Type:</b> <?php echo esc_html( $property_meta[0]['type'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['bedrooms'] ) ) : ?>
				<p><b>Bedrooms:</b> <?php echo esc_html( $property_meta[0]['bedrooms'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['bathrooms'] ) ) : ?>
				<p><b>Bathrooms:</b> <?php echo esc_html( $property_meta[0]['bathrooms'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['square-footage'] ) ) : ?>
				<p><b>Square Footage:</b> <?php echo esc_html( $property_meta[0]['square-footage'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['lot-size'] ) ) : ?>
				<p><b>Lot Size:</b> <?php echo esc_html( $property_meta[0]['lot-size'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['year-built'] ) ) : ?>
				<p><b>Year Built:</b> <?php echo esc_html( $property_meta[0]['year-built'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['parking'] ) ) : ?>
				<p><b>Parking:</b> <?php echo esc_html( $property_meta[0]['parking'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['fireplaces'] ) ) : ?>
				<p><b>Fireplaces:</b> <?php echo esc_html( $property_meta[0]['fireplaces'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $property_meta[0]['features'] ) ) : ?>
				<p><b>Features:</b> <?php echo esc_html( $property_meta[0]['features'] ); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
<?php get_footer(); ?>