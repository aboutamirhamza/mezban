<?php


// Mezban Header Logo Section

function header_logo_section(){

    // Panel-01

    new \Kirki\Panel(
        'my_panel',
        [
            'priority'    => 10,
            'title'       => esc_html__( 'Mezban Panel', 'mezban' ),
            'description' => esc_html__( 'My Panel Description.', 'mezban' ),
        ]
    );

    // Header Section-01


    new \Kirki\Section(
        'header_logo_section',
        [
            'title'       => esc_html__( 'Header Logo Section', 'mezban' ),
            'description' => esc_html__( 'My Logo Section.', 'mezban' ),
            'panel'       => 'my_panel',
            'priority'    => 160,
        ]
    );

    // Header_Field_01

    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header Logo Image', 'mezban' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'mezban' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri().'/assets/images/img/logo.png',
        ]
    );


}
header_logo_section();

// Mezban Footer Logo Section

function footer_logo_section(){

    // Footer Section-01
    new \Kirki\Section(
        'footer_section',
        [
            'title'       => esc_html__( 'Footer Section', 'mezban' ),
            'description' => esc_html__( 'My Footer Logo Section.', 'mezban' ),
            'panel'       => 'my_panel',
            'priority'    => 160,
        ]
    );

    // Footer_Field_01

    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_logo',
            'label'       => esc_html__( 'Footer Logo Image', 'mezban' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'mezban' ),
            'section'     => 'footer_section',
            'default'     => get_template_directory_uri().'/assets/images/img/logo footer.png',
        ]
    );

    // Footer Social Media Field 01

    new \Kirki\Field\Text(
        [
            'settings' => 'facebook_id',
            'label'    => esc_html__( 'Facebook ID', 'mezban' ),
            'section'  => 'footer_section',
            'default'  => esc_html__( '#', 'mezban' ),
            'priority' => 10,
        ]
    );
    
    // Footer Social Media Field 02

    new \Kirki\Field\Text(
        [
            'settings' => 'twitter_id',
            'label'    => esc_html__( 'Twitter ID', 'mezban' ),
            'section'  => 'footer_section',
            'default'  => esc_html__( '#', 'mezban' ),
            'priority' => 10,
        ]
    );


    // Footer Social Media Field 03

    new \Kirki\Field\Text(
        [
            'settings' => 'linkedin_id',
            'label'    => esc_html__( 'Linkedin ID', 'mezban' ),
            'section'  => 'footer_section',
            'default'  => esc_html__( '#', 'mezban' ),
            'priority' => 10,
        ]
    );

    // Footer Social Media Field 04

    new \Kirki\Field\Text(
        [
            'settings' => 'vimo_id',
            'label'    => esc_html__( 'Vimo ID', 'mezban' ),
            'section'  => 'footer_section',
            'default'  => esc_html__( '#', 'mezban' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'footer_end_content',
            'label'    => esc_html__( 'Footer End Content', 'mezban' ),
            'section'  => 'footer_section',
            'default'  => esc_html__( '© 2021 Mezban Design by FoxCoders.', 'mezban' ),
            'priority' => 10,
        ]
    );


}
footer_logo_section();