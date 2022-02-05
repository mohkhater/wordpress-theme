<?php


class Pricing_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'khater-pricing-widget',
            'Khater: Pricing Widget'
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
        <label for="%s">Plan per</label>
        <input type=""text" name="%s" id="%s" value="%s" class="widefat"/>
        </p>',
            $this->get_field_id('per'),
            $this->get_field_name('per'),
            $this->get_field_id('per'),
            $instance['per'] ?? ''
        );
        printf(
            '<p>
        <label for="%s">Plan Price</label>
        <input type=""text" name="%s" id="%s" value="%s" class="widefat"/>
        </p>',
            $this->get_field_id('price'),
            $this->get_field_name('price'),
            $this->get_field_id('price'),
            $instance['price'] ?? ''
        );


        printf(
            '<p>
        <label for="%s">Detials</label>
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
?>

        <div class="item-plan__block">

            <div class="item-plan__top-part">

                <?php

                if ($instance['title']) {
                    echo $args['before_title'] . $instance['title'] . $args['after_title'];
                }
                ?>

                <p class="item-plan__price"><sup>$</sup><?= $instance['price'] ?></p>
                <p class="item-plan__per"><?= $instance['per'] ?></p>
            </div>

            <div class="item-plan__bottom-part">
                <ul class="item-plan__features">
                    <?= $instance['desc'] ?>
                </ul>

                <a class="btn btn--primary u-fullwidth" href="#0">Get Started</a>
            </div>

        </div>
<?php
        echo $args['after_widget'];
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}
