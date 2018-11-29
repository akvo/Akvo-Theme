<?php
	
	$process_menu_id = "process-menu";

?>
<!-- Process Section -->
<div class="paddingtop paddingbottom">
	<div class="row">
		<div class="process">
			<div class="process-row nav nav-tabs">
				<?php $i = 0; foreach( $instance['items'] as $item ):?>
				<div class="process-step">
					<button type="button" class="btn <?php if( $i ){ _e('btn-default'); } else{ _e('btn-info'); }?> btn-circle" data-toggle="tab" href="<?php _e( '#'.$process_menu_id.$i );?>"><i class="fa <?php _e( $item['fa_pro_icon'] );?> fa-3x"></i></button>
					<p><small><?php _e( $item['title'] );?></small></p>
				</div>
				<?php $i++; endforeach; ?>
			</div>
		</div>
		<div class="tab-content aligncenter">
			<?php $i = 0; foreach( $instance['items'] as $item ):?>
			<div id="<?php _e( $process_menu_id.$i );?>" class="tab-pane fade <?php if( !$i ){ _e('active in');}?>">
				<h3 class="thin"><?php _e( $item['title'] );?></h3>
				<?php _e( $item['desc'] );?>
			</div>
			<?php $i++; endforeach; ?>
		</div>
	</div>
</div>
<!-- End Process Section -->