<?php


class Pricing_Content_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'khater-pricing-content-widget',
            'Khater: Pricing Content Widget'
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
        if ($instance['title']) {
            echo $args['before_title'] . $instance['title'] . $args['after_title'];
        }

        echo  '<p>' . $instance['desc'] . '</p>';
        echo $args['after_widget'];
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}
