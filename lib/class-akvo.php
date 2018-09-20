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
			
			/*
			 * FILTER TO UPDATE THE POST TYPES DROPDOWN IN THE NESTED FILTERS (SITE ORIGIN WIDGETS)
			 * 
			*/
			add_filter( 'akvo-nested-filters-post-types', function( $post_types ){
				
				$post_types = array();
				
				foreach( $this->admin->get_post_types() as $slug => $post_type ){
					$post_types[ $slug ] = $post_type['name'];
				}
				
				return $post_types;
			} );
			
			
			/*
			 * FILTER TO UPDATE THE TAXONOMIES DROPDOWN IN THE NESTED FILTERS (SITE ORIGIN WIDGETS)
			 * 
			*/
			add_filter( 'akvo-nested-filters-taxonomies', function( $taxonomies ){
				
				$taxonomies = array();
	
				foreach( $this->admin->get_taxonomies() as $slug => $tax ){
					$taxonomies[ $slug ] = $tax['labels']['name'];
				}
		
				return $taxonomies;
			} );
			
			
			foreach( $this->admin->get_post_types() as $slug => $post_type ){
				add_filter( 'akvo-custom-posts-'.$slug.'-item-template', function( $slug ){
					
					$template = get_template_directory()."/templates/".$slug.".php";
					
					return $template;
				});
			}
			
			
			
			
		}
		
	}
	
	global $akvo;
	$akvo = new AKVO;