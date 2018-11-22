<!-- Map -->
<div class="fullwidth paddingtop paddingbottom" id="maps">
	<div class="container">
		
		<?php if( isset( $instance['title'] ) ):?>
		<h2 class="paddingbottom"><?php _e( $instance['title'] );?></h2>
		<?php endif;?>
		
		<div class="row row-eq-height">
			<div class="col col-lg-9 col-md-9 col-xs-12">
				<!-- Tab panes -->
				<div class="tab-content">
					<?php $i = 0;foreach( $instance['tabs'] as $tab ):?>
					<div class="tab-pane <?php if( !$i ){ _e('active');}?>" id="address-<?php _e( $i );?>">
						<?php echo siteorigin_panels_render( 'w-tab-'.$i, true, $tab['page_builder'] );?>
					</div>
					<?php $i++; endforeach;?>
				</div>
			</div>

			<div class="col col-lg-3 col-md-3 col-xs-12"> <!-- required for floating -->
				<!-- Nav tabs -->
				<ul class="nav nav-tabs tabs-right sideways">
					<?php $i = 0;foreach( $instance['tabs'] as $tab ):?>
					<li class="<?php if( !$i ){ _e('active');}?>">
						<a href="#address-<?php _e( $i );?>" data-toggle="tab">
							<h3><?php _e( $tab['heading'] );?></h3>
							<?php _e( $tab['address'] );?>
						</a>
					</li>
					<?php $i++; endforeach;?>
				</ul>
			</div>
		</div>

	</div>
</div>
<!-- End Map -->
