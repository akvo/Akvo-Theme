<?php
/*
	Widget Name: Akvo Bullet List
	Description: AKVO Bullet List SOW
	Author: Samuel Thomas, Akvo
	Author URI:
	Widget URI:
	Video URI:
*/
class Akvo_Bullet_List extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'akvo-bullet-list',
			// The name of the widget for display purposes.
			__('Akvo Bullet List', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __( 'AKVO Bullet List SOW', 'siteorigin-widgets' ),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'bullet_items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Bullet List Repeater' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Repeater item', 'siteorigin-widgets' ),
					'fields' => array(
						'bullet_icon_class' => array(
							'type' => 'text',
							'label' => __( 'Icon Class', 'siteorigin-widgets' ),
							// 'default' => 'Some default text.'
						),
						'bullet_title' => array(
							'type' => 'text',
							'label' => __( 'Title', 'siteorigin-widgets' ),
							// 'default' => 'Some default text.'
						),
						'bullet_desc' => array(
							'type' => 'textarea',
							'label' => __( 'Description', 'siteorigin-widgets' ),
							'rows' => 10
				    ),
						'is_faded' => array(
							'type' => 'checkbox',
							'label' => __( 'Is faded?', 'siteorigin-widgets' ),
							'default' => false
						),
						// 'bullet_background' => array(
						// 	'type' => 'color',
						// 	'label' => __( 'Background Color', 'siteorigin-widgets' ),
						// 	'default' => '#dddddd'
						// ),
					)
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-bullet-list"
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
siteorigin_widget_register('akvo-bullet-list', __FILE__, 'Akvo_Bullet_List');
