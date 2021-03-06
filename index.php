<?php


get_header();


$queryAbout = new WP_Query(array('category_name' => 'about'));
$queryApp = new WP_Query(array('category_name' => 'app'));
// $helpinfo_loop = new Query([
//     'posts_per_page' => 3,
//     'post__in' => get_option('sticky_posts'),

// ]);

?>

<!-- # site-content
        ================================================== -->
<section id="content" class="s-content">





    <!-- intro
            ----------------------------------------------- -->
    <section id="intro" class="s-intro target-section">

        <div class="s-intro__bg" style="background-image: url('<?php header_image() ?>')"></div>

        <div class="row s-intro__content">

            <div class="column lg-12 s-intro__content-inner">
                <div class="s-intro__content-left">
                    <h1 class="s-intro__content-title">
                        An Amazing App <br>
                        That Does It All.
                    </h1>
                </div>
                <div class="s-intro__content-right">
                    <p class="s-intro__content-desc body-text-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Mattis lacus interdum dictum dolor sit amet lectus ornare nunc non.
                    </p>

                    <div class="s-intro__content-buttons">
                        <a href="#download" class="btn btn--primary s-intro__content-btn smoothscroll">Get Started</a>
                        <a href="https://player.vimeo.com/video/14592941?color=00a650&title=0&byline=0&portrait=0" class="s-intro__content-video-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M7 6v12l10-6z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div> <!-- s-intro__content-inner -->

        </div> <!-- s-intro__content -->

        <!-- s-intro__social -->
        <?php
        wp_nav_menu([
            'theme_location' => 'Khater-social-menu',
            'container' => '',
            'menu_class' => 's-intro__social',
            'depth' => 1,

        ]);

        ?>
        <!-- <ul class="s-intro__social">
            <li>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                        <path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path>
                    </svg>
                    <span class="u-screen-reader-text">Facebook</span>
                </a>
            </li>
            <li>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                        <path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path>
                    </svg>
                    <span class="u-screen-reader-text">Twitter</span>
                </a>
            </li>
            <li>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                        <path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path>
                        <circle cx="16.806" cy="7.207" r="1.078"></circle>
                        <path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path>
                    </svg>
                    <span class="u-screen-reader-text">Instagram</span>
                </a>
            </li>
        </ul> -->

        <div class="s-intro__scroll">
            <a href="#about" class="smoothscroll">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: rotate(270deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);">
                    <path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path>
                </svg>
                <span class="u-screen-reader-text">Scroll</span>
            </a>
        </div> <!-- s-intro__scroll -->

    </section> <!-- end s-intro -->


    <!-- about
            ----------------------------------------------- -->
    <section id="about" class="s-about target-section">


        <!-- stats -->
        <div class="row block-lg-one-fourth block-tab-one-half block-stack s-about__stats">

            <div class="column s-about__stats-item">
                <div class="s-about__stats-count stats-count-total-num"><?= get_theme_mod('stats-count-total-num'); ?><span><?= get_theme_mod('stats-count-total-symbol'); ?></span></div>
                <h5><?= get_theme_mod('stats-count-total-desc'); ?></h5>
            </div>

            <div class="column s-about__stats-item">
                <div class="s-about__stats-count stats-count-visitor-num"><?= get_theme_mod('stats-count-visitor-num'); ?><span><?= get_theme_mod('stats-count-visitor-symbol'); ?></span></div>
                <h5><?= get_theme_mod('stats-count-visitor-desc'); ?></h5>
            </div>
            <div class="column s-about__stats-item">
                <div class="s-about__stats-count stats-count-rating-num"><?= get_theme_mod('stats-count-rating-num'); ?><span><?= get_theme_mod('stats-count-rating-symbol'); ?></span></div>
                <h5><?= get_theme_mod('stats-count-rating-desc'); ?></h5>
            </div>
            <div class="column s-about__stats-item">
                <div class="s-about__stats-count stats-count-users-num"><?= get_theme_mod('stats-count-users-num'); ?><span><?= get_theme_mod('stats-count-users-symbol'); ?></span></div>
                <h5><?= get_theme_mod('stats-count-users-desc'); ?></h5>
            </div>

        </div> <!-- end stats -->


        <!-- intro info -->
        <div class="s-about__info">

            <div class="row section-header" data-num="01">
                <div class="column lg-6 stack-on-1000 title-block">
                    <h2 class="title text-display-1">Getting Started With Booth.</h2>
                </div>
                <div class="column lg-6 stack-on-1000 desc-block">
                    <p class="desc lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, sit pretium,
                        proin sed massa maecenas tempus, nibh. Ultrices pellentesque amet tristique
                        feugiat condimentum integer fames.
                    </p>
                </div>
            </div>
            <?php //if ($helpinfo_loop->have_posts()) : 
            ?>
            <div class="row s-about__info-slider-block">
                <div class="column lg-12">

                    <div class="swiper-container s-about__info-slider">
                        <div class="swiper-wrapper">
                            <?php
                            if ($queryAbout->have_posts()) :
                                while ($queryAbout->have_posts()) :
                                    $queryAbout->the_post();

                            ?>
                                    <div class="s-about__info-slide swiper-slide">
                                        <h4 class="h5">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                        </h4>

                                        <p>
                                            <?php the_excerpt() ?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>">Read more...</a>
                                    </div> <!-- end s-about__info-slide  -->
                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>


                        </div> <!-- swiper-wrapper -->

                        <div class="swiper-pagination">
                            <?php get_the_posts_pagination() ?>
                        </div>

                    </div> <!-- end swiper-container -->

                </div>
            </div> <!-- end s-about__info-slider-block -->
            <?php
            // endif;
            // wp_reset_postdata();
            ?>
        </div> <!-- end s-about__info -->


        <!-- screens -->
        <div class="row s-about__screens-block">
            <div class="column lg-12">

                <div class="s-about__screens">
                    <div class="s-about__screen about-screen-3'">
                        <img src="<?= get_theme_mod('about-screen-3'); ?>">
                    </div>
                    <div class="s-about__screen about-screen-2">
                        <img src="<?= get_theme_mod('about-screen-2'); ?>">
                    </div>
                    <div class="s-about__screen about-screen-1">
                        <img src="<?= get_theme_mod('about-screen-1'); ?>">
                    </div>
                </div>

            </div>
        </div> <!-- end screens -->


        <!-- how-to -->
        <div class="s-about__howto">

            <div class="row section-header" data-num="02">
                <div class="column lg-12 title-block">
                    <h2 class="title text-display-1">How the App Works.</h2>
                </div>
            </div>

            <div class="row s-about__howto-content">

                <div class="column s-about__howto-process-block">

                    <div class="s-about__howto-process">
                        <?php
                        if ($queryApp->have_posts()) :
                            while ($queryApp->have_posts()) :
                                $queryApp->the_post();
                        ?>
                                <div class="s-about__howto-process-step">
                                    <h3 class="h5"><?php the_title(); ?></h3>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div> <!-- end how-to process -->

                </div>

                <div class="column s-about__howto-screens-block">

                    <div class="s-about__howto-screens about-screen-4">
                        <img src="<?= get_theme_mod('about-screen-1'); ?>">
                        <img src="<?= get_theme_mod('about-screen-4'); ?>">
                    </div>

                </div>

            </div>

        </div> <!-- end how-to -->


        <!-- features -->
        <div class="s-about__features">

            <div class="row section-header" data-num="03">
                <div class="column lg-6 stack-on-1000 title-block">
                    <h2 class="title text-display-1">The Best Features of The App.</h2>
                </div>
                <div class="column lg-6 stack-on-1000 desc-block">
                    <p class="desc lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, sit pretium,
                        proin sed massa maecenas tempus, nibh. Ultrices pellentesque amet tristique
                        feugiat condimentum integer fames.
                    </p>
                </div>
            </div>

            <div class="row s-about__feature-list block-lg-one-third">


                <?php

                if (is_active_sidebar('khater-features-widget')) {
                    dynamic_sidebar('khater-features-widget');
                }


                ?>

            </div> <!-- end features-list -->

        </div> <!-- end features -->

    </section> <!-- end s-about -->


    <!-- testimonials
            ----------------------------------------------- -->

    <?php if (is_active_sidebar('khater-swiper-widget')) { ?>
        <section id="testimonials" class="s-testimonials">
            <div class="row narrow text-center s-testimonials__header">
                <div class="column lg-12">
                    <h3 class="h2">What Our Users Have To Say.</h3>
                </div>
            </div>

            <div class="row s-testimonials__content">
                <div class="column lg-12">

                    <div class="swiper-container s-testimonials__slider">

                        <div class="swiper-wrapper">

                            <?php

                            dynamic_sidebar('khater-swiper-widget');

                            ?>






                        </div> <!-- end swiper-wrapper -->

                        <div class="swiper-pagination"></div>

                    </div> <!-- end swiper-container -->

                </div> <!-- end column -->
            </div> <!-- end s-testimonials__content -->

        </section> <!-- end testimonials -->

    <?php  }  ?>
    <!-- pricing
            ----------------------------------------------- -->
    <section id="pricing" class="s-pricing target-section">
        <div class="row s-pricing__content">

            <?php if (is_active_sidebar('khater-pricing-content-widget')) {
                dynamic_sidebar('khater-pricing-content-widget');
            }
            ?>


            <div class="column lg-8 md-12 s-pricing__plans">
                <div class="row plans block-lg-one-half block-tab-whole">


                    <?php

                    if (is_active_sidebar('khater-pricing-widget')) {
                        dynamic_sidebar('khater-pricing-widget');
                    }
                    if (is_active_sidebar('khater-pricing-free-widget')) {
                        dynamic_sidebar('khater-pricing-free-widget');
                    }

                    ?>
                </div> <!-- end item-plan -->
            </div>
        </div> <!-- end s-pricing__plans -->

        </div> <!-- end s-pricing__content -->
    </section> <!-- end pricing -->


    <!-- download
            ----------------------------------------------- -->
    <section id="download" class="s-download target-section">
        <div class="row s-download__header">
            <div class="column lg-12">
                <?php if (is_active_sidebar('khater-download-widget')) {
                    dynamic_sidebar('khater-download-widget');
                }
                ?>
            </div>
        </div>

    </section>


</section> <!-- end s-content -->


<?php get_footer(); ?>