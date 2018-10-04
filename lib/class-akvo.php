<?php
	
	class AKVO{
		
		var $admin;
		
		function __construct(){
			
			/*
			 * ADMIN OBJECT THAT TAKES CARE OF THE CUSTOM POST TYPES, TAXONOMIES AND THE META BOXES WITH THE META FIELDS
			*/
			$this->admin = new AKVO_ADMIN;							
			
			add_theme_support( 'post-thumbnails' );					// ADD THEME SUPPORT FOR THUMBNAILS
			
			set_post_thumbnail_size( 240, 135, true );				// SET POST THUMBNAIL SIZES 
			
			
			/* STILL FIGURING OUT */
			add_filter( 'custom_posts_microstory_class', function( $class ){
				
				global $post;
				
				$featured = get_post_meta( $post->ID, 'featured', true );
				
				if( $featured && $featured == '1' ){
					$class = 'featured';
				}
				
				return $class;
			} );
			
		}
		
	}
	
	global $akvo;
	$akvo = new AKVO;