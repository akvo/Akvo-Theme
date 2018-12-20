<?php global $akvo_widgets_template; if( isset( $instance['slides'] ) ):?>
<!-- Carousel -->
<div class="container fullwidth short-title">
    <div class="carousel slide carousel-fade" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner carousel-fade">
			<?php $i = 0;foreach( $instance['slides'] as $slide ):?>
			
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
				
				$item_style = "";
				if( isset( $slide['image'] ) && $slide['image'] ){
					$item_style .= "background-image:url('".wp_get_attachment_url( $slide['image'] )."');";
				}
				if( isset( $slide['bg_color'] ) && $slide['bg_color'] ){
					$item_style .= "background-color:".$slide['bg_color'].";";
				}
				
			
			?>
			
			<div class="<?php _e( $item_class );?>" style="<?php _e( $item_style );?>">
				<div class="container">
					<div class="carousel-caption microstory">
						<?php if( isset( $slide['title'] ) && $slide['title'] ):?><h1><?php _e( $slide['title'] );?></h1><?php endif;?>
						<?php if( isset( $slide['content'] ) && $slide['content'] ):?>
						<br>
						<h2><?php _e( $slide['content'] );?></h2>
						<?php endif;?>
					</div>
				</div>
			</div><!-- End Item -->
			<?php $i++;endforeach;?>
        </div><!-- End Carousel Inner -->	
	</div>
</div>
<!-- End Carousel -->
<?php endif; ?>

	
