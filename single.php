<?php

// use ElementorPro\Modules\Forms\Actions\Email;

get_header(); ?>

<!-- preloader
    ================================================== -->
<div id="preloader">
    <div id="loader">
    </div>
</div>


<!-- page wrap
    ================================================== -->
<div id="page" class="s-pagewrap">



    <!-- styles
        ----------------------------------------------- -->
    <div id="styles" class="s-styles">
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post();

        ?>
                <div class="row">
                    <div class="column lg-12 intro">

                        <h1><?php the_title(); ?></h1>
                        <span> Categroy: <?php the_category(' ,'); ?></span>
                        <p class="lead"><?php the_content() ?></p>

                        <hr>


                        <div class="column lg-12">
                            <nav class="pgn">
                                <ul>
                                    <li>
                                        <span class="prev">Previous</span> <?php previous_post_link('%link', ' %title') ?>
                                    </li>
                                    <li>
                                        <span class="next">Next</span> <?php next_post_link('%link', ' %title') ?>
                                    </li>
                                </ul>
                            </nav> <!-- end pgn -->

                        </div>



                        <?php the_author(); ?>
                        <div class=""><?= get_avatar(get_the_author_meta('email'), 155); ?></div>

                    </div>

                </div> <!-- end row -->


        <?php
            endwhile;
        endif;
        ?>
        <div class="row u-add-half-bottom">

            <div class="column lg-6 tab-12">

                <h3>Example Lists</h3>

                <ol>
                    <li>Here is an example</li>
                    <li>of an ordered list.</li>
                    <li>A parent list item.
                        <ul>
                            <li>one</li>
                            <li>two</li>
                            <li>three</li>
                        </ul>
                    </li>
                    <li>A list item.</li>
                </ol>

                <ul class="disc">
                    <li>Here is an example</li>
                    <li>of an unordered list.</li>
                </ul>

                <h3>Definition Lists</h3>

                <h5>a) Multi-line Definitions (default) </h5>

                <dl class="dictionary-style">
                    <dt><strong>This is a term</strong></dt>
                    <dd>this is the definition of that term, which both live in a <code>dl</code>.</dd>
                    <dt><strong>Another Term</strong></dt>
                    <dd>And it gets a definition too, which is this line</dd>
                    <dd>This is a 2<sup>nd</sup> definition for a single term. A <code>dt</code> may be followed by multiple <code>dd</code>s.</dd>
                </dl>

                <h3 class="u-add-bottom">Skill Bars</h3>

                <ul class="skill-bars">
                    <li>
                        <div class="progress percent90"><span>90%</span></div>
                        <strong>HTML</strong>
                    </li>
                    <li>
                        <div class="progress percent85"><span>85%</span></div>
                        <strong>CSS</strong>
                    </li>
                    <li>
                        <div class="progress percent70"><span>70%</span></div>
                        <strong>Javascript</strong>
                    </li>
                    <li>
                        <div class="progress percent95"><span>95%</span></div>
                        <strong>PHP</strong>
                    </li>
                    <li>
                        <div class="progress percent75"><span>75%</span></div>
                        <strong>Illustrator</strong>
                    </li>
                    <li>
                        <div class="progress percent90"><span>90%</span></div>
                        <strong>Figma</strong>
                    </li>
                </ul>

            </div>

            <div class="column lg-6 tab-12">

                <h3 class="u-add-bottom">Buttons</h3>

                <p>
                    <a class="btn btn--primary u-fullwidth" href="#0">Primary Button</a>
                    <a class="btn u-fullwidth" href="#0">Default Button</a>
                    <a class="btn btn--stroke u-fullwidth" href="#0">Stroke Button</a>
                </p>

                <h3>Stats Tabs</h3>

                <ul class="stats-tabs">
                    <li><a href="#0">1,234 <em>Peter</em></a></li>
                    <li><a href="#0">567 <em>James</em></a></li>
                    <li><a href="#0">23,456 <em>John</em></a></li>
                    <li><a href="#0">3,456 <em>Andrew</em></a></li>
                    <li><a href="#0">456 <em>Philip</em></a></li>
                    <li><a href="#0">26 <em>Matthew</em></a></li>
                </ul>

                <h3 class="u-add-bottom">Code</h3>

                <pre><code class="language-css">
    code {
    font-size: 1.4rem;
    margin: 0 .2rem;
    padding: .2rem .6rem;
    white-space: nowrap;
    background: #F1F1F1;
    border: 1px solid #E1E1E1;	
    border-radius: 3px;
    }
