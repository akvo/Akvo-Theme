<?php

	if( !isset( $instance['show_slides'] ) ){
		$instance['show_slides'] = 6;
	}

?>

<!-- Logos -->
<div class="fullwidth">
	<div class="container-logos" style="max-width:1170px;">
		<h3 class="thin"><?php _e( $instance['title'] );?></h3>
		<section data-behaviour="logos-slick" data-items="<?php _e( $instance['show_slides'] );?>" class="customer-logos slider">
		<?php foreach( $instance['slides'] as $slide ): $logo_link = $slide['link']; ?>
			<div class="slide">
				<?php if( !empty( $logo_link ) ):?>
					<a href="<?php _e( $logo_link ); ?>" target="_blank">
						<?php echo wp_get_attachment_image( $slide['image'], 'thumbnail' );?>
				  </a>
				<?php else: ?>
					<?php echo wp_get_attachment_image( $slide['image'], 'thumbnail' );?>
					<?php /* $metadata = wp_get_attachment_metadata( $slide['image'] );
					<img width="<?php _e( $metadata['width'] );?>" height="<?php _e( $metadata['height'] );?>" src="<?php _e( wp_get_attachment_url( $slide['image'] ) );?>" />
					*/
					?>
				<?php endif; ?>
			</div>
		<?php endforeach;?>
		</section>
	</div>
</div>
<!-- End Logos -->
