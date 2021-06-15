<?php
/*
	Widget Name: Akvo Slider
	Description: AKVO SOW for using Bootstrap Carousel within the page builder
	Author: Samuel Thomas, Akvo
	Author URI:
	Widget URI:
	Video URI:
*/
class Akvo_Slider extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'akvo-slider',
			// The name of the widget for display purposes.
			__('Akvo Slider', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('AKVO SOW for using Bootstrap Carousel within the page builder', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'slides' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Sliders' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Slide', 'siteorigin-widgets' ),
					'fields' => array(
						'image' 	=> array(
							'type' 		=> 'media',
							'label' 	=> __( 'Choose Image', 'siteorigin-widgets' ),
							'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),
						'bg_color' => array(
							'type' 		=> 'color',
							'label' 	=> __( 'Choose a background color', 'siteorigin-widgets' ),
							'default' 	=> '#bada55'
						),
						'title' 	=> array(
							'type' => 'text',
							'label' => __( 'Title', 'siteorigin-widgets' )
						),
						'content' 	=> array(
							'type' 	=> 'textarea',
							'label' => __( 'Content', 'siteorigin-widgets' )
						),
						'hubspot_button' => array(
			 				'type' => 'tinymce',
							 'label' => __( 'HubSpot Button', 'siteorigin-widgets' ),
			 			 		'default_editor' => 'tinymce',
					 	),
						'repeat' 	=> array(
							'type' 		=> 'checkbox',
							'label' 	=> __( 'Repeat the background image', 'siteorigin-widgets' ),
							'default' 	=> false
						)
					)
				),
				'design_section' => array(
	 				'type' => 'section',
	 				'label' => __( 'Design' , 'siteorigin-widgets' ),
	 				'hide' => true,
	 				'fields' => array(
						'title_color' => array(
							'type' 		=> 'color',
							'label' 	=> __( 'Title Text Color', 'siteorigin-widgets' ),
							'default' 	=> '#03ad8c'
						),
						'title_bg_color' => array(
							'type' 		=> 'color',
							'label' 	=> __( 'Title Background Color', 'siteorigin-widgets' ),
							'default' 	=> '#ffffff'
						),
						'content_color' => array(
							'type' 		=> 'color',
							'label' 	=> __( 'Content Text Color', 'siteorigin-widgets' ),
							'default' 	=> '#ffffff'
						),
						'content_bg_color' => array(
							'type' 		=> 'color',
							'label' 	=> __( 'Content Background Color', 'siteorigin-widgets' ),
							'default' 	=> '#03ad8c'
						),
						'header_text_alignment' => array(
							'type' => 'select',
							'label' => __( 'Header Text Alignment', 'siteorigin-widgets' ),
							'default' => 'left',
							'options' => array(
								'left' 		=> __( 'Default', 'siteorigin-widgets' ),
								'center' 		=> __( 'Center', 'siteorigin-widgets' ),
							)
						),
						'desktop' => array(
	            'type' => 'section',
	            'label' => __( 'Desktop Styles' , 'siteorigin-widgets' ),
	            'hide' => true,
	            'fields' => $this->get_common_fields( 'desktop' ),
	          ),
	          'mobile' => array(
	            'type' => 'section',
	            'label' => __( 'Mobile Styles' , 'siteorigin-widgets' ),
	            'hide' => true,
	            'fields' => $this->get_common_fields( 'mobile' )
	          ),
	 				)
				),
				'bg-size' => array(
					'type' => 'select',
					'label' => __( 'Choose background image size', 'siteorigin-widgets' ),
					'default' => 'item-default',
					'options' => array(
						'item-default' 		=> __( 'Default', 'siteorigin-widgets' ),
						'item-narrow' 		=> __( 'Narrow', 'siteorigin-widgets' ),
						'item-extra-narrow' => __( 'Extra Narrow', 'siteorigin-widgets' ),
					)
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-slider"
		);
	}

	function get_common_fields( $screen ){
    $useable_units = array( 'px', 'vh' );
    return array(
      'bg_image_height'  => array(
        'type' => 'multi-measurement',
        'label' => __( 'Background Image Height','siteorigin-widgets' ),
        'autofill' => true,
        'default' => '600px',
        'measurements' => array(
          'image_height' => array(
            'units' => $useable_units,
          ),
        ),
      ),
    );
  }

	function get_template_name($instance) {
		return 'template';
	}
	function get_template_dir($instance) {
		return 'templates';
	}
    function get_style_name($instance) {
        return '';
    }
}
siteorigin_widget_register('akvo-slider', __FILE__, 'Akvo_Slider');
