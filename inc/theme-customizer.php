<?php



function khater_theme_customizer(WP_Customize_Manager $customizer)
{

    $customizer->add_setting('copyright_text');
    $customizer->add_control('copyright_text', [
        'type' => 'text',
        'label' => 'Copyright Text',
        'description' => 'Copyright Text Setting',
        'section' => 'title_tagline'
    ]);

    $customizer->add_setting('designedby_text');
    $customizer->add_control('designedby_text', [
        'type' => 'text',
        'label' => 'Designed By Text',
        'description' => 'Designed by Text Setting',
        'section' => 'title_tagline'
    ]);

    $customizer->add_setting('designedby_link');
    $customizer->add_control('designedby_link', [
        'type' => 'text',
        'label' => 'Designed By Link',
        'description' => 'Designed by Link Setting',
        'section' => 'title_tagline'
    ]);

    $customizer->add_setting('footer_logo_image');
    $customizer->add_control(
        new WP_Customize_Image_Control(
            $customizer,
            'footer_logo_image',
            [
                'label' => 'Footer Logo Image',
                'section' => 'title_tagline'
            ]
        )
    );

    $customizer->selective_refresh->add_partial('footer_logo_image', [
        'selector' => '.footer__logo',
    ]);
    $customizer->selective_refresh->add_partial('copyright_text', [
        'selector' => '.mak-copyright',
    ]);
    $customizer->selective_refresh->add_partial('designedby_link', [
        'selector' => '.mak-designedby',
    ]);
}

add_action('customize_register', 'khater_theme_customizer');
