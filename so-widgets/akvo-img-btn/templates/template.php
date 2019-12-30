<?php

// ASSUMING THAT THE AKVO WIDGETS PLUGIN IS ACTIVE
global $akvo_widgets_template;

$widget_id = '';
$bg_image = '';
$hover_image = '';

if( $akvo_widgets_template ){
	$widget_id = $akvo_widgets_template->getUniqueID( $instance );
}
$widget_id = "imageBtn" .  $widget_id;

$bg_image = wp_get_attachment_url( $instance['btn_image'] );
if( !( $instance['btn_image'] ) ){
	$bg_image = $instance['btn_image_fallback'];
}

$hover_image = wp_get_attachment_url( $instance['btn_hover_image'] );
if( !( $instance['btn_hover_image'] ) ){
	$hover_image = $instance['btn_hover_image_fallback'];
}

?>
<!-- Image Button -->
<div id="<?php _e( $widget_id ); ?>" class="img-btn">
	<div class="anchor-container">
		<a href='<?php _e( $instance['btn_url'] );?>'></a>
	</div>
		<div class="title-container">
			<h4 style="color: <?php _e( $instance['title_color'] );?> !important;"><?php _e( $instance['title'] );?></h4>
		</div>
</div>
<style media="screen">
	<?php _e( '#' . $widget_id . '.img-btn' );?> a{
		background-image: url(<?php _e( $bg_image )?>);
	}
	<?php if( $hover_image ):?>
	<?php _e( '#'. $widget_id );?> a[href]:hover{ background-image: url(<?php _e( $hover_image );?>); }
	<?php endif; ?>
</style>
