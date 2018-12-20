<?php
/*
	Widget Name: Akvo Icon
	Description: AKVO SOW for using Fontawesome PRO Icon
	Author: Samuel Thomas, Akvo
	Author URI: 
	Widget URI: 
	Video URI: 
*/
class Akvo_Icon extends SiteOrigin_Widget {
	
	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'akvo-icon',
			// The name of the widget for display purposes.
			__('Akvo Icon', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('AKVO SOW for using Fontawesome PRO Icon', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'fa_pro_icon' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Fontawesome Pro Icon', 'siteorigin-widgets' ),
					'description'	=> 'Example: fa fa-check-circle'
				),
				'icon_color' => array(
					'type' 		=> 'color',
					'label' 	=> __( 'Choose a color', 'siteorigin-widgets' ),
					'default' 	=> '#bada55'
				),
				'icon_size' => array(
					'type' 		=> 'measurement',
					'label' 	=> __( 'Enter font size', 'siteorigin-widgets' ),
					'default' 	=> '12px',
				),
				'icon_align' => array(
					'type' => 'select',
					'prompt' => __( 'Choose allignment', 'siteorigin-widgets' ),
					'options' => array(
						'text-left' => __( 'Left Align', 'siteorigin-widgets' ),
						'text-center' => __( 'Center Align', 'siteorigin-widgets' ),
						'text-right' => __( 'Right Align', 'siteorigin-widgets' ),
					),
					'default'	=> 'text-left'
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-icon"
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
siteorigin_widget_register('akvo-icon', __FILE__, 'Akvo_Icon');