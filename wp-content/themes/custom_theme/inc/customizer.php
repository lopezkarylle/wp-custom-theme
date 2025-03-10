<?php
/**
 * Theme Customizer
 *
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function customtheme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'customtheme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'customtheme_customize_partial_blogdescription',
			)
		);
	}

	// Global Option
	$wp_customize->add_panel( 'customtheme_global_options', 
	    array(
	        'priority'       => 50,
	        'title'            => __( 'customtheme Options', 'customtheme' ),
	        'description'      => __( 'Global Modifications and Styles, Everything you Need.', 'customtheme' ),
	    ) 
	);

	// Global Style

	$wp_customize->add_section( 'customtheme_global_styles', 
	    array(
	        'title'         => __( 'Global Styles', 'customtheme' ),
	        'priority'      => 4,
	        'panel'         => 'customtheme_global_options'
	    ) 
	);

	// Site Title Color
	$wp_customize->add_setting( 'customtheme_site_title_color',
	    array(
			'default'           => '#706fd3',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_site_title_color', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_global_styles',
	        'label'       => 'Site Title Color',
			'type'		  => 'color'
	    )
	);

	// Link Color
	$wp_customize->add_setting( 'customtheme_link_color',
	    array(
			'default'           => '#800080',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_link_color', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_global_styles',
	        'label'       => 'Link Color',
			'type'		  => 'color'
	    )
	);

	// Blog Title Color
	$wp_customize->add_setting( 'customtheme_title_color',
	    array(
			'default'           => '#22416D',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_title_color', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_global_styles',
	        'label'       => 'Blog Title Color',
			'type'		  => 'color'
	    )
	);

	// Blog Details Color
	$wp_customize->add_setting( 'customtheme_desc_color',
	    array(
			'default'           => '#212529',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_desc_color', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_global_styles',
	        'label'       => 'Blog Details Color',
			'type'		  => 'color'
	    )
	);

	// Blog Author and Publish Color
	$wp_customize->add_setting( 'customtheme_pub_color',
	    array(
			'default'           => '#706fd3',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_pub_color', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_global_styles',
	        'label'       => 'Blog Publish & Author',
			'type'		  => 'color'
	    )
	);

	// Header footer Style

	$wp_customize->add_section( 'customtheme_header_footer_style', 
	    array(
	        'title'         => __( 'Header & Footer Style', 'customtheme' ),
	        'priority'      => 5,
	        'panel'         => 'customtheme_global_options'
	    ) 
	);
	// Header footer Background
	$wp_customize->add_setting( 'customtheme_header_footer_bg',
	    array(
			'default'           => '#706fd3',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_header_footer_bg', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_header_footer_style',
	        'label'       => 'Header & Footer Background',
			'type'		  => 'color'
	    )
	);

	// Header footer Color
	$wp_customize->add_setting( 'customtheme_header_footer_color',
	    array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_header_footer_color', 
	    array(
	        'priority'    => 11,
	        'section'     => 'customtheme_header_footer_style',
	        'label'       => 'Header & Footer Color',
			'type'		  => 'color'
	    )
	);

	// Widget Style

	$wp_customize->add_section( 'customtheme_widget_styles', 
	    array(
	        'title'         => __( 'Sidebar Widget Styles', 'customtheme' ),
	        'priority'      => 6,
	        'panel'         => 'customtheme_global_options'
	    ) 
	);

	// Sidebar Widget Background
	$wp_customize->add_setting( 'customtheme_widget_bg',
	    array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_widget_bg', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_widget_styles',
	        'label'       => 'Widget Background',
			'type'		  => 'color'
	    )
	);

	// Sidebar Widget Title Background
	$wp_customize->add_setting( 'customtheme_widget_title_bg',
	    array(
			'default'           => '#706fd3',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_widget_title_bg', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_widget_styles',
	        'label'       => 'Widget Title Background',
			'type'		  => 'color'
	    )
	);
	// Sidebar Widget Title Color
	$wp_customize->add_setting( 'customtheme_widget_title_color',
	    array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_widget_title_color', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_widget_styles',
	        'label'       => 'Widget Title Color',
			'type'		  => 'color'
	    )
	);

	// button Style

	$wp_customize->add_section( 'customtheme_button_styles', 
	    array(
	        'title'         => __( 'Button Styles', 'customtheme' ),
	        'priority'      => 7,
	        'panel'         => 'customtheme_global_options'
	    ) 
	);
	// Button Background
	$wp_customize->add_setting( 'customtheme_button_bg',
	    array(
			'default'           => '#706fd3',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_button_bg', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_button_styles',
	        'label'       => 'Regular Button Background',
			'type'		  => 'color'
	    )
	);

	// Button Color
	$wp_customize->add_setting( 'customtheme_button_color',
	    array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_button_color', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_button_styles',
	        'label'       => 'Regular Button Color',
			'type'		  => 'color'
	    )
	);

	// Button Hover Background
	$wp_customize->add_setting( 'customtheme_button_hover_bg',
	    array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_button_hover_bg', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_button_styles',
	        'label'       => 'Hover Button Background ',
			'type'		  => 'color'
	    )
	);

	// Button Color
	$wp_customize->add_setting( 'customtheme_button_hover_color',
	    array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_control( 'customtheme_button_hover_color', 
	    array(
	        'priority'    => 10,
	        'section'     => 'customtheme_button_styles',
	        'label'       => 'Hover Button Color',
			'type'		  => 'color'
	    )
	);


	// Top Header
	$wp_customize->add_section( 'customtheme_top_header_options', 
	    array(
	        'title'         => __( 'Top Header', 'customtheme' ),
	        'priority'      => 1,
	        'panel'         => 'customtheme_global_options'
	    ) 
	);
	// Setting for Top Header
	$wp_customize->add_setting( 'customtheme_top_head_field',
	    array(
	        'sanitize_callback' => 'sanitize_text_field',
	        'transport'         => 'refresh',
	    )
	);

	$wp_customize->add_control( 'customtheme_top_head_field', 
	    array(
	        'type'        => 'checkbox',
	        'priority'    => 10,
	        'section'     => 'customtheme_top_header_options',
	        'label'       => 'Are you want to remove top Header?',
	    )
	);


	// Contact Option
	$wp_customize->add_section( 'customtheme_contact_options', 
	    array(
	        'title'         => __( 'Contact Option', 'customtheme' ),
	        'priority'      => 2,
	        'panel'         => 'customtheme_global_options'
	    ) 
	);
	// Setting for Contact info
	$wp_customize->add_setting( 'customtheme_phone_field',
	    array(
        	'default'           => __( '+639123456780', 'customtheme' ),
	        'sanitize_callback' => 'sanitize_text_field',
	        'transport'         => 'refresh',
	    )
	);
	
	$wp_customize->add_setting( 'customtheme_email_field',
	    array(
        	'default'           => __( 'test@testmail.com', 'customtheme' ),
	        'sanitize_callback' => 'sanitize_email',
	        'transport'         => 'refresh',
	    )
	);
	
	// Control for Contact info

	$wp_customize->add_control( 'customtheme_phone_field', 
	    array(
	        'type'        => 'text',
	        'priority'    => 10,
	        'section'     => 'customtheme_contact_options',
	        'label'       => 'Phone Number',
	    )
	);
	$wp_customize->add_control( 'customtheme_email_field', 
	    array(
	        'type'        => 'text',
	        'priority'    => 20,
	        'section'     => 'customtheme_contact_options',
	        'label'       => 'Email Address',
	    )
	);


	// Social Profile Option
	$wp_customize->add_section( 'customtheme_social_options', 
	    array(
	        'title'         => __( 'Social Profile', 'customtheme' ),
	        'priority'      => 3,
	        'panel'         => 'customtheme_global_options'
	    ) 
	);

	// Setting for Social Profile
	$wp_customize->add_setting( 'customtheme_facebook_field',
	    array(
        	'default'           => __( 'https://www.facebook.com/', 'customtheme' ),
	        'sanitize_callback' => 'sanitize_url',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_setting( 'customtheme_twitter_field',
	    array(
        	'default'           => __( 'https://www.twitter.com/', 'customtheme' ),
	        'sanitize_callback' => 'sanitize_url',
	        'transport'         => 'refresh',
	    )
	);
	$wp_customize->add_setting( 'customtheme_youtube_field',
	    array(
        	'default'           => __( 'https://www.youtube.com/', 'customtheme' ),
	        'sanitize_callback' => 'sanitize_url',
	        'transport'         => 'refresh',
	    )
	);
	// Control for Social Profile
	$wp_customize->add_control( 'customtheme_facebook_field', 
	    array(
	        'type'        => 'text',
	        'priority'    => 10,
	        'section'     => 'customtheme_social_options',
	        'label'       => 'Facebook Profile',
	    )
	);
	$wp_customize->add_control( 'customtheme_twitter_field', 
	    array(
	        'type'        => 'text',
	        'priority'    => 20,
	        'section'     => 'customtheme_social_options',
	        'label'       => 'Twitter Profile',
	    )
	);
	$wp_customize->add_control( 'customtheme_youtube_field', 
	    array(
	        'type'        => 'text',
	        'priority'    => 30,
	        'section'     => 'customtheme_social_options',
	        'label'       => 'Youtube Profile',
	    )
	);

}
add_action( 'customize_register', 'customtheme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function customtheme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function customtheme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function customtheme_customize_preview_js() {
	wp_enqueue_script( 'customtheme-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), customtheme_VERSION, true );
}
add_action( 'customize_preview_init', 'customtheme_customize_preview_js' );
