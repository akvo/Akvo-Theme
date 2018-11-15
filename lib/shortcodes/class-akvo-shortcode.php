<?php
	
	/* BASE CLASS FOR SHORTCODE */
	class AKVO_SHORTCODE{
		
		var $shortcode;
		var $template;
		
		var $default_atts;
		
		function __construct( $params ){
			
			$this->shortcode = $params['slug'];
			
			$this->template = $params['template'];
			
			$this->default_atts = $params['atts'];
			
			add_shortcode( $this->shortcode, array( $this, 'main_shortcode' ), 100 );
		}
		
		function get_atts( $atts ){
			$defaults_atts = apply_filters( $this->shortcode.'_atts', $this->get_default_atts() );
			return shortcode_atts( $defaults_atts, $atts, $this->shortcode );
		}
		
		function get_default_atts(){ return $this->default_atts;}
		
		function plain_shortcode( $atts ){
			
			$atts = $this->get_atts( $atts );				/* CREATE ATTS ARRAY FROM DEFAULT AND USER PARAMETERS IN THE SHORTCODE */
			
			ob_start();
			
			include( $this->template );
			
			return ob_get_clean();
		}
		
		function unique_atts(){
			return array();
		}
		
		function get_cache_key( $atts ){
			$atts = $this->get_atts( $atts );
			
			$cache_key = $this->shortcode;
			
			$unique_atts = $this->unique_atts();
			
			foreach( $unique_atts as $unique_att ){
				$cache_key .= $atts[$unique_att];	
			}
			
			return $cache_key;
		}
		
		function get_cache( $atts ){
			$cache_key = $this->get_cache_key( $atts );
			
			// try to get value from Wordpress cache
			return get_transient( $cache_key );
		}
		
		function set_cache( $data, $atts ){
			$cache_key = $this->get_cache_key( $atts );
			// store value in cache for hours
			set_transient( $cache_key, $data, 3600 * $atts['cache'] ); 
		}
		
		function main_shortcode( $atts ){
			
			$atts = $this->get_atts( $atts );
			
			$data = false;
			
			/* CHECK IF THE DATA EXISTS IN CACHE */
			if( isset( $atts['cache'] ) && $atts['cache'] && is_numeric( $atts['cache'] ) ){
				$data = $this->get_cache( $atts ); 
			}
			
			// if no value in the cache
			if ( $data === false ) {
				
				$data = $this->plain_shortcode( $atts );
				
				if( isset( $atts['cache'] ) && $atts['cache'] ){
					$this->set_cache( $data, $atts );
				}
			}
			
			return $data;
			
		}
		
		/* PASS AN ARRAY TO CREATE ATTRIBUTES OF SHORTCODE */
		function form_shortcode( $data ){
			
        	$default_atts = $this->get_default_atts(); 				// GET DEFAULT ATTS OF THE SHORTCODE 
			
			$shortcode = '['.$this->shortcode.' ';					// SHORTCODE STRING START 
			
        	foreach( $data as $key => $val ){
        		
				/* ONLY ADD THOSE KEYS THAT ARE PART OF THE SHORTCODE */
				if( array_key_exists( $key, $default_atts ) ){
				
					$val = str_replace("[","&#91;",$val);
					$val = str_replace("]","&#93;",$val);
        			
					$shortcode .= $key.'="'.$val.'" ';				/* SHORTCODE STRING ADD ATTRIBUTES */
				}
        	}
        	$shortcode .= ']';										/* SHORTCODE STRING END */
        		
			return $shortcode;
		}
		
	}
	
	// USAGE: [akvo_header_image bg_image="" title=""]
	new AKVO_SHORTCODE( array( 
		'slug'		=> 'akvo_header_image',
		'template'	=> get_template_directory().'/lib/templates/title_header_image.php',
		'atts'		=> array(
			'bg_image'	=> get_template_directory_uri().'/images/akvocover.jpg',
			'title'		=> 'Title Goes Here',
			'bg_repeat' => 0
		)
	) );
	
	// USAGE: [akvo_clocks title=""]
	new AKVO_SHORTCODE( array( 
		'slug'		=> 'akvo_clocks',
		'template'	=> get_template_directory().'/lib/templates/clocks.php',
		'atts'		=> array(
			'title'		=> 'Looking for one of our other offices?'
		)
	) );
	
	// USAGE: [akvo_clock id='clock_americas' offset='-5.0' title='Americas' hello='Hi There' link='']
	new AKVO_SHORTCODE( array( 
		'slug'		=> 'akvo_clock',
		'template'	=> get_template_directory().'/lib/templates/clock.php',
		'atts'		=> array(
			'id'		=> 'clock',
			'offset'	=> '0',
			'title'		=> 'Title',
			'hello'		=> 'Hi',
			'link'		=> ''
		)
	) );