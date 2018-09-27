<?php 
	
	global $post;
	
	$disable_header_flag = get_post_meta( $post->ID, 'disable_header', true );
	
	$url = false;
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $image_size );
	if( is_array( $thumbnail ) ){
		$url = $thumbnail[0];
	}
	
	// CHECK IF THE HEADER HAS BEEN ENABLED FROM THE POST META SETTINGS
	if( ! $disable_header_flag && $url ){
		echo do_shortcode("[akvo_header_image title='".get_the_title()."' bg_image='".$url."']");
	}