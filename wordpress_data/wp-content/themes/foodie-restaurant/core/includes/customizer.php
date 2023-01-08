<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'foodie_restaurant_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'foodie-restaurant' ),
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
		'settings'    => 'foodie_restaurant_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'foodie-restaurant' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'foodie_restaurant_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'foodie-restaurant' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'foodie-restaurant' ),
			'off' => esc_html__( 'Disable', 'foodie-restaurant' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'foodie_restaurant_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'foodie-restaurant' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'foodie-restaurant' ),
			'off' => esc_html__( 'Disable', 'foodie-restaurant' ),
		],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'foodie_restaurant_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'foodie-restaurant' ),
	) );

	Kirki::add_section( 'foodie_restaurant_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'foodie-restaurant' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_all_headings_typography',
		'section'     => 'foodie_restaurant_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'foodie-restaurant' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'foodie_restaurant_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'foodie-restaurant' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'foodie-restaurant' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_body_content_typography',
		'section'     => 'foodie_restaurant_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'foodie-restaurant' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'foodie_restaurant_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'foodie-restaurant' ),
		'description' => esc_attr__( 'Select the typography options for your body.',  'foodie-restaurant' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );


	// PANEL

	Kirki::add_panel( 'foodie_restaurant_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'foodie-restaurant' ),
	) );

	// Scroll Top

	Kirki::add_section( 'foodie_restaurant_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'foodie-restaurant' ),
	    'description'    => esc_html__( 'Scroll To Top', 'foodie-restaurant' ),
	    'panel'          => 'foodie_restaurant_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'foodie_restaurant_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_foodie_restaurant',
		'label'       => esc_html__( 'Menus Text Transform', 'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_section_scroll',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'foodie-restaurant' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'foodie-restaurant' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'foodie-restaurant' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'foodie-restaurant' ),

		],
	]
	);

	// POST SECTION

	Kirki::add_section( 'foodie_restaurant_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'foodie-restaurant' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'foodie-restaurant' ),
	    'panel'          => 'foodie_restaurant_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_enable_post_heading',
		'section'     => 'foodie_restaurant_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'foodie-restaurant' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'foodie_restaurant_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'foodie-restaurant' ),
			'off' => esc_html__( 'Disable', 'foodie-restaurant' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'foodie_restaurant_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'foodie-restaurant' ),
			'off' => esc_html__( 'Disable', 'foodie-restaurant' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'foodie_restaurant_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'foodie_restaurant_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'foodie-restaurant' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'foodie-restaurant' ),
	    'panel'          => 'foodie_restaurant_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_enable_button',
		'section'     => 'foodie_restaurant_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sign Up Button', 'foodie-restaurant' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'foodie-restaurant' ),
		'settings' => 'foodie_restaurant_free_delivery_text',
		'section'  => 'foodie_restaurant_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'URL', 'foodie-restaurant' ),
		'settings' => 'foodie_restaurant_free_delivery_link',
		'section'  => 'foodie_restaurant_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_enable_search',
		'section'     => 'foodie_restaurant_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'foodie-restaurant' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'foodie_restaurant_search_box_enable',
		'section'     => 'foodie_restaurant_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'foodie-restaurant' ),
			'off' => esc_html__( 'Disable', 'foodie-restaurant' ),
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'foodie_restaurant_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'foodie-restaurant' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'foodie-restaurant' ),
        'panel'          => 'foodie_restaurant_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_enable_heading',
		'section'     => 'foodie_restaurant_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'foodie-restaurant' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'foodie_restaurant_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'foodie-restaurant' ),
			'off' => esc_html__( 'Disable', 'foodie-restaurant' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'foodie_restaurant_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'foodie-restaurant' ),
			'off' => esc_html__( 'Disable', 'foodie-restaurant' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'foodie_restaurant_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'foodie-restaurant' ),
			'off' => esc_html__( 'Disable', 'foodie-restaurant' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_slider_heading',
		'section'     => 'foodie_restaurant_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'foodie-restaurant' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'foodie_restaurant_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'foodie_restaurant_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'foodie-restaurant' ),
		'priority'    => 10,
		'choices'     => foodie_restaurant_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Extra Slider Heading', 'foodie-restaurant' ),
		'settings' => 'foodie_restaurant_slider_extra_heading',
		'section'  => 'foodie_restaurant_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_header_phone_number_heading',
		'section'     => 'foodie_restaurant_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'foodie-restaurant' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'foodie_restaurant_header_phone_number',
		'section'  => 'foodie_restaurant_blog_slide_section',
		'default'  => '',
		'sanitize_callback' => 'foodie_restaurant_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_enable_email_heading',
		'section'     => 'foodie_restaurant_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'foodie-restaurant' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'foodie_restaurant_header_email',
		'section'  => 'foodie_restaurant_blog_slide_section',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_enable_location_heading',
		'section'     => 'foodie_restaurant_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Location', 'foodie-restaurant' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'foodie_restaurant_header_location',
		'section'  => 'foodie_restaurant_blog_slide_section',
		'default'  => '',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_enable_socail_link',
		'section'     => 'foodie_restaurant_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'foodie-restaurant' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'foodie_restaurant_blog_slide_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'foodie-restaurant' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'foodie-restaurant' ),
		'settings'     => 'foodie_restaurant_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'foodie-restaurant' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'foodie-restaurant' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'foodie-restaurant' ),
				'description' => esc_html__( 'Add the social icon url here.', 'foodie-restaurant' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// POPULAR FOOD SECTION

	Kirki::add_section( 'foodie_restaurant_popular_food_section', array(
	    'title'          => esc_html__( 'Popular Food Settings', 'foodie-restaurant' ),
	    'panel'          => 'foodie_restaurant_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_enable_heading',
		'section'     => 'foodie_restaurant_popular_food_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Popular Food',  'foodie-restaurant' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'foodie_restaurant_popular_food_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_popular_food_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'foodie-restaurant' ),
			'off' => esc_html__( 'Disable',  'foodie-restaurant' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'foodie_restaurant_popular_food_heading' ,
        'label'    => esc_html__( 'Heading',  'foodie-restaurant' ),
        'section'  => 'foodie_restaurant_popular_food_section',
    ] );

    kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'foodie_restaurant_popular_food_tab_number',
		'label'       => esc_html__( 'Number of post to show ',  'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_popular_food_section',
		'default'     => 4,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'foodie_restaurant_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'foodie-restaurant' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'foodie-restaurant' ),
        'panel'          => 'foodie_restaurant_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_footer_text_heading',
		'section'     => 'foodie_restaurant_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'foodie-restaurant' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'foodie_restaurant_footer_text',
		'section'  => 'foodie_restaurant_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'foodie_restaurant_footer_enable_heading',
		'section'     => 'foodie_restaurant_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'foodie-restaurant' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'foodie_restaurant_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'foodie-restaurant' ),
		'section'     => 'foodie_restaurant_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'foodie-restaurant' ),
			'off' => esc_html__( 'Disable', 'foodie-restaurant' ),
		],
	] );
}

