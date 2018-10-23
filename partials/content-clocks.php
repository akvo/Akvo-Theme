<?php 
	
	global $post;
	
	$disable_clocks_flag = get_post_meta( $post->ID, 'disable_clocks', true );
	
	// CHECK IF THE CLOCKS HAS BEEN ENABLED FROM THE POST META SETTINGS
	if( ! $disable_clocks_flag ){
		
		$clocks_title = get_post_meta( $post->ID, 'clocks_title', true );;
		
		if( !$clocks_title ){
			$clocks_title = 'Looking for one of our other offices?';
		}
		
		echo do_shortcode("[akvo_clocks title='".$clocks_title."']");
	}