</code></pre>

            </div>

        </div> <!-- end row -->

        <div class="row u-add-half-bottom">

            <div class="column lg-6 tab-12">

                <h1>H1 Heading Doloremque dolor voluptas est sequi omnis.</h1>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h2>H2 Heading Doloremque dolor voluptas est sequi omnis.</h2>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h3>H3 Heading Doloremque dolor voluptas est sequi omnis.</h3>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>


            </div>

            <div class="column lg-6 tab-12">
                <h4>H4 Heading Doloremque dolor voluptas est sequi omnis.</h4>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h5>H5 Heading Doloremque dolor voluptas est sequi omnis.</h5>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h6>H6 Heading Doloremque dolor voluptas est sequi omnis.</h6>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>


            </div>

        </div> <!-- end row -->

        <div class="row u-add-half-bottom">

            <div class="column lg-6 tab-12">

                <h3 class="u-add-bottom">Responsive Image</h3>

                <figure>
                    <img src="images/wheel-500.jpg" srcset="images/wheel-1000.jpg 1000w, 
                        images/wheel-500.jpg 500w" sizes="(max-width: 1000px) 100vw, 1000px" alt="">

                    <figcaption>
                        Here is some random picture.
                    </figcaption>
                </figure>

            </div>

            <div class="column lg-6 tab-12">

                <h3 class="u-add-bottom">Responsive video</h3>

                <div class="video-container">
                    <iframe src="https://player.vimeo.com/video/14592941?color=00a650&title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>

            </div>

        </div> <!-- end row -->

        <div class="row u-add-bottom">

            <div class="column lg-12">

                <h3>Tables</h3>
                <p>Be sure to use properly formed table markup with <code>&lt;thead&gt;</code> and <code>&lt;tbody&gt;</code> when building a <code>table</code>.</p>

                <div class="table-responsive">

                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Sex</th>
                                <th>Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>William J. Seymour</td>
                                <td>34</td>
                                <td>Male</td>
                                <td>Azusa Street</td>
                            </tr>
                            <tr>
                                <td>Jennie Evans Moore</td>
                                <td>30</td>
                                <td>Female</td>
                                <td>Azusa Street</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div> <!-- end row -->

        <div class="row">

            <div class="column lg-12">
                <h3>Pagination</h3>

                <nav class="pgn">
                    <ul>
                        <li>
                            <a class="pgn__prev" href="#0">
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
                                </svg>
                            </a>
                        </li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li>
                            <a class="pgn__next" href="#0">
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H4.75"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav> <!-- end pgn -->

            </div>

        </div> <!-- end row -->

        <div class="row">

            <div class="column lg-6 tab-12">

                <h3 class="u-add-bottom">Form Styles</h3>

                <form>
                    <div>
                        <label for="sampleInput">Your email</label>
                        <input class="u-fullwidth" type="email" placeholder="test@mailbox.com" id="sampleInput">
                    </div>
                    <div>
                        <label for="sampleRecipientInput">Reason for contacting</label>
                        <div class="ss-custom-select">
                            <select class="u-fullwidth" id="sampleRecipientInput">
                                <option value="Option 1">Questions</option>
                                <option value="Option 2">Report</option>
                                <option value="Option 3">Others</option>
                            </select>
                        </div>
                    </div>

                    <label for="exampleMessage">Message</label>
                    <textarea class="u-fullwidth" placeholder="Your message" id="exampleMessage"></textarea>

                    <label class="u-add-bottom">
                        <input type="checkbox">
                        <span class="label-text">Send a copy to yourself</span>
                    </label>

                    <input class="btn--primary u-fullwidth" type="submit" value="Submit">
                </form>

            </div>

            <div class="column lg-6 tab-12">

                <h3>Alert Boxes</h3>

                <br>

                <div class="alert-box alert-box--error">
                    <p>Error Message. Your Message Goes Here.</p>
                    <span class="alert-box__close"></span>
                </div><!-- end error -->

                <div class="alert-box alert-box--success">
                    <p>Success Message. Your Message Goes Here.</p>
                    <span class="alert-box__close"></span>
                </div><!-- end success -->

                <div class="alert-box alert-box--info">
                    <p>Info Message. Your Message Goes Here.</p>
                    <span class="alert-box__close"></span>
                </div><!-- end info -->

                <div class="alert-box alert-box--notice">
                    <p>Notice Message. Your Message Goes Here.</p>
                    <span class="alert-box__close"></span>
                </div><!-- end notice -->

            </div>

        </div> <!-- end row -->




    </div> <!-- end styles -->


    <?php get_footer(); ?>