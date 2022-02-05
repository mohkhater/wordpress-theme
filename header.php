<!DOCTYPE html>
<html lang="<?= get_locale(); ?>" class="no-js" dir="<?= is_rtl() ? 'rtl' : 'ltr' ?>">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booth</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <?php wp_head() ?>

    <!-- CSS
    ================================================== -->

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_theme_file_uri('assets/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_theme_file_uri('assets/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_theme_file_uri('assets/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= get_theme_file_uri('site.webmanifest') ?>">

</head>


<body id="top" <?php body_class() ?>>


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <?php the_custom_logo() ?>

                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->


                <?php
                wp_nav_menu([
                    'theme_lcoation'  => 'main-menu',
                    'menu_class'      => 's-header__nav',
                    'container'       => 'nav',
                    'container_class' => 's-header__nav',
                    'add_a_class'     => 'smoothscroll',
                ]);

                ?>
                <!--
                <nav class="s-header__nav">
                    <ul class="s-header__nav">
                        <li class="current"><a href="#intro" class="smoothscroll">Intro</a></li>
                        <li><a href="#about" class="smoothscroll">About</a></li>
                        <li><a href="#pricing" class="smoothscroll">Pricing</a></li>
                        <li><a href="#download" class="smoothscroll">Download</a></li>
                    </ul>
                </nav>
            -->
                <div class="s-header__cta">
                    <a href="#download" class="btn btn--stroke s-header__cta-btn smoothscroll">Get The App</a>
                </div>

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->