<?php
/*
Widget Name: Akvo Hubspot CTA
Description: AKVO SOW for Hubspot CTA.
Author: Samuel Thomas, Akvo
Author URI:
Widget URI:
Video URI:
*/
class Akvo_Hubspot_CTA extends SiteOrigin_Widget{

  function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
    parent::__construct(
			// The unique id for your widget.
			'akvo-hubspot-cta',
			// The name of the widget for display purposes.
			__('AKVO SOW for Hubspot CTA', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('AKVO SOW for Hubspot CTA.'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
        'embed_code' => array(
					'type' => 'tinymce',
					'label' => __( 'Embed Code', 'siteorigin-widgets' ),
					'default' => '',
					'rows' => 10,
					'default_editor' => 'tinymce'
				),
        'alignment' => array(
          'type'    => 'select',
          'label'   => __( 'Alignment', 'siteorigin-widgets' ),
          'options' => array(
            'hubspot-btn-left'   => __( 'Left', 'siteorigin-widgets' ),
            'hubspot-btn-right'  => __( 'Right', 'siteorigin-widgets' ),
            'hubspot-btn-center' => __( 'Center', 'siteorigin-widgets' ),
  				)
        ),
        'color' => array(
          'type'    => 'select',
          'label'   => __( 'Color', 'siteorigin-widgets' ),
          'options' => array(
            'hubspot-btn-white'   => __( 'White', 'siteorigin-widgets' ),
            'hubspot-btn-black'  => __( 'Black', 'siteorigin-widgets' )
  				)
        ),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/akvo-hubspot-cta"
		);
	}

  function get_template_name($instance){
    return 'template';
  }
  function get_template_dir($instance) {
    return 'templates';
  }
  function get_style_name($instance){
    return '';
    }
}

siteorigin_widget_register('akvo-hubspot-cta',__FILE__,'Akvo_Hubspot_CTA');
?>
