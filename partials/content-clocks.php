<?php 
	
	global $post;
	
	$disable_clocks_flag = get_post_meta( $post->ID, 'disable_clocks', true );
	
	// CHECK IF THE CLOCKS HAS BEEN ENABLED FROM THE POST META SETTINGS
	if( ! $disable_clocks_flag ){
		echo do_shortcode("[akvo_clocks]");
	}