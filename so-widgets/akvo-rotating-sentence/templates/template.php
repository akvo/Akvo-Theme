<!-- ROTATING SENTENCE -->
<?php $instance['container_id'] = 'rotating-'.substr( md5( json_encode( $instance ) ), 0, 8 );?>
<?php if( isset( $instance['phrase'] ) ):?>
<h2 id="<?php _e( $instance['container_id'] );?>" data-behaviour='akvo-rotating' data-words='<?php echo wp_json_encode( $instance['items'] );?>'>
	<?php _e( $instance['phrase'] );?><span style="margin-left:8px;"></span>
</h2>
<?php endif;?>
<!-- END ROTATING SENTENCE -->
