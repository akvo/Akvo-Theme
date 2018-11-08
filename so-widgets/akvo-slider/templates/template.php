<?php global $akvo_widgets_template; if( isset( $instance['slides'] ) ):?>
<!-- Carousel -->
<div class="container fullwidth short-title">
    <div class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner carousel-fade">
			<?php $i = 0;foreach( $instance['slides'] as $slide ): if( isset( $slide['image'] ) ):?>
			
			<?php
			
				$item_class = "item";
				
				if( isset( $instance['bg-size'] ) ){
					$item_class .= " ".$instance['bg-size'];
				}
				
				if( isset( $slide['repeat'] ) && $slide['repeat'] ){
					$item_class .= " item-repeat";
				}
				
				if( !$i ){ 
					$item_class .= " active";
				}
			
			?>
			
			<div class="<?php _e( $item_class );?>" style="background-image:url('<?php _e( $akvo_widgets_template->get_image_url( $slide['image'] ) );?>');">
				<div class="container">
					<div class="carousel-caption microstory">
						<h1><?php _e( $slide['title'] );?></h1>
						<?php if( isset( $slide['content'] ) && $slide['content'] ):?>
						<br>
						<h2><?php _e( $slide['content'] );?></h2>
						<?php endif;?>
					</div>
				</div>
			</div><!-- End Item -->
			<?php $i++;endif;endforeach;?>
        </div><!-- End Carousel Inner -->	
	</div>
</div>
<!-- End Carousel -->
<?php endif; ?>

	