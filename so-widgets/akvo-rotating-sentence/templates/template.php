<!-- ROTATING SENTENCE -->

<?php
	$instance['container_id'] = 'rotating-'.substr( md5( json_encode( $instance ) ), 0, 8 );
	
	$instance['interval_delay'] = 2.5;
	
	//$instance['interval_delay'] = ( isset( $instance['items'] ) && is_array( $instance['items'] ) ) ? 0.5 * count( $instance['items'] ) : 0;
	
	$instance['total_delay'] = ( isset( $instance['items'] ) && is_array( $instance['items'] ) ) ? $instance['interval_delay'] * count( $instance['items'] ) : 0;
	
	
?>


<?php if( isset( $instance['phrase'] ) ):?>
<h2 id="<?php _e( $instance['container_id'] );?>"><?php _e( $instance['phrase'] );?>
	<div class="nofade"><?php if( isset( $instance['items'] ) ):?></div>
    <div class="fadeIn">
		<?php foreach( $instance['items'] as $word ):?>
		<span><?php _e( $word['word'] );?></span>
		<?php endforeach;?>
    </div>
	<?php endif;?>
</h2>
<style>
	#<?php _e( $instance['container_id'] );?> .fadeIn span{
		animation: fadeEffect <?php _e( $instance['total_delay'] );?>s linear infinite 0s;
		-ms-animation: fadeEffect <?php _e( $instance['total_delay'] );?>s linear infinite 0s;
		-webkit-animation: fadeEffect <?php _e( $instance['total_delay'] );?>s linear infinite 0s;
	}
	
	<?php for( $i=2; $i<=count( $instance['items'] ); $i++ ):?>
	#<?php _e( $instance['container_id'] );?> .fadeIn span:nth-child(<?php _e( $i );?>){
		animation-delay: <?php echo $instance['interval_delay'] * ($i-1);?>s;
		-ms-animation-delay: <?php echo $instance['interval_delay'] * ($i-1);?>s;
		-webkit-animation-delay: <?php echo $instance['interval_delay'] * ($i-1);?>s;
	}
	<?php endfor;?>
</style>
<?php endif;?>
<!-- END ROTATING SENTENCE -->
