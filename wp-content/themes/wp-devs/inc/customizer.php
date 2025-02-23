<?php

function wpdevs_customizer( $wp_customize ) {

    // 1 Localização
    $wp_customize->add_section(
        'sec_localizacao',
        array (
            'title' => __( 'Adicionar Endereço da Empresa', 'devs' ),
            'description' => __( 'Configurações do Endereço', 'devs' ), 
        )
    );

    $wp_customize->add_setting(
        'set_localizacao',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Rua: Santana de Assis', 'devs' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_localizacao',
        array(
            'label' => __( 'Informações do Endereço', 'devs' ),
            'description' => __( 'Por favor, digite o endereço aqui.', 'devs' ),
            'section' => 'sec_localizacao',
            'type' => 'text'
        )
    );

    // 1 Endereço Section
    $wp_customize->add_section(
        'sec_horario-atendimento',
        array (
            'title' => __( 'Adicionar Horário de Atendimento', 'devs' ),
            'description' => __( 'Configurações do Horário', 'devs' ), 
        )
    );

    $wp_customize->add_setting(
        'set_horario-atendimento',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Das 00h as 00h', 'devs' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_horario-atendimento',
        array(
            'label' => __( 'Informações do horário atencimento', 'devs' ),
            'description' => __( 'Por favor, digite o horário aqui.', 'devs' ),
            'section' => 'sec_horario-atendimento',
            'type' => 'text'
        )
    );

    // 1 Telefone fixo Section
    $wp_customize->add_section(
        'sec_tel-fixo',
        array (
            'title' => __( 'Adicionar telefone fixo', 'devs' ),
            'description' => __( 'Configurações do Tel. fixo', 'devs' ), 
        )
    );

    $wp_customize->add_setting(
        'set_tel-fixo',
        array(
            'type' => 'theme_mod',
            'default' => __( 'tel-fixo', 'devs' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_tel-fixo',
        array(
            'label' => __( 'Informações do tel. fixo', 'devs' ),
            'description' => __( 'Por favor, digite o tel. fixo.', 'devs' ),
            'section' => 'sec_tel-fixo',
            'type' => 'text'
        )
    );

    // 1 Whatsapp Section
    $wp_customize->add_section(
        'sec_whatsapp',
        array (
            'title' => __( 'Adicionar whatsapp', 'devs' ),
            'description' => __( 'Configurações do whatsapp', 'devs' ), 
        )
    );

    $wp_customize->add_setting(
        'set_whatsapp',
        array(
            'type' => 'theme_mod',
            'default' => __( 'whatsapp', 'devs' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_whatsapp',
        array(
            'label' => __( 'Informações do whatsapp', 'devs' ),
            'description' => __( 'Por favor, digite o whatsapp.', 'devs' ),
            'section' => 'sec_whatsapp',
            'type' => 'text'
        )
    );

    // Link whatsapp
    $wp_customize->add_setting(
        'set_whatsapp_button_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_whatsapp_button_link',
        array(
            'label' => __( 'Hero button link', 'devs' ),
            'description' => __( 'Please, type your link here', 'devs' ),
            'section' => 'sec_whatsapp',
            'type' => 'url'
        )
    );






    // 1 E-mail Section
    $wp_customize->add_section(
        'sec_email',
        array (
            'title' => __( 'Adicionar E-mail', 'devs' ),
            'description' => __( 'Configurações do email', 'devs' ), 
        )
    );

    $wp_customize->add_setting(
        'set_email',
        array(
            'type' => 'theme_mod',
            'default' => __( 'email', 'devs' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_email',
        array(
            'label' => __( 'Informações do email', 'devs' ),
            'description' => __( 'Por favor, digite o email da empresa.', 'devs' ),
            'section' => 'sec_email',
            'type' => 'text'
        )
    );

    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array (
            'title' => __( 'Copyright Settings', 'devs' ),
            'description' => __( 'Copyright Settings', 'devs' ), 
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Copyright X - All Rights Reserved', 'devs' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => __( 'Copyright Information', 'devs' ),
            'description' => __( 'Please, type your copyright here', 'devs' ),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    // 2 Hero
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __( 'Hero Section', 'devs' )
        )
    );

    // Title
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Please, add some title', 'devs' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => __( 'Hero Title', 'devs' ),
            'description' => __( 'Please, type your here title here', 'devs' ),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );  
    
    // Subtitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Please, add some subtitle', 'devs' ),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => __( 'Hero Subtitle', 'devs' ), 
            'description' => __( 'Please, type your subtitle here', 'devs' ),
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    // Button Text
    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type' => __( 'theme_mod', 'devs' ),
            'default' => __( 'Learn More', 'devs' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label' => __( 'Hero button test', 'devs' ),
            'description' => __( 'Please, type your button text here', 'devs' ),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    // Button Link
    $wp_customize->add_setting(
        'set_hero_button_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_link',
        array(
            'label' => __( 'Hero button link', 'devs' ),
            'description' => __( 'Please, type your button link here', 'devs' ),
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    // Hero Height
    $wp_customize->add_setting(
        'set_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => '400',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_hero_height',
        array(
            'label' => __( 'Hero height', 'devs' ),
            'description' => __( 'Please, type your here height', 'devs' ),
            'section' => 'sec_hero',
            'type' => 'number'
        )
    );

    // Hero Background
    $wp_customize->add_setting(
    'set_hero_background',
    array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'absint'
    )
);

$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
    'set_hero_background',
    array(
        'label' => __( 'Hero Image', 'devs' ),
        'section' => 'sec_hero',
        'mine_type' => 'image'
    )));

    // 3. Blog
$wp_customize->add_section( 
    'sec_blog', 
    array(
        'title' => 'Blog Section'
) );

    // Posts per page
    $wp_customize->add_setting( 
        'set_per_page', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 
        'set_per_page', 
        array(
            'label' => __( 'Posts per page', 'devs' ),
            'description' => __( 'How many items to display in the post list?', 'devs' ),			
            'section' => 'sec_blog',
            'type' => 'number'
    ) );

    // Post categories to include
    $wp_customize->add_setting( 
        'set_category_include', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 
        'set_category_include', 
        array(
            'label' => __( 'Post categories to include', 'devs' ),
            'description' => __( 'Comma separated values or single category ID', 'devs' ),
            'section' => 'sec_blog',
            'type' => 'text'
    ) );	

    // Post categories to exclude
    $wp_customize->add_setting( 
        'set_category_exclude', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 
        'set_category_exclude', 
        array(
            'label' => __( 'Post categories to exclude', 'devs' ),
            'description' => __( 'Comma separated values or single category ID', 'devs' ),			
            'section' => 'sec_blog',
            'type' => 'text'
    ) ); 
}
add_action( 'customize_register', 'wpdevs_customizer' );