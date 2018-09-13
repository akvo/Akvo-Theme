<?php
	
	add_shortcode( 'akvo_sample', function( $atts ){
		
		ob_start();
		
		include('templates/sample.php');
		
		return ob_get_clean();
		
	} );