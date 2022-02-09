<?php


class Features_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'khater-features-widget',
            'Khater: Features Widget'
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

        printf(
            '<p>
        <label for="%s">icon url</label>
        <input type=""text" name="%s" id="%s" value="%s" class="widefat"/>
        </p>',
            $this->get_field_id('icon_url'),
            $this->get_field_name('icon_url'),
            $this->get_field_id('icon_url'),
            $instance['icon_url'] ?? ''
        );


?>
    <?php


    }

    public function widget($args, $instance)
    {

    ?>
        <div class="column s-about__feature-item">
            <div class="s-about__feature-icon-block">
                <?= $instance['icon_url']; ?>
            </div>
            <div class="s-about__feature-text">
                <h3 class="h5"><?= $instance['title']; ?></h3>
                <p><?= $instance['desc']; ?></p>
            </div>
        </div>

<?php

    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}
