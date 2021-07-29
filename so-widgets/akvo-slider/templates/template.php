<?php $widget_id = "akvoSlider" . getUniqueID( $instance );?>

<?php if( isset( $instance['slides'] ) ):?>
<!-- Carousel -->
<div id="<?php _e( $widget_id );?>" class="container fullwidth short-title">
    <div class="carousel slide carousel-fade" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner carousel-fade">
			<?php $i = 0; foreach( $instance['slides'] as $slide ):?>

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
					<div class="carousel-caption microstory <?php if( isset( $slide['hubspot_button'] ) && !empty( $slide['hubspot_button'] ) ){ _e('new-version');}?>">
						<?php if( isset( $slide['title'] ) && $slide['title'] ):?><h1><?php _e( $slide['title'] );?></h1><?php endif;?>
						<?php if( isset( $slide['content'] ) && $slide['content'] ):?>
						<br>
						<h2><?php _e( $slide['content'] );?></h2>
            <?php if( !empty( $slide['hubspot_button'] ) ):?>
            <div class="hubspot-btn">
              <?php _e( $slide['hubspot_button'] );?>
            </div>
            <?php endif;?>
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

<style>
  <?php _e( "#" . $widget_id );?> .carousel-caption.new-version h1{
    color: <?php _e( $instance['design_section']['title_color'] );?>;
    background-color:  <?php _e( $instance['design_section']['title_bg_color'] );?>;
  }
  <?php _e( "#" . $widget_id );?> .carousel-caption.new-version h2{
    color: <?php _e( $instance['design_section']['content_color'] );?>;
    background-color:  <?php _e( $instance['design_section']['content_bg_color'] );?>;
  }

  /* Scss styles */
  <?php _e( "#" . $widget_id );?> .carousel-caption.microstory.new-version{ bottom: auto !important; }
  <?php _e( "#" . $widget_id );?> .carousel .carousel-caption.new-version{
    top: 25%;
    width: 100%;
    text-align: <?php _e( $instance['design_section']['header_text_alignment'] );?>;
    left: 0;
    padding: 10px !important;
  }
  <?php _e( "#" . $widget_id );?> .carousel-caption.new-version h1{ font-size: 5rem; line-height: 75px; }
  <?php _e( "#" . $widget_id );?> .carousel-caption.new-version h2{ font-size: 22px; }

  <?php _e( "#" . $widget_id );?> .carousel-inner, <?php _e( "#" . $widget_id );?> .carousel-inner .item{
   height: <?php echo( $instance['bg-size'] == "item-narrow" ? "450px" :
     ( $instance['bg-size'] == "item-extra-narrow" ? "250px" : $instance['design_section']['mobile']['bg_image_height'] )
   ); ?> !important;

 }

  /* Scss styles */
  @media( min-width: 960px ){
    <?php _e( "#" . $widget_id );?> .carousel-caption.new-version{ top: 35%; }
    <?php _e( "#" . $widget_id );?> .carousel .carousel-caption.new-version{ left: 50%; transform: translateX(-50%); }
    <?php _e( "#" . $widget_id );?> .carousel-inner, <?php _e( "#" . $widget_id );?> .carousel-inner .item{
       height: <?php echo( $instance['bg-size'] == "item-narrow" ? "450px" :
         ( $instance['bg-size'] == "item-extra-narrow" ? "250px" : $instance['design_section']['desktop']['bg_image_height'] )
       ); ?> !important;
    }

  }
</style>
