<?php
/*
	Widget Name: Akvo Stats
	Description: AKVO SOW for using Custom Statistics within the page builder
	Author: Samuel Thomas, Akvo
	Author URI: 
	Widget URI: 
	Video URI: 
*/
class Akvo_Stats extends SiteOrigin_Widget {
	
	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'akvo-stats',
			// The name of the widget for display purposes.
			__('Akvo Statistics', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('AKVO SOW for using Custom Statistics within the page builder', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'title' => array(
					'type' => 'text',
					'label' => __( 'Title', 'siteorigin-widgets' )
				),
				'items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Items' , 'siteorigin-widgets' ),
					//'item_name'  => __( 'Item', 'siteorigin-widgets' ),
					'item_label' => array(
						'selector' => "[id*='items-title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields' => array(
						'icon' => array(
							'type' => 'icon',
							'label' => __( 'Select Icon', 'siteorigin-widgets' ),
							'description'	=> 'Example: fa fa-check-circle'
						),
						'fa_pro_icon' => array(
							'type' => 'text',
							'label' => __( 'Fontawesome Pro Icon', 'siteorigin-widgets' )
						),
						'title' => array(
							'type' => 'text',
							'label' => __( 'Title', 'siteorigin-widgets' )
						),
						'content' => array(
							'type' => 'tinymce',
							'label' => __( 'Content', 'siteorigin-widgets' )
						),
					)
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-stats"
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
siteorigin_widget_register('akvo-stats', __FILE__, 'Akvo_Stats');