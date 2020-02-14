<?php
$list_type = '';
if( $instance['steps_type'] == 'vertical' ){
	$list_type = $instance['steps_type'];
}
?>
<div class="steps-list-wrapper <?php _e( $list_type );?>">
	<?php foreach ( $instance['steps_list_repeater'] as $value ):?>
  	<div class="step-body">
			<div class="step-icon">
				<i class="<?php _e( $value['step_icon'] );?>"></i>
			</div>
			<div class="step-content">
				<h5 class="title"><?php _e( $value['step_title'] );?></h5>
				<p><?php _e( $value['step_content'] );?></p>
			</div>
    </div>
  <?php endforeach; ?>
</div>
