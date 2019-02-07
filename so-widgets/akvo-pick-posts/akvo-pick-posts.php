<?php
/*
	Widget Name: Akvo Pick Individual Posts
	Description: AKVO SOW for Picking Individual Posts
	Author: Samuel Thomas, Akvo
	Author URI: 
	Widget URI: 
	Video URI: 
*/
class Akvo_Pick_Posts extends SiteOrigin_Widget {
	
	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'akvo-pick-posts',
			// The name of the widget for display purposes.
			__('Akvo Pick Posts', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('AKVO SOW for Picking Individual Posts', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'posts' => array(
					'type' 	=> 'posts',
					'label' => __( 'Posts' , 'siteorigin-widgets' ),
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-pick-posts"
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
siteorigin_widget_register('akvo-pick-posts', __FILE__, 'Akvo_Pick_Posts');