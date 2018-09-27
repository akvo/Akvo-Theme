<?php

	class AKVO_ADMIN{
		
		var $meta_boxes;
		var $taxonomies;
		var $post_types;
		
		function __construct(){
			
			add_action( 'init', array( $this, 'create') );			// REGISTERING POST TYPES AND TAXONOMIES
			
			$this->set_post_types();
			
			$this->set_taxonomies();
			
			$this->set_meta_boxes();
			
			/* SAVE POST - FOR SAVING META FIELDS */
			add_action( 'save_post', array( $this, 'save_meta_fields' ), 10, 2 );
			
			/* change permalinks */
			add_filter('post_type_link', function( $permalink, $post_id, $leavename ){
				
				$post = get_post( $post_id );
				
				if( $post->post_type == 'microstory' ){
					
					$rewritecode = array(
						$leavename? '' : '%postname%',
						'%post_id%',
						'%category%',
						$leavename? '' : '%pagename%',
					);
					
					$category = "akvo-hub";
					$hubs = get_the_terms( $post, 'staff_hub' );
					if( is_array( $hubs ) ){
						$category = $hubs[0]->slug;
					}
					
					$rewritereplace = array(
						$post->post_name,
						$post->ID,
						$category,
						$post->post_name,
					);
					
					$permalink = str_replace($rewritecode, $rewritereplace, $permalink);
					
				}
				
				return $permalink;
			}, 10, 3);   
			
			
		}
		
		/* SET POST TYPES */
		function set_post_types(){
			
			$this->post_types = array(
				/* FUNNEL ELEMENTS */
				'funnel'	=> array(						
					'name'			=> 'Funnels',
					'singular_name'	=> 'Funnel',
					'menu_icon' 	=> 'dashicons-format-aside',
					'has_archive' 	=> false,
					'supports'		=> array( 'title', 'author' )
				),
				/* STAFF */
				'new_staffs'	=> array(
					'name' 			=> 'Akvo Staff',
					'singular_name' => 'Akvo Staff',
					'supports' 		=> array( 'title', 'thumbnail', 'revisions'),
					'menu_icon' 	=> get_bloginfo('template_url').'/images/icons/akvoStaff_icn.png',
					'has_archive' 	=> true	
				),
				/* PARTNERS */
				'new_partners'	=> array(
					'name' 			=> 'Akvo Partner',
					'singular_name' => 'Akvo Partner',
					'supports' 		=> array( 'title', 'thumbnail', 'revisions'),
					'menu_icon' 	=> get_bloginfo('template_url').'/images/icons/akvoPartner_icn.png',
					'has_archive' 	=> true	
				),
				/* MICROSTORY */
				'microstory'	=> array(
					'name' 			=> 'Akvo Microstories',
					'singular_name' => 'Akvo Microstory',
					'supports' 		=> array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
					//'menu_icon' 	=> get_bloginfo('template_url').'/images/akvoPartner_icn.png',
					'rewrite'		=> false,
					'has_archive' 	=> true	
				),
				/* FOUNDATION MEMBERS */
				'foundation_member'	=> array(
					'name' 			=> 'Akvo Foundation Members',
					'singular_name' => 'Akvo Foundation Member',
					'supports' 		=> array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
					'menu_icon' 	=> get_bloginfo('template_url').'/images/icons/akvoStaff_icn.png',
					'has_archive' 	=> true	
				)
			);
		}
		function get_post_types(){ return $this->post_types; }
		
		/* TAXONOMIES */
		function set_taxonomies(){
			
			$this->taxonomies = array(
				'new_staffs_team'	=> array(
					'post_type'	=> 'new_staffs',
					'labels'	=> array(
						'name' 			=> 'Staff Team',
						'add_new_item' 	=> 'New Akvo team',
						'new_item_name' => 'New Akvo team'
					)
				),
				'staff_hub'		=> array(
					'post_type'	=> array( 'new_staffs', 'new_partners', 'microstory' ),
					'labels'	=> array(
						'name' 			=> 'Staff Hub',
						'add_new_item' 	=> 'Add New Hub',
						'new_item_name' => 'New Hub'
					)
				),
				'new_partners_category'	=> array(
					'post_type'	=> 'new_partners',
					'labels'	=> array(
						'name' 			=> 'Akvo Partner Category',
						'add_new_item' 	=> 'New Akvo Category',
						'new_item_name' => "New Akvo Category"
					)
				),
				'akvo_sector' 	=> array(
					'post_type'	=> array( 'microstory' ),
					'labels'	=> array(
						'name' 			=> 'Akvo Sector',
						'add_new_item' 	=> 'New Akvo Sector',
						'new_item_name' => "New Akvo Sector"
					)
				),
				'new_foundation_team' 	=> array(
					'post_type'	=> array( 'foundation_member' ),
					'labels'	=> array(
						'name' 			=> 'Akvo Foundation Group',
						'add_new_item' 	=> 'New Akvo Foundation Group',
						'new_item_name' => "New Akvo Foundation Group"
					)
				),
				'foundation_type' 	=> array(
					'post_type'	=> array( 'foundation_member' ),
					'labels'	=> array(
						'name' 			=> 'Akvo Foundation Type',
						'add_new_item' 	=> 'New Akvo Foundation Type',
						'new_item_name' => "New Akvo Foundation Type"
					)
				),
			);
		}
		
		function get_taxonomies(){ return $this->taxonomies; }
		
		function set_meta_boxes(){
			/*
			$this->meta_boxes = array(
				array(
					'title'		=> 'New Staff Details',
					'fields'	=> array(
						'staff_title'		=> 'Job Title', 
						'staff_twitter'		=> 'Twitter Link',
						'staff_linkedin'	=> 'LinkedIn Link',
						'staff_blog'		=> 'Blog Link'
					),
					'post_type'	=> 'new_staffs'
				),
				array(
					'title'		=> 'Page Settings',
					'fields'	=> array(
						'disable_header'	=> array(
							'label'		=> 'Disable Header',
							'type'		=> 'boolean',
							'default'	=> false
						)
					),
					'post_type'	=> 'page'
				)
			);
			*/
			
			$this->meta_boxes = array(
				/*
				'new_staffs'	=> array(
					'title'		=> 'New Staff Details',
					'fields'	=> array(
						'staff_title'		=> 'Job Title', 
						'staff_twitter'		=> 'Twitter Link',
						'staff_linkedin'	=> 'LinkedIn Link',
						'staff_blog'		=> 'Blog Link'
					),
					
				),
				'new_partners'	=> array(
					'title'		=> 'Partner Details',
					'fields'	=> array(
						'partners_link'		=> 'Link to a microstory or a partners page'
					)
				),
				*/
				'settings_box'	=> array(
					'title'		=> 'Page Settings',
					'fields'	=> array(
						'disable_header'	=> array(
							'label'		=> 'Hide Header Image',
							'type'		=> 'boolean',
							'default'	=> false
						),
						'disable_clocks'	=> array(
							'label'		=> 'Hide Regional Clocks',
							'type'		=> 'boolean',
							'default'	=> false
						)
					),
					'post_type'	=> 'page',
					'context'	=> 'side',
					'priority'	=> 'default'
				),
				/*
				'microstory'	=> array(
					'title'		=> 'Settings',
					'fields'	=> array(
						'featured'	=> 'Featured'
					)
				),
				'foundation_member'	=> array(
					'title'		=> 'Settings',
					'fields'	=> array(
						'member_title'		=> 'Job Title',
						'staff_twitter'		=> 'Twitter Link',
						'staff_linkedin'	=> 'LinkedIn Link',
						'staff_blog'		=> 'Blog Link'
					)
				),
				*/
			);
			
		}
		
		function get_meta_boxes(){ return $this->meta_boxes; }
		
		function create(){
			
			/* rewrite urls for microstory links */
			global $wp_rewrite;
			$microstory_structure = '/stories/%category%/%microstory%/';
			$wp_rewrite->add_rewrite_tag( "%microstory%", '([^/]+)', "microstory=" );
			$wp_rewrite->add_permastruct( 'microstory', $microstory_structure, false );
			
			/* registering post types */
			foreach( $this->get_post_types() as $slug => $post_type ){
				register_post_type( $slug,
					array(
						'labels' => array(
							'name' 			=> $post_type['name'],
							'singular_name' => $post_type['singular_name'],
							'add_new'	 	=> 'Add New Item',
							'add_new_item' 	=> 'Add New Item',
							'edit' 			=> 'Edit',
							'edit_item' 	=> 'Edit',
							'new_item' 		=> 'New',
							'view' 			=> 'View',
							'view_item' 	=> 'View',
						),
						'public' 		=> true,
						'supports' 		=> $post_type['supports'],
						'menu_icon' 	=> $post_type['menu_icon'],
						'has_archive' 	=> $post_type['has_archive'],
						'rewrite' 		=> isset( $post_type['rewrite'] ) ? $post_type['rewrite'] : array( 'slug' => $slug, 'with_front'=> false, 'feed' => true, 'pages' => true )
					)
				);
			}
			
			/* registering taxonomies */
			foreach( $this->get_taxonomies() as $slug => $tax ){
				register_taxonomy(
					$slug,
					$tax['post_type'],
					array(
						'labels' 		=> $tax['labels'],
						'show_ui' 		=> true,
						'show_tagcloud' => false,
						'hierarchical' 	=> true,
						'query_var' 	=> true,
						'rewrite' 		=> array('slug' => $slug )
					)
				);
			}
			
			/* META BOXES */
			add_action( 'admin_init', function(){
				
				foreach( $this->get_meta_boxes() as $slug => $metabox ){
					
					$metabox['context'] = $metabox['context'] ? $metabox['context'] :  'normal';
					
					$metabox['priority'] = $metabox['priority'] ? $metabox['priority'] :  'default';
					
					/* ADD META BOX */
					add_meta_box( $slug, $metabox[ 'title' ], array( $this, 'meta_box' ), $metabox['post_type'], $metabox['context'], $metabox['priority']);
				}
			} );
			
		}
		
		/* META BOXES */
		function meta_box( $post, $metabox ) {
			
			// GET THE METABOX ID, IF NOT THEN RETURN
			if( !is_array( $metabox ) || !isset( $metabox['id'] ) ){ return; }
			$slug = $metabox['id'];
			
			// GET THE REGISTERED META BOX FIELDS 
			$metaboxes = $this->get_meta_boxes();
			if( !is_array( $metaboxes ) || !isset( $metaboxes[ $slug ] ) ){ return ;}
			$fields = $metaboxes[ $slug ][ 'fields' ];
			
			_e('<table>');
			
			// ITERATING THROUGH EACH FIELD
			foreach( $fields as $slug => $field ){
				
				// GETTING VALUE FROM THE DB
				$value = esc_html( get_post_meta( $post->ID, $slug, true ) );
				
				// CHECKING IF THE FIELDS IS AN ARRAY OR NEEDS TO INVOKE THE LEGACY CODE
				if( is_array( $field ) && isset( $field[ 'type' ] ) ){
					$template_file = false;
					switch( $field[ 'type' ] ){
						case 'boolean':
							$template_file = "metafield_boolean.php";
							break;
					}
					
					if( $template_file ){
						include "templates/".$template_file;	
					}
					
				}
				else{
					// LEGACY CODE ONLY APPICABLE FOR TEXT FIELDS
					$label = $field;
					include "templates/metafield_text.php";
				}
			}
			_e('</table>');
		}
		
		/* SAVE META BOXES */
		function save_meta_fields( $post_id, $post ){
			
			$metaboxes = $this->get_meta_boxes();
			
			foreach( $metaboxes as $metabox ){
				
				$flag = false;
				
				// CHECK IF THIS METABOX IS VALID FOR THE CURRENT SCREEN
				if( isset( $metabox['post_type'] ) ){
					if( ( is_array( $metabox['post_type'] ) && in_array( $metabox['post_type'], $post->post_type ) ) || 
						( $metabox['post_type'] == $post->post_type ) ){
						$flag = true;
					}
				} 
				
				if( $flag ){
					
					$fields = $metabox['fields'];
					
					foreach( $fields as $slug => $field ){									/* ITERATE THROUGH THE FIELDS */
					
						if ( isset( $_POST[ $slug ] ) ) {
							update_post_meta( $post_id, $slug, $_POST[ $slug ] );			/* Store data in post meta table if present in post data */
						}
						
						if( !isset( $_POST[ $slug ] ) && is_array( $field ) && isset( $field['type'] ) && $field['type'] == 'boolean' ){
							delete_post_meta( $post_id, $slug );
						}
					}	
				}
				
			}
			
		}
		
		
	}