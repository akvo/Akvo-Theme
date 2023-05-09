<?php
/*
	Widget Name: Akvo Hubspot blog and Webinars
	Description: AKVO Hubspot blog and Webinars SOW
	Author: Samuel Thomas, Akvo
	Author URI:
	Widget URI:
	Video URI:
*/
class Akvo_Hubspot_Blog_Webinars extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'akvo-hubspot-blog-webinars',
			// The name of the widget for display purposes.
			__('Akvo Hubspot blog and Webinars', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __( 'AKVO Hubspot blog and Webinars SOW', 'siteorigin-widgets' ),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'title' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Title', 'siteorigin-widgets' ),
					'default' 	=> '',
				),
				'items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Post List Repeater' , 'siteorigin-widgets' ),
					'item_label' => array(
						'selector' => "[id*='post_title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields' => array(
						'featured_image' => array(
							'type' 		=> 'media',
							'label' 	=> __( 'Choose Featured Image', 'siteorigin-widgets' ),
							'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),
						'post_label' => array(
							'type' => 'text',
							'label' => __( 'Post Label', 'siteorigin-widgets' ),
							'default' => ''
						),
						'post_title' => array(
							'type' => 'text',
							'label' => __( 'Post Title', 'siteorigin-widgets' ),
							'default' => ''
						),
						'post_url' => array(
							'type' 			=> 'text',
							'label' 		=> __( 'Post URL', 'siteorigin-widgets' ),
							'default' 	=> '',
						),
					)
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-hubspot-blog-webinars"
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
siteorigin_widget_register('akvo-hubspot-blog-webinars', __FILE__, 'Akvo_Hubspot_Blog_Webinars');