add_action( 'customize_register', 'foodie_restaurant_customizer_settings' );
function foodie_restaurant_customizer_settings( $wp_customize ) {
	$wp_customize->add_setting('foodie_restaurant_popular_food_tab_number',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('foodie_restaurant_popular_food_tab_number',array(
		'type' => 'number',
		'label' => __('Show number of product tab','foodie-restaurant'),
		'section' => 'foodie_restaurant_popular_food_section',
	));

	$foodie_restaurant_meal_post = get_theme_mod('foodie_restaurant_popular_food_tab_number','');
    for ( $foodie_restaurant_j = 1; $foodie_restaurant_j <= $foodie_restaurant_meal_post; $foodie_restaurant_j++ ) {

		$wp_customize->add_setting('foodie_restaurant_popular_food_tabs_text'.$foodie_restaurant_j,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('foodie_restaurant_popular_food_tabs_text'.$foodie_restaurant_j,array(
			'type' => 'text',
			'label' => __('Tab Text ','foodie-restaurant').$foodie_restaurant_j,
			'section' => 'foodie_restaurant_popular_food_section',
		));

		$foodie_restaurant_args = array(
	       'type'                     => 'product',
	        'child_of'                 => 0,
	        'parent'                   => '',
	        'orderby'                  => 'term_group',
	        'order'                    => 'ASC',
	        'hide_empty'               => false,
	        'hierarchical'             => 1,
	        'number'                   => '',
	        'taxonomy'                 => 'product_cat',
	        'pad_counts'               => false
	    );
		$categories = get_categories($foodie_restaurant_args);
		$foodie_restaurant_cat_posts = array();
		$foodie_restaurant_m = 0;
		$foodie_restaurant_cat_posts[]='Select';
		foreach($categories as $category){
			if($foodie_restaurant_m==0){
				$default = $category->slug;
				$foodie_restaurant_m++;
			}
			$foodie_restaurant_cat_posts[$category->slug] = $category->name;
		}

		$wp_customize->add_setting('foodie_restaurant_popular_food_category'.$foodie_restaurant_j,array(
			'default'	=> 'select',
			'sanitize_callback' => 'foodie_restaurant_sanitize_select',
		));

		$wp_customize->add_control('foodie_restaurant_popular_food_category'.$foodie_restaurant_j,array(
			'type'    => 'select',
			'choices' => $foodie_restaurant_cat_posts,
			'label' => __('Select category to display products ','foodie-restaurant').$foodie_restaurant_j,
			'section' => 'foodie_restaurant_popular_food_section',
		));
	}
}