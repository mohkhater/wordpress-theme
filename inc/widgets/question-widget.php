<?php


class Question_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'khater-question-widget',
            'Khater: Question Widget'
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
        <label for="%s">Email</label>
        <input type=""text" name="%s" id="%s" value="%s" class="widefat"/>
        </p>',
            $this->get_field_id('email'),
            $this->get_field_name('email'),
            $this->get_field_id('email'),
            $instance['email'] ?? ''
        );
    }

    public function widget($args, $instance)
    {
        // echo $args['before_widget'];
        // echo '<div class="column lg-12 text-center">';


        // if ($instance['title']) {
        //     echo $args['before_title'] . $instance['title'] . $args['after_title'];
        // }

        // echo  '<p class="lead">' . $instance['desc'] . '</p></div>';

        echo '   <p class="s-footer__contact">' . $instance['title'] . ' <br>
                        <a href="mailto:#0" class="s-footer__mail-link">' . $instance['email'] . '</a>
                    </p>';

        // echo $args['after_widget'];
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}
