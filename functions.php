<?php

function khater_theme_setup()
{

    add_theme_support('title-tag');
    add_theme_support('html5');

    add_theme_support('custom-logo', [
        'height' => 300,
        'width'  => 50,
        'flex-width'  => false,
        'flex-height'  => true,
    ]);


    add_theme_support('custom-header', [
        'default-image'  => get_theme_file_uri('assets/images/hero-bg-3000.jpg'),
        'width'   => 1800,
        'height'  => 800,
        'flex-width'  => false,
        'flex-height'  => true,

    ]);

    add_theme_support('custom-background', []);

    add_theme_support('post-thumbnails');

    add_image_size('khater-thumb', 375, 250, false);

    set_post_thumbnail_size(150, 150, true);

    add_theme_support('widgets');

    register_nav_menu('khater-Main-menu', 'Khater Main Menu');
    register_nav_menu('Khater-social-menu', 'Khater Social Menu');
}

add_action('after_setup_theme', 'khater_theme_setup');


function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);



function khater_enqueue_styles()
{
    wp_register_style(
        'khater_vender',
        get_theme_file_uri('assets/css/vendor.css'),
        [],
        '1.0',
        'all'
    );

    wp_register_style(
        'khater_vender-rtl',
        get_theme_file_uri('assets/css/vendor-rtl.css'),
        [],
        '1.0',
        'all'
    );

    if (is_rtl()) {

        wp_enqueue_style(
            'khater_styles-rtl',
            get_theme_file_uri('assets/css/styles-rtl.css'),
            ['khater_vender-rtl'],
            false,
            'all'
        );
    } else {

        wp_enqueue_style(
            'khater_styles',
            get_theme_file_uri('assets/css/styles.css'),
            ['khater_vender'],
            false,
            'all'
        );
    }
}

add_action('wp_enqueue_scripts', 'khater_enqueue_styles');

function khater_enqueue_scripts()
{
    wp_register_script(

        'khater_plugins',
        get_theme_file_uri('assets/js/plugins.js'),
        [],
        false,
        true

    );
    wp_register_script(
        'khater_fontawesome',
        get_theme_file_uri('assets/js/fontawesome/all.min.js'),
        [],
        false,
        false

    );
    wp_enqueue_script(
        'khater_main',
        get_theme_file_uri('assets/js/main.js'),
        ['khater_plugins', 'khater_fontawesome', 'jquery'],
        false,
        true
    );
}

add_action('wp_enqueue_scripts', 'khater_enqueue_scripts');



function khater_register_sidebars()
{

    register_sidebar([

        'id'          => 'khater-footer-left',
        'name'        => 'Footer Left',
        'description' => 'left Footer Sidebar',
        'before_widget'  => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'  => '',
    ]);

    register_sidebar([
        'id' => 'khater-newsletter-widget',
        'name' => 'Newsletter Widget',
        'description' => 'Bewsletter Sidebar',
        'before_widget'  => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="text-display-1">',
        'after_title'  => '</h2>',

    ]);

    register_sidebar([
        'id' => 'khater-question-widget',
        'name' => 'Question Widget',
        'description' => '',
        'before_widget'  => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'  => '',

    ]);
    register_sidebar([
        'id' => 'khater-download-widget',
        'name' => 'Download Widget',
        'description' => '',
        'before_widget'  => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="text-display-1">',
        'after_title'  => '</h2>',

    ]);


    register_sidebar([
        'id' => 'khater-pricing-widget',
        'name' => 'Pricing Widget',
        'description' => '',
        'before_widget'  => '<div class="column item-plan item-plan--popular">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="item-plan__title">',
        'after_title'  => '</h3>',
    ]);

    register_sidebar([
        'id' => 'khater-pricing-free-widget',
        'name' => 'Pricing Free Widget',
        'description' => '',
        'before_widget'  => '<div class="column item-plan">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="item-plan__title">',
        'after_title'  => '</h3>',
    ]);

    register_sidebar([
        'id' => 'khater-pricing-content-widget',
        'name' => 'Pricing Content Widget',
        'description' => '',
        'before_widget'  => '<div class="column lg-4 md-12 s-pricing__header">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="h2">',
        'after_title'  => '</h3>',
    ]);
}

add_action('widgets_init', 'khater_register_sidebars');


// Enqueue additional admin scripts
add_action('admin_enqueue_scripts', 'ctup_wdscript');
function ctup_wdscript()
{
    wp_enqueue_media();
    wp_enqueue_script('ads_script', get_theme_file_uri('assets/js/widget.js'), false, '1.0.0', true);
}


function khater_register_widgets()
{
    include __DIR__ . '/inc/widgets/newsletter-widget.php';
    register_widget('Newsletter_Widget');

    include __DIR__ . '/inc/widgets/question-widget.php';
    register_widget('Question_Widget');

    include __DIR__ . '/inc/widgets/download-widget.php';
    register_widget('Download_Widget');

    include __DIR__ . '/inc/widgets/pricing-widget.php';
    register_widget('Pricing_Widget');

    include __DIR__ . '/inc/widgets/pricing-free-widget.php';
    register_widget('Pricing_Free_Widget');

    include __DIR__ . '/inc/widgets/pricing-content-widget.php';
    register_widget('Pricing_Content_Widget');
}

add_action('widgets_init', 'khater_register_widgets');


add_filter('wp_is_application_passwords_available', '__return_true');

require_once __DIR__ . '/inc/theme-customizer.php';
