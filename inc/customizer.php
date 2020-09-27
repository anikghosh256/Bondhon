<?php
/*
* customizer config
*/

Kirki::add_config( 'bondhon_customize_options', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'bondhon_customizer', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Customize', 'bondhon' ),
    'description' => esc_html__( 'Customize this theme with your idea..', 'bondhon' ),
    'icon'        => 'dashicons-admin-generic',
) );

/*
* adding showcase edit section 
*/
Kirki::add_section( 'bondhon_showcase_edit', array(
    'title'          => esc_html__( 'Showcase', 'bondhon' ),
    'description'    => esc_html__( 'Customize showcase area.', 'bondhon' ),
    'panel'          => 'bondhon_customizer',
    'priority'       => 160,
) );
Kirki::add_field( 'bondhon_customize_options', [
    'type'        => 'toggle',
    'settings'    => 'bondhon_show_showcase',
    'label'       => esc_html__( 'Show the showcase', 'bondhon' ),
    'section'     => 'bondhon_showcase_edit',
    'default'     => '1',
    'priority'    => 9,
] );

Kirki::add_field( 'bondhon_customize_options', [
    'type'     => 'text',
    'settings' => 'bondhon_showcase_title',
    'label'    => esc_html__( 'Edit Title', 'bondhon' ),
    'section'  => 'bondhon_showcase_edit',
    'default'  => esc_html__( 'Bondhon', 'bondhon' ),
    'priority' => 10,
    'partial_refresh'    => [
        'bondhon_showcase_title' => [
            'selector'        => '.showcase_text h1',
            'render_callback' => function() {
                return get_theme_mod( 'bondhon_showcase_title' );
            },
        ],
    ],
] );

Kirki::add_field( 'bondhon_customize_options', [
    'type'     => 'textarea',
    'settings' => 'bondhon_showcase_description',
    'label'    => esc_html__( 'Edit Description', 'bondhon' ),
    'section'  => 'bondhon_showcase_edit',
    'default'  => esc_html__( 'Need a photographer to capture your moments? Then you have come to the right place. Don\'t hesitate to see our recent works.', 'bondhon' ),
    'priority' => 10,
    'partial_refresh'    => [
        'bondhon_showcase_description' => [
            'selector'        => '.showcase_text h5',
            'render_callback' => function() {
                return get_theme_mod( 'bondhon_showcase_description');
            },
        ],
    ],
] );


Kirki::add_field( 'bondhon_customize_options', [
    'type'        => 'image',
    'settings'    => 'bondhon_showcase_background_img_url',
    'label'       => esc_html__( 'Showcase Background', 'bondhon' ),
    'description' => esc_html__( 'You can change showcase background image.', 'bondhon' ),
    'section'     => 'bondhon_showcase_edit',
    'default'     => '',
] );



/*
* adding what-we-do area edit section 
*/

Kirki::add_section( 'bondhon_what_we_do_edit', array(
    'title'          => esc_html__( 'What we do', 'bondhon' ),
    'description'    => esc_html__( 'Customize what we do area.', 'bondhon' ),
    'panel'          => 'bondhon_customizer',
    'priority'       => 160,
) );

Kirki::add_field( 'bondhon_customize_options', [
    'type'        => 'toggle',
    'settings'    => 'bondhon_show_what_we_do',
    'label'       => esc_html__( 'Show the this area', 'bondhon' ),
    'section'     => 'bondhon_what_we_do_edit',
    'default'     => '1',
    'priority'    => 9,
] );

Kirki::add_field( 'bondhon_customize_options', [
    'type'     => 'text',
    'settings' => 'bondhon_what_we_do_title',
    'label'    => esc_html__( 'Edit Title', 'bondhon' ),
    'section'  => 'bondhon_what_we_do_edit',
    'default'  => esc_html__( 'What do we do', 'bondhon' ),
    'priority' => 10,
    'partial_refresh'    => [
        'bondhon_what_we_do_title' => [
            'selector'        => '.what_do_we_do h1',
            'render_callback' => function() {
                return get_theme_mod( 'bondhon_what_we_do_title' );
            },
        ],
    ],
] );

