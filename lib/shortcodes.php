<?php
	
	// Sample Shortcode
	add_shortcode( 'akvo_sample', function( $atts ){
		
		ob_start();
		
		include('templates/sample.php');
		
		return ob_get_clean();
		
	} );
	
	
	// how to use in the dashboard: [akvo_sample]

	add_shortcode( 'akvo_clocks', function( $atts ){
		
		ob_start();
		
		include('templates/clocks.php');
		
		return ob_get_clean();
		
	} );
	
	add_shortcode( 'akvo_logo_slider', function( $atts ){
		
		ob_start();
		
		include('templates/logo_slider.php');
		
		return ob_get_clean();
		
	} );
	
	add_shortcode( 'akvo_button', function( $atts ){
		
		ob_start();
		
		include('templates/button.php');
		
		return ob_get_clean();
		
	} );
	
	add_shortcode( 'akvo_modal_button', function( $atts ){
		
		ob_start();
		
		include('templates/button_modal.php');
		
		return ob_get_clean();
		
	} );
	
	add_shortcode( 'akvo_multistage_form', function( $atts ){
		
		ob_start();
		
		include('templates/multistage_form.php');
		
		return ob_get_clean();
		
	} );
	
	add_shortcode( 'akvo_map_tab', function( $atts ){
		
		ob_start();
		
		include('templates/map_tab.php');
		
		return ob_get_clean();
		
	} );

