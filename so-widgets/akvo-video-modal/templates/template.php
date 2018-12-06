<!-- Video Modal from Image -->
<p>
	<a data-toggle="modal" data-target="#squarespaceModalVideoClean" class="videomodal2">
		<img src="<?php _e( wp_get_attachment_url( $instance['image'] ) );?>">
	</a>
</p>
<!-- End Video Modal from Image -->

<!-- video modal -->
<div class="modal fade video-modal" id="squarespaceModalVideoClean" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog video">
		<div class="modal-content">
			<div class="modal-body">
				<div class="video">
					<?php echo siteorigin_panels_render( 'w-tab', true, $instance['page_builder'] );?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end video modal -->