Kirki::add_field( 'bondhon_customize_options', [
    'type'     => 'editor',
    'settings' => 'bondhon_what_we_do_description',
    'label'    => esc_html__( 'Edit Description', 'bondhon' ),
    'section'  => 'bondhon_what_we_do_edit',
    'default'  => __( '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.</p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'bondhon' ),
    'priority' => 10,
    'partial_refresh'    => [
        'bondhon_what_we_do_description' => [
            'selector'        => '.details_what_do',
            'render_callback' => function() {
                return get_theme_mod( 'bondhon_what_we_do_description');
            },
        ],
    ],
] );


/*
* adding social-links area edit section 
*/
Kirki::add_section( 'bondhon_social_links_edit', array(
    'title'          => esc_html__( 'Social Links', 'bondhon' ),
    'description'    => esc_html__( 'Add your social links.', 'bondhon' ),
    'panel'          => 'bondhon_customizer',
    'priority'       => 180,
) );

Kirki::add_field( 'bondhon_customize_options', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Social Links', 'bondhon' ),
    'section'     => 'bondhon_social_links_edit',
    'priority'    => 10,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Link', 'bondhon' ),
    ],
    'button_label' => esc_html__('Add new', 'bondhon' ),
    'settings'     => 'bondhon_social_links',
    'default'      => [
        [
            'link_title' => esc_html__( 'Facebook', 'bondhon' ),
            'fa_class'  => 'fa-facebook',
            'link_url'  => 'https://facebook.com/anikghosh356',
        ],
    ],
    'fields' => [
        'link_title' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Title', 'bondhon' ),
            'default'     => '',
        ],
        'fa_class' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Fa class', 'bondhon' ),
            'default'     => '',
        ],
        'link_url'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'URL', 'bondhon' ),
            'default'     => '',
        ],
    ],
    'partial_refresh'    => [
        'bondhon_social_links' => [
            'selector'        => '.s-i-link',
            'render_callback' => function() {
                return get_theme_mod( 'bondhon_social_links');
            },
        ],
    ],
] );



/*
* adding copyright area edit section 
*/
Kirki::add_section( 'bondhon_copyright_edit', array(
    'title'          => esc_html__( 'Edit copyright', 'bondhon' ),
    'panel'          => 'bondhon_customizer',
    'priority'       => 200,
) );

Kirki::add_field( 'bondhon_customize_options', [
    'type'        => 'text',
    'settings'    => 'bondhon_copyright_text',
    'label'       => esc_html__( 'Copyright text', 'bondhon' ),
    'section'     => 'bondhon_copyright_edit',
    'default'     => 'copyright 2019 &copy; <a href="#"  >Bodhan</a>',
    'priority'    => 9,
    'partial_refresh'    => [
        'bondhon_copyright_text' => [
            'selector'        => '.copyright-area',
            'render_callback' => function() {
                return get_theme_mod( 'bondhon_copyright_text');
            },
        ],
    ],
] );

Kirki::add_field( 'bondhon_customize_options', [
    'type'        => 'text',
    'settings'    => 'bondhon_bottom_right_text',
    'label'       => esc_html__( 'Bottom right side text', 'bondhon' ),
    'section'     => 'bondhon_copyright_edit',
    'default'     => 'Template Made by <a class="" href="#" >Anik Ghosh</a>',
    'priority'    => 9,
    'partial_refresh'    => [
        'bondhon_bottom_right_text' => [
            'selector'        => '.bottom-right-side',
            'render_callback' => function() {
                return get_theme_mod( 'bondhon_bottom_right_text');
            },
        ],
    ],
] );


/*
* adding theme color config edit section 
*/

Kirki::add_section( 'bondhon_color_config_edit', array(
    'title'          => esc_html__( 'Color config', 'bondhon' ),
    'panel'          => 'bondhon_customizer',
    'priority'       => 1,
) );

Kirki::add_field( 'bondhon_customize_options', [
    'type'        => 'toggle',
    'settings'    => 'bondhon_color_config',
    'label'       => esc_html__( 'Black & white', 'bondhon' ),
    'section'     => 'bondhon_color_config_edit',
    'default'     => '0',
    'priority'    => 10,
] );