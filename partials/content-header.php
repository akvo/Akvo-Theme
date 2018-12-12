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
	
	// FOR THE USUAL MICROSTORY
	if( is_singular( array( 'microstory', 'post' ) ) && !$url ){
		$url = get_bloginfo('template_url')."/images/defaultheader.jpg";
		$bg_repeat = "1";
	}
	
	// FOR THE USUAL BLOG POST
	if( is_singular('post') ){
		
		$bg_repeat = "1";
		
		if( function_exists('get_field') && get_field( 'background_header_image' ) ){
			$url = get_field( 'background_header_image' );
		}
		
		if( class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail( 'post', 'background_header_image') ) { 
			
			global $post;
			$image_id = MultiPostThumbnails::get_post_thumbnail_id( 'post', 'background_header_image', $post->ID ); 
			if( $image_id ){
				$image_src = wp_get_attachment_image_src( $image_id, 'full' );  
					
				if( is_array( $image_src ) ){
					$url = $image_src[0];
				}
			}
			
		}
		
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