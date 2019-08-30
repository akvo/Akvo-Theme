<!-- AKVO ACCORDION -->
<?php
	// ASSUMING THAT THE AKVO WIDGETS PLUGIN IS ACTIVE
	global $akvo_widgets_template;
	if( $akvo_widgets_template ){
		$widget_id = $akvo_widgets_template->getUniqueID( $instance );
	}
	else{
		$widget_id = "accordionJobs";
	}
?>
<div class="accordion" id="<?php _e( $widget_id );?>">
	<?php $i = 0;foreach( $instance['items'] as $item ):?>
	<?php
		$id = "collapse".$i;
		if( $akvo_widgets_template ){
			$id = $akvo_widgets_template->getUniqueID( $item );
		}
	?>
	<div class="card">
		<div class="card-header" id="heading<?php _e( $i );?>">
			<h5 class="mb-0">
				<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#<?php _e( $id );?>" aria-expanded="false" aria-controls="collapseOne">
					<?php _e( $item['title'] );?><i class="far fa-chevron-down arrowdown"></i>
				</button>
			</h5>
		</div>
		<div id="<?php _e( $id );?>" class="collapse fade" aria-labelledby="heading<?php _e( $i );?>" data-parent="<?php _e( "#".$widget_id );?>">
			<div class="card-body">
				<?php echo siteorigin_panels_render( 'accordion-desc-'.$i, true, $item['desc'] );?>
			</div>
		</div>
	</div>
	<?php $i++;endforeach;?>
</div>
<!-- END AKVO ACCORDION -->
