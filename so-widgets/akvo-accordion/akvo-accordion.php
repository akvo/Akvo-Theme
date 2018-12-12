<?php
/*
	Widget Name: Akvo Accordion
	Description: AKVO SOW for Accordion
	Author: Samuel Thomas, Akvo
	Author URI: 
	Widget URI: 
	Video URI: 
*/
class Akvo_Accordion extends SiteOrigin_Widget {
	
	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'akvo-accordion',
			// The name of the widget for display purposes.
			__('Akvo Accordion', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('AKVO SOW for Accordion', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Items' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Repeater item', 'siteorigin-widgets' ),
					'fields' => array(
						'title' => array(
							'type' => 'text',
							'label' => __( 'Title', 'siteorigin-widgets' )
						),
						'desc' => array(
							'type' 	=> 'builder',
							'label' => __( 'Description', 'siteorigin-widgets' )
						),
					)
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-accordion"
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
siteorigin_widget_register('akvo-accordion', __FILE__, 'Akvo_Accordion');