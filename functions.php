<?php

define( 'AKVO_VERSION', '1.4.2' );

	$inc_files = array(
		'lib/class-akvo-admin.php',
		'lib/class-akvo.php',
		'lib/shortcodes.php',
		'lib/shortcodes/class-akvo-shortcode.php',
		'lib/wp-bootstrap-navwalker.php',
		'lib/multiple-post-thumbnails/multi-post-thumbnails.php'
	);

	foreach( $inc_files as $inc_file ){
		include( $inc_file );
	}

	// Define additional "post thumbnails". Relies on MultiPostThumbnails to work
	if (class_exists('MultiPostThumbnails')) {
		new MultiPostThumbnails(array(
			'label' 		=> 'Post Header Image',
			'id' 				=> 'background_header_image',
			'post_type' => 'post'
			)
		);
		new MultiPostThumbnails(array(
			'label' 	=> 'Secondary Featured Image',
			'id' 		=> 'background_header_image',
			'post_type' => 'advert'
			)
		);
	}

	function akvo_universal_color_pallet() {
	?>
    <script>
        jQuery(document).ready(function($){
			if( $.wp ){
				$.wp.wpColorPicker.prototype.options = {
					palettes: ['#000000', '#f2f2f2','#ffffff', '#EA5547','#03AD8C', '#404898', '#E04D95']
				};
			}
		});
    </script>
	<?php
	}
	add_action('admin_print_footer_scripts', 'akvo_universal_color_pallet');
	add_action('customize_controls_print_footer_scripts', 'akvo_universal_color_pallet');

	/* GRAVITY FORMS FIX */
	/*add_filter( 'gform_confirmation_anchor', '__return_true' );*/
	//add_filter("gform_confirmation_anchor", create_function("","return true;"));
	add_filter( 'gform_confirmation_anchor', function( $args ){ return true; } );



	/* HIDE ADMIN BAR FROM THE FRONTEND */
	add_filter('show_admin_bar', '__return_false');


	/* ADD SOW FROM THE THEME */
	add_action('siteorigin_widgets_widget_folders', function( $folders ){
		$folders[] = get_template_directory() . '/so-widgets/';
		return $folders;
	});

	add_filter( 'akvo-sow-button-widget-types', function( $button_types ){
		$button_types['buttonblack'] = 'Button Black';
		$button_types['buttonwhite'] = 'Button White';
		return $button_types;
	});

	// Enqueue assets
	add_action( 'wp_enqueue_scripts', function(){

		$settings = array(
			'template_url'	=> get_template_directory_uri()
		);

		wp_deregister_script('jquery');
		//wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.11.1.min.js', array(), null, true);
		//wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
		wp_enqueue_script( 'jquery', get_template_directory_uri() .'/js/jquery-bootstrap.js', array(), AKVO_VERSION, true );

		// Why/Where are we using this?
		//wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js', array('jquery'), null, true);

		wp_enqueue_script( 'akvo-script', get_template_directory_uri() .'/js/akvo_scripts.js', array( 'jquery' ), AKVO_VERSION, true);

		wp_localize_script( 'akvo-script', 'settings', $settings );

		// clocks for every region
		//wp_enqueue_script( 'clock', get_template_directory_uri() .'/js/jClocksGMT.js', array('jquery'), null, true);
		//wp_enqueue_script( 'rotate', get_template_directory_uri() .'/js/jquery.rotate.js', array('jquery'), null, true);
		wp_enqueue_script( 'akvo-combined', get_template_directory_uri() .'/js/combined.js', array( 'jquery' ), null, true );
		//wp_enqueue_script('easing-min', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('jquery'), null, true);

		// Why/Where are we using this?
		//	wp_enqueue_script('bxslider', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.js', array('jquery'), null, true);

		//wp_enqueue_script('easing', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/vendor/jquery.easing.1.3.js', array('jquery'), null, true);

		// for iframes
		//wp_enqueue_script('fitvids', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/vendor/jquery.fitvids.js', array('jquery'), null, true);


		wp_enqueue_script('fontawesome-pro', 'https://kit.fontawesome.com/620783314f.js', array( 'jquery-bootstrap' ), null, true);

		//Enqueue Styles
		wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, true);
		wp_enqueue_style('style', get_template_directory_uri() .'/assets/main.css', array('bootstrap'), AKVO_VERSION );
		wp_enqueue_style('style-chris', get_template_directory_uri() .'/assets/chris.css', array('bootstrap'), AKVO_VERSION );
		wp_enqueue_style('style-theme-update', get_template_directory_uri() .'/assets/theme-update.css', array('bootstrap'), AKVO_VERSION );


		// load google fonts - can be combined for later
		//wp_enqueue_style('assistant', 'https://fonts.googleapis.com/css?family=Assistant:300,400,700', null, true);
		//wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700', null, true);

		// two versions of fontawesome

		/*
		wp_enqueue_style('fontawesome', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', null, true);
		wp_enqueue_style('fontawesome-new', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', null, true);
		*/

		wp_enqueue_style('bxslider', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css', null, true);

	} );


	add_action( 'init', function(){

		// REGISTER NAV MENUS
		register_nav_menus( array(
			'header-menu' 		=> 	__( 'Header Menu' ),
			'header-menu-en' 	=> 	__( 'Header Menu For English' ),
			'header-menu-fr' 	=> 	__( 'Header Menu For French' ),
			'header-menu-es' 	=> 	__( 'Header Menu For Spannish' ),
			//'footer-menu-1' => __( 'Footer Menu 1' ),
			//'footer-menu-2' => __( 'Footer Menu 2' ),
			//'footer-menu-3' => __( 'Footer Menu 3' ),
			//'footer-menu-4' => __( 'Footer Menu 4' ),
			//'footer-menu-5' => __( 'Footer Menu 5' ),
			//'footer-menu-6' => __( 'Footer Menu 6' )
		) );
	} );

	// Register Widgets through sidebars
	add_action( 'widgets_init', function(){

		register_sidebar( array(
			'name'          => 'Pre Footer English',
			'id'            => 'prefooter-en',
			'before_widget' => '<div id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		) );

		register_sidebar( array(
			'name'          => 'Pre Footer French',
			'id'            => 'prefooter-fr',
			'before_widget' => '<div id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		) );

		register_sidebar( array(
			'name'          => 'Pre Footer Spanish',
			'id'            => 'prefooter-es',
			'before_widget' => '<div id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		) );

		register_sidebar( array(
			'name'          => 'Footer Creative Commons Text (EN)',
			'id'            => 'footer_creative_commons_text_en',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		) );

		register_sidebar( array(
			'name'          => 'Footer Creative Commons Text (FR)',
			'id'            => 'footer_creative_commons_text_fr',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		) );

		register_sidebar( array(
			'name'          => 'Footer Creative Commons Text (ES)',
			'id'            => 'footer_creative_commons_text_es',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		) );

		register_sidebar( array(
			'name'          => 'Sidebar for Search Results',
			'id'            => 'theme_sidebar',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
		) );

		register_sidebar( array(
			'name'          => 'Request Hubspot Button (EN)',
			'id'            => 'request_hubspot_en',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		) );

		register_sidebar( array(
			'name'          => 'Request Hubspot Button (FR)',
			'id'            => 'request_hubspot_fr',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		) );

		register_sidebar( array(
			'name'          => 'Request Hubspot Button (ES)',
			'id'            => 'request_hubspot_es',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		) );

		/*
		register_sidebar( array(
			'name'          => 'Video Modal',
			'id'            => 'video_modal',
			'before_widget' => '<div class="modal-content">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="lineModalLabel">',
			'after_title'   => '</h3></div><div class="modal-body">',
		) );

		register_sidebar( array(
			'name'          => 'Apply Modal',
			'id'            => 'apply_modal',
			'before_widget' => '<div class="modal-content">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="lineModalLabel">',
			'after_title'   => '</h3></div><div class="modal-body">',
		) );

		register_sidebar( array(
			'name'          => 'Newsletter Modal',
			'id'            => 'newsletter_modal',
			'before_widget' => '<div class="modal-content">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="lineModalLabel">',
			'after_title'   => '</h3></div><div class="modal-body">',
		) );
		*/
	} );

	function getUniqueID( $data ){
		return substr( md5( json_encode( $data ) ), 0, 8 );
	}

	// FUNCTION THAT HAS BEEN USED TO DEFINE SEPARATE WIDGET ID FOR EACH LANGUAGE
	function getWidgetLangID( $widget_id, $seperator = '_' ){
		if( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE ){
			$widget_id .= $seperator . ICL_LANGUAGE_CODE;
		}
		return $widget_id;
	}
