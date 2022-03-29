<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'social_media_expert_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'social-media-expert' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'social-media-expert' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'social-media-expert' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'social_media_expert_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'social-media-expert' ),
	) );

	// POST SECTION

	Kirki::add_section( 'social_media_expert_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'social-media-expert' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'social-media-expert' ),
	    'panel'          => 'social_media_expert_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_post_heading',
		'section'     => 'social_media_expert_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'social-media-expert' ),
		'section'     => 'social_media_expert_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'social-media-expert' ),
		'section'     => 'social_media_expert_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'social_media_expert_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'social-media-expert' ),
		'section'     => 'social_media_expert_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'social_media_expert_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'social-media-expert' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'social-media-expert' ),
	    'panel'          => 'social_media_expert_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_phone_number_heading',
		'section'     => 'social_media_expert_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'social_media_expert_header_phone_number',
		'section'  => 'social_media_expert_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'social_media_expert_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_email_address_heading',
		'section'     => 'social_media_expert_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'social_media_expert_header_email_address',
		'section'  => 'social_media_expert_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_button',
		'section'     => 'social_media_expert_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Analysis Button', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,	
	] );	

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Button Text', 'social-media-expert' ),
		'settings' => 'social_media_expert_header_button_text',
		'section'  => 'social_media_expert_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'Button URL', 'social-media-expert' ),
		'settings' => 'social_media_expert_header_button_url',
		'section'  => 'social_media_expert_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_search',
		'section'     => 'social_media_expert_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_search_box_enable',
		'section'     => 'social_media_expert_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_socail_link',
		'section'     => 'social_media_expert_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'social_media_expert_section_header',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'social-media-expert' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'social-media-expert' ),
		'settings'     => 'social_media_expert_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'social-media-expert' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'social-media-expert' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'social-media-expert' ),
				'description' => esc_html__( 'Add the social icon url here.', 'social-media-expert' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 10
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'social_media_expert_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'social-media-expert' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'social-media-expert' ),
        'panel'          => 'social_media_expert_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_heading',
		'section'     => 'social_media_expert_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_slider_heading',
		'section'     => 'social_media_expert_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'social_media_expert_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'social_media_expert_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'social-media-expert' ),
		'priority'    => 10,
		'choices'     => social_media_expert_get_categories_select(),
	] );

	//OUR SERVICES SECTION

	Kirki::add_section( 'social_media_expert_services_section', array(
	    'title'          => esc_html__( 'Our Services Settings', 'social-media-expert' ),
	    'description'    => esc_html__( 'Here you can add different type of services.', 'social-media-expert' ),
	    'panel'          => 'social_media_expert_panel_id',
	    'priority'       => 160,
	) );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_heading',
		'section'     => 'social_media_expert_services_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Services',  'social-media-expert' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_services_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'social-media-expert' ),
		'section'     => 'social_media_expert_services_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'social-media-expert' ),
			'off' => esc_html__( 'Disable',  'social-media-expert' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_services_heading',
		'section'     => 'social_media_expert_services_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Services', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( '1st Heading', 'social-media-expert' ),
		'settings' => 'social_media_expert_serives_first_heading',
		'section'  => 'social_media_expert_services_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( '2nd Heading', 'social-media-expert' ),
		'settings' => 'social_media_expert_serives_second_heading',
		'section'  => 'social_media_expert_services_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'social_media_expert_serives_number',
		'label'       => esc_html__( 'Number of services to show', 'social-media-expert' ),
		'section'     => 'social_media_expert_services_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'social_media_expert_serives_category',
		'label'       => esc_html__( 'Select the category to show services', 'social-media-expert' ),
		'section'     => 'social_media_expert_services_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'social-media-expert' ),
		'priority'    => 10,
		'choices'     => social_media_expert_get_categories_select(),
	] );
    
	// FOOTER SECTION

	Kirki::add_section( 'social_media_expert_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'social-media-expert' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'social-media-expert' ),
        'panel'          => 'social_media_expert_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_footer_text_heading',
		'section'     => 'social_media_expert_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'social_media_expert_footer_text',
		'section'  => 'social_media_expert_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_footer_enable_heading',
		'section'     => 'social_media_expert_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'social-media-expert' ),
		'section'     => 'social_media_expert_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );
}