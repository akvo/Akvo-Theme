<?php
/*
	Widget Name: Akvo Dropdown Content
	Description: AKVO SOW for dropdown content
	Author: Samuel Thomas, Akvo
	Author URI:
	Widget URI:
	Video URI:
*/
class Akvo_Dropdown_Content extends SiteOrigin_Widget {

	function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'akvo-content',
			// The name of the widget for display purposes.
			__('Akvo Dropdown Content', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('AKVO SOW for dropdown content', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Content Repeater' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Repeater item', 'siteorigin-widgets' ),
					'fields' => array(
						'content_editor' => array(
				        'type' => 'tinymce',
				        'label' => __( 'Content', 'siteorigin-widgets' ),
				        'rows' => 10,
				        'default_editor' => 'html',
				    ),
						'content_desc' => array(
							'type' 	=> 'builder',
							'label' => __( 'Content Description', 'siteorigin-widgets' )
						),
					)
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-content"
		);
	}
	function assets(){
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'showPopup', get_stylesheet_directory_uri().'/so-widgets/akvo-content/assets/content.js', array( 'jquery' ), time(), true );
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
siteorigin_widget_register('akvo-content', __FILE__, 'Akvo_Dropdown_Content');
