<?php global $akvo_widgets_template; if( isset( $instance['slides'] ) ):?>
<!-- Carousel -->
<div class="container fullwidth short-title">
    <div class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<?php $i = 0;foreach( $instance['slides'] as $slide ): if( isset( $slide['image'] ) ):?>
			<div class="item <?php if( !$i ){_e('active');}?>" style="background:url('<?php _e( $akvo_widgets_template->get_image_url( $slide['image'] ) );?>') repeat;">
				<div class="container">
					<div class="carousel-caption microstory"><h1><?php _e( $slide['title'] );?></h1></div>
				</div>
			</div><!-- End Item -->
			<?php $i++;endif;endforeach;?>
        </div><!-- End Carousel Inner -->	
	</div>
</div>
<!-- End Carousel -->
<?php endif; ?>

	