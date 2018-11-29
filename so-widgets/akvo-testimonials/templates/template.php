<!-- Testimonials Section -->
<?php if( isset( $instance['testimonials'] ) ):?>
<div class="fullwidth paddingtop paddingbottom whitetext">
	<div class="container testimonials">
        <div class="row">
			<div class="col-md-12">
				<div class="carousel slide" data-ride="carousel" id="quote-carousel">
					<!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
						<?php $i = 0;foreach( $instance['testimonials'] as $testimonial ):?>
                        <div class="item <?php if( !$i ){ _e('active'); }?>">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p><?php echo $testimonial['content'];?></p>
										<small><?php echo $testimonial['name'];?></small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
						<?php $i++;endforeach;?>
					</div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
						<?php $i = 0;foreach( $instance['testimonials'] as $testimonial ): if( isset( $testimonial['image'] ) ): ?>
                        <li data-target="#quote-carousel" data-slide-to="<?php _e( $i );?>" class="<?php if( !$i ){ _e('active'); }?>">
							<img class="img-responsive " src="<?php _e( wp_get_attachment_url( $testimonial['image'] ) );?>" />
						</li>
						<?php $i++;endif;endforeach;?>
					</ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<!-- End Testimonials Section -->
