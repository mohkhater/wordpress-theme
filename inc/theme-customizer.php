<?php



function khater_theme_customizer(WP_Customize_Manager $customizer)
{

    $customizer->add_section('khater_section', [
        'title' =>          'Khater Theme Options',
        'description' =>     'Manage Khater Theme Options ',
        'priority' => 1,
    ]);



    // khater_section => title_tagline

    $customizer->add_setting('copyright_text');
    $customizer->add_control('copyright_text', [
        'type' => 'text',
        'label' => 'Copyright Text',
        'description' => 'Copyright Text Setting',
        'section' => 'khater_section'
    ]);

    $customizer->add_setting('designedby_text');
    $customizer->add_control('designedby_text', [
        'type' => 'text',
        'label' => 'Designed By Text',
        'description' => 'Designed by Text Setting',
        'section' => 'khater_section'
    ]);

    $customizer->add_setting('designedby_link');
    $customizer->add_control('designedby_link', [
        'type' => 'text',
        'label' => 'Designed By Link',
        'description' => 'Designed by Link Setting',
        'section' => 'khater_section'
    ]);

    $customizer->add_setting('footer_logo_image');
    $customizer->add_control(
        new WP_Customize_Image_Control(
            $customizer,
            'footer_logo_image',
            [
                'label' => 'Footer Logo Image',
                'section' => 'khater_section'
            ]
        )
    );

    // total 
    $customizer->add_setting('stats-count-total-num');
    $customizer->add_control('stats-count-total-num', [
        'type' => 'text',
        'label' => 'stats count total num',
        'description' => 'stats count total number',
        'section' => 'khater_section'
    ]);

    $customizer->add_setting('stats-count-total-symbol');
    $customizer->add_control('stats-count-total-symbol', [
        'type' => 'text',
        'label' => 'stats count total symbol',
        'description' => 'stats count total symbol',
        'section' => 'khater_section'
    ]);

    $customizer->add_setting('stats-count-total-desc');
    $customizer->add_control('stats-count-total-desc', [
        'type' => 'text',
        'label' => 'stats count total desc',
        'description' => 'stats count total desc',
        'section' => 'khater_section'
    ]);


    // visitor
    $customizer->add_setting('stats-count-visitor-num');
    $customizer->add_control('stats-count-visitor-num', [
        'type' => 'text',
        'label' => 'stats count visitor num',
        'description' => 'stats count visitor number',
        'section' => 'khater_section'
    ]);

    $customizer->add_setting('stats-count-visitor-symbol');
    $customizer->add_control('stats-count-visitor-symbol', [
        'type' => 'text',
        'label' => 'stats count visitor symbol',
        'description' => 'stats count visitor symbol',
        'section' => 'khater_section'
    ]);

    $customizer->add_setting('stats-count-visitor-desc');
    $customizer->add_control('stats-count-visitor-desc', [
        'type' => 'text',
        'label' => 'stats count total desc',
        'description' => 'stats count total desc',
        'section' => 'khater_section'
    ]);

    // rating
    $customizer->add_setting('stats-count-rating-num');
    $customizer->add_control('stats-count-rating-num', [
        'type' => 'text',
        'label' => 'stats count rating num',
        'description' => 'stats count rating number',
        'section' => 'khater_section'
    ]);

    $customizer->add_setting('stats-count-rating-symbol');
    $customizer->add_control('stats-count-rating-symbol', [
        'type' => 'text',
        'label' => 'stats count rating symbol',
        'description' => 'stats count rating symbol',
        'section' => 'khater_section'
    ]);

    $customizer->add_setting('stats-count-rating-desc');
    $customizer->add_control('stats-count-rating-desc', [
        'type' => 'text',
        'label' => 'stats count rating desc',
        'description' => 'stats count rating desc',
        'section' => 'khater_section'
    ]);

    // users happy
    $customizer->add_setting('stats-count-users-num');
    $customizer->add_control('stats-count-users-num', [
        'type' => 'text',
        'label' => 'stats count users num',
        'description' => 'stats count users number',
        'section' => 'khater_section'
    ]);

    $customizer->add_setting('stats-count-users-symbol');
    $customizer->add_control('stats-count-users-symbol', [
        'type' => 'text',
        'label' => 'stats count users symbol',
        'description' => 'stats count users symbol',
        'section' => 'khater_section'
    ]);

    $customizer->add_setting('stats-count-users-desc');
    $customizer->add_control('stats-count-users-desc', [
        'type' => 'text',
        'label' => 'stats count users desc',
        'description' => 'stats count users desc',
        'section' => 'khater_section'
    ]);


    // about screens
    $customizer->add_setting('about-screen-1');
    $customizer->add_control(
        new WP_Customize_Image_Control(
            $customizer,
            'about-screen-1',
            [
                'label' => 'about screen 1 image',
                'section' => 'khater_section'
            ]
        )
    );

    $customizer->add_setting('about-screen-2');
    $customizer->add_control(
        new WP_Customize_Image_Control(
            $customizer,
            'about-screen-2',
            [
                'label' => 'about screen 2 image',
                'section' => 'khater_section'
            ]
        )
    );

    $customizer->add_setting('about-screen-3');
    $customizer->add_control(
        new WP_Customize_Image_Control(
            $customizer,
            'about-screen-3',
            [
                'label' => 'about screen 3 image',
                'section' => 'khater_section'
            ]
        )
    );

    $customizer->add_setting('about-screen-4');
    $customizer->add_control(
        new WP_Customize_Image_Control(
            $customizer,
            'about-screen-4',
            [
                'label' => 'about screen 4 image',
                'section' => 'khater_section'
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


    $customizer->selective_refresh->add_partial('about-screen-1', [
        'selector' => '.about-screen-1',
    ]);
    $customizer->selective_refresh->add_partial('about-screen-2', [
        'selector' => '.about-screen-2',
    ]);
    $customizer->selective_refresh->add_partial('about-screen-3', [
        'selector' => '.about-screen-3',
    ]);

    $customizer->selective_refresh->add_partial('about-screen-4', [
        'selector' => '.about-screen-4',
    ]);



    $customizer->selective_refresh->add_partial('stats-count-total-num', [
        'selector' => '.stats-count-total-num',
    ]);
    $customizer->selective_refresh->add_partial('stats-count-visitor-num', [
        'selector' => '.stats-count-visitor-num',
    ]);
    $customizer->selective_refresh->add_partial('stats-count-rating-num', [
        'selector' => '.stats-count-rating-num',
    ]);
    $customizer->selective_refresh->add_partial('stats-count-users-num', [
        'selector' => '.stats-count-users-num',
    ]);
}

add_action('customize_register', 'khater_theme_customizer');
