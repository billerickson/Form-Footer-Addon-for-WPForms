<?php
/**
 * Integrate ConvertKit and WPForms
 *
 * @package    Integrate_ConvertKit_WPForms
 * @since      1.0.0
 * @copyright  Copyright (c) 2017, Bill Erickson
 * @license    GPL-2.0+
 */

class Form_Footer_Addon_WPForms {

    /**
     * Primary Class Constructor
     *
     */
    public function __construct() {

        add_filter( 'wpforms_builder_settings_sections',	array( $this, 'settings_section' ), 20, 2 );
        add_filter( 'wpforms_form_settings_panel_content',	array( $this, 'settings_section_content' ), 20 );
		add_action( 'wpforms_display_submit_after',			array( $this, 'display_footer' ) );

    }

    /**
     * Add Settings Section
     *
     */
    function settings_section( $sections, $form_data ) {
        $sections['be_form_footer'] = __( 'Form Footer', 'form-footer-addon-wpforms' );
        return $sections;
    }


    /**
     * ConvertKit Settings Content
     *
     */
    function settings_section_content( $instance ) {
        echo '<div class="wpforms-panel-content-section wpforms-panel-content-section-be_form_footer">';
        echo '<div class="wpforms-panel-content-section-title">' . __( 'Form Footer', 'form-footer-addon-wpforms' ) . '</div>';

        wpforms_panel_field(
            'textarea',
            'settings',
            'be_form_footer',
			$instance->form_data,
            __( 'Form Footer', 'form-footer-addon-wpforms' )
        );

        echo '</div>';
    }

	/**
	 * Display Footer
	 *
	 */
	function display_footer( $form_data ) {
		if( !empty( $form_data['settings']['be_form_footer'] ) )
			echo '<div class="wpforms-footer-container">' . apply_filters( 'form_footer_addon_wpforms_content', $form_data['settings']['be_form_footer'] ) . '</div>';
	}

}
new Form_Footer_Addon_WPForms;
