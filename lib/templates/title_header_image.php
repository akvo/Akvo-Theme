<!-- Carousel -->
<div class="container fullwidth short-title">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner carousel-fade">
			<div class="item active <?php if( $atts['bg_repeat'] ){ _e('item-repeat'); }?>" style="background-image:url('<?php _e( $atts['bg_image'] );?>');">
				<div class="container">
					<div class="carousel-caption microstory"><h1><?php _e( $atts['title'] );?></h1></div>
				</div>
			</div><!-- End Item -->
        </div><!-- End Carousel Inner -->	
	</div>
</div>
<!-- End Carousel -->
