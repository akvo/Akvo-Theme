<?php
/*
	Widget Name: Akvo Image Button
	Description: AKVO Image Button
	Author: Samuel Thomas, Akvo
	Author URI:
	Widget URI:
	Video URI:
*/
class Akvo_Image_Button extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'akvo-img-btn',
			// The name of the widget for display purposes.
			__('Akvo Image Button', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('AKVO Image Button SOW', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'btn_image' => array(
        	'type' => 'media',
        	'label' => __( 'Choose a button image', 'siteorigin-widgets' ),
        	'choose' => __( 'Choose image', 'siteorigin-widgets' ),
        	'update' => __( 'Set image', 'siteorigin-widgets' ),
        	'library' => 'image',
        	'fallback' => true
    		),
				'btn_hover_image' => array(
        	'type' => 'media',
        	'label' => __( 'Choose a button hover image', 'siteorigin-widgets' ),
        	'choose' => __( 'Choose image', 'siteorigin-widgets' ),
        	'update' => __( 'Set image', 'siteorigin-widgets' ),
        	'library' => 'image',
        	'fallback' => true
    		),
				'btn_url' => array(
					'type' => 'link',
					'label' => __( 'URL', 'siteorigin-widgets' ),
				),
				'title' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Title', 'siteorigin-widgets' ),
				),
				'title_color' => array(
					'type' => 'color',
					'label' => __( 'Choose title color', 'siteorigin-widgets' ),
					'default' => '#404898'
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-img-btn"
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
siteorigin_widget_register( 'akvo-img-btn', __FILE__, 'Akvo_Image_Button' );
