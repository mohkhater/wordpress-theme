<?php


class Newsletter_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'khater-newsletter-widget',
            'Khater: Newsletter Widget'
        );
    }
    public function form($instance)
    {

        printf(
            '<p>
        <label for="%s">Title</label>
        <input type=""text" name="%s" id="%s" value="%s" class="widefat"/>
        </p>',
            $this->get_field_id('title'),
            $this->get_field_name('title'),
            $this->get_field_id('title'),
            $instance['title'] ?? ''
        );

        printf(
            '<p>
        <label for="%s">Descrition</label>
        <input type=""text" name="%s" id="%s" value="%s" class="widefat"/>
        </p>',
            $this->get_field_id('desc'),
            $this->get_field_name('desc'),
            $this->get_field_id('desc'),
            $instance['desc'] ?? ''
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo '<div class="column lg-12 text-center">';


        if ($instance['title']) {
            echo $args['before_title'] . $instance['title'] . $args['after_title'];
        }

        echo  '<p class="lead">' . $instance['desc'] . '</p></div>';

        echo '<div class="column lg-12 s-footer__subscribe">
                    <div class="subscribe-form">
                        <form id="mc-form" class="mc-form">
                            <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center" placeholder="Your Email Address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
                            <input type="submit" name="subscribe" value="Subscribe" class="btn btn--primary u-fullwidth">
                            <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
                            <div class="mc-status"></div>
                        </form>
                    </div>
                </div>';

        echo $args['after_widget'];
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}
