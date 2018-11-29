<?php 
	
	global $post;
	
	$disable_header_flag = get_post_meta( $post->ID, 'disable_header', true );
	
	$bg_repeat = "0";
	
	
	$url = false;
	
	if( has_post_thumbnail() ){ 
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		if( is_array( $thumbnail ) ){
			$url = $thumbnail[0];
		}
	}
	
	if( is_singular('microstory') && !$url ){
		$url = get_bloginfo('template_url')."/images/defaultheader.jpg";
		$bg_repeat = "1";
	}
	
	
	
	// CHECK IF THE HEADER HAS BEEN ENABLED FROM THE POST META SETTINGS
	if( ! $disable_header_flag && $url ){
		
		$disable_header_title_flag = get_post_meta( $post->ID, 'disable_header_title', true );
		
		$header_title = '';
		
		if( !$disable_header_title_flag ){
		
			$header_title = get_post_meta( $post->ID, 'header_title', true );
			if( !$header_title ){
				$header_title = get_the_title();
			}
		}
		echo do_shortcode("[akvo_header_image title='$header_title' bg_image='$url' bg_repeat='$bg_repeat']");
	}