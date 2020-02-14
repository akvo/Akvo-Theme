<?php
/*
	Widget Name: Akvo Steps List
	Description: AKVO SOW for showing steps
	Author: Samuel Thomas, Akvo
	Author URI:
	Widget URI:
	Video URI:
*/
class Akvo_Steps_List extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'akvo-steps-list',
			// The name of the widget for display purposes.
			__( 'Akvo Steps List', 'siteorigin-widgets' ),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __( 'AKVO SOW for showing steps', 'siteorigin-widgets' ),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'steps_list_repeater' => array(
					'type'      => 'repeater',
					'label'     => 'Steps List Repeater',
					'item_name' =>  __( 'Add Step', 'siteorigin-widgets' ),
					'fields'    =>  array(
						'step_icon' => array(
							'type' 			=> 'text',
							'label' 		=> __( 'Fontawesome Pro Icon', 'siteorigin-widgets' ),
							'description'	=> 'Example: fa fa-check-circle'
						),
						'step_title' => array(
							'type' => 'text',
							'label' => __( 'Step Title', 'siteorigin-widgets' )
						),
						'step_content' => array(
							'type' => 'tinymce',
							'label' => __( 'Step Content', 'siteorigin-widgets' ),
							'rows' => 10,
							//'default_editor' => 'html',
						),
					)
				),
				'steps_type' => array(
					 'type' => 'select',
					 'label' => __( 'Decoration type', 'siteorigin-widgets' ),
					 'default' => 'vertical',
					 'options' => array(
							 'horizontal' => __( 'Horizontal', 'siteorigin-widgets' ),
							 'vertical' => __( 'Vertical', 'siteorigin-widgets' ),
					 )
	 		 	),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-steps-list"
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
siteorigin_widget_register('akvo-steps-list', __FILE__, 'Akvo_Steps_List');
