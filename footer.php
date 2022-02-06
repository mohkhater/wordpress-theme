        <!-- # site-footer
        ================================================== -->
        <footer id="colophon" class="s-footer footer">

            <div class="row s-footer__top">
                <?php

                if (is_active_sidebar('khater-newsletter-widget')) {
                    dynamic_sidebar('khater-newsletter-widget');
                }


                ?>
            </div>

            <div class="row s-footer__bottom">
                <div class="column lg-5 md-6 stack-on-900">
                    <div class="footer__logo">
                        <a href="#">
                            <img src="<?= get_theme_mod('footer_logo_image'); ?>">
                        </a>
                    </div>

                    <?php if (is_active_sidebar('khater-footer-left')) {
                        dynamic_sidebar('khater-footer-left');
                    }

                    wp_nav_menu([
                        'theme_location' => 'Khater-social-menu',
                        'container' => '',
                        'menu_class' => 's-footer__social',
                        'depth' => 1,

                    ]);

                    ?>

                </div>

                <div class="column lg-6 stack-on-900 end">

                    <?php
                    wp_nav_menu([
                        'theme_lcoation'  => 'main-menu',
                        'menu_class'      => 's-footer__site-links',
                        'container'       => 'nav',
                        'container_class' => 's-footer__site-links',
                        'add_a_class'     => 'smoothscroll',
                    ]);

                    if (is_active_sidebar('khater-question-widget')) {
                        dynamic_sidebar('khater-question-widget');
                    }

                    ?>


                    <div class="ss-copyright">

                        <span class="mak-copyright"> <?= get_theme_mod('copyright_text'); ?></span>
                        <span class="mak-designedby"> Designed by <a href="<?= get_theme_mod('designedby_link'); ?>"><?= get_theme_mod('designedby_text'); ?></a></span>

                    </div>
                </div>

            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z"></path>
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->

        </footer> <!-- end footer -->


        <?php wp_footer(); ?>

        <!-- Java Script
    ================================================== -->



        </body>

        </html>