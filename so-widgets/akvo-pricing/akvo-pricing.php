<?php
/*
	Widget Name: Akvo Pricing
	Description: AKVO SOW for Pricing
	Author: Samuel Thomas, Akvo
	Author URI:
	Widget URI:
	Video URI:
*/
class Akvo_Pricing extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'akvo-pricing',
			// The name of the widget for display purposes.
			__('Akvo Pricing', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('AKVO SOW for pricing', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Content Repeater Link' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Repeater item', 'siteorigin-widgets' ),
					'fields' => array(
						'content_editor' => array(
				        'type' => 'tinymce',
				        'label' => __( 'Content', 'siteorigin-widgets' ),
				        'rows' => 10,
				        'default_editor' => 'html',
				    ),
						// 'content_desc' => array(
						// 	'type' 	=> 'builder',
						// 	'label' => __( 'Content Description', 'siteorigin-widgets' )
						// ),
						'popup_id' => array(
							'type' => 'text',
							'label' => __('Popup ID', 'siteorigin-widgets'),
							// 'default' => 'Some default text.'
						)
					)
				),
				'content_text' => array(
					'type' => 'color',
					'label' => __( 'Choose text color', 'siteorigin-widgets' ),
					'default' => '#ffffff'
				),
				// 'content_backround' => array(
        // 	'type' => 'color',
        // 	'label' => __( 'Choose background color', 'siteorigin-widgets' ),
        // 	'default' => '#404898'
    		// )
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-pricing"
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
siteorigin_widget_register('akvo-pricing', __FILE__, 'Akvo_Pricing');
