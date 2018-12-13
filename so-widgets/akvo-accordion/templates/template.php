<!-- AKVO ACCORDION -->
<div class="accordion" id="accordionJobs">
	<?php $i = 0;foreach( $instance['items'] as $item ): $id = "collapse".$i;?>
	<div class="card">
		<div class="card-header" id="heading<?php _e( $i );?>">
			<h5 class="mb-0">
				<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#<?php _e( $id );?>" aria-expanded="false" aria-controls="collapseOne">
					<?php _e( $item['title'] );?><i class="far fa-chevron-down arrowdown"></i>
				</button>
			</h5>
		</div>
		<div id="<?php _e( $id );?>" class="collapse fade" aria-labelledby="heading<?php _e( $i );?>" data-parent="#accordionJobs">
			<div class="card-body">
				<?php echo siteorigin_panels_render( 'accordion-desc-'.$i, true, $item['desc'] );?>
			</div>
		</div>
	</div>
	<?php $i++;endforeach;?>
</div>
<!-- END AKVO ACCORDION -->
