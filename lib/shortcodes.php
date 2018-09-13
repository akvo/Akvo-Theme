<?php
	
	// Sample Shortcode
	add_shortcode( 'akvo_sample', function( $atts ){
		
		ob_start();
		
		include('templates/sample.php');
		
		return ob_get_clean();
		
	} );
	
	// how to use in the dashboard: [akvo_sample]