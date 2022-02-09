<?php


class Swiper_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'khater-swiper-widget',
            'Khater: Swiper Widget'
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
        <label for="%s">Title</label>
        <input type=""text" name="%s" id="%s" value="%s" class="widefat"/>
        </p>',
            $this->get_field_id('job'),
            $this->get_field_name('job'),
            $this->get_field_id('job'),
            $instance['job'] ?? ''
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

?>
        <p>
            <label for="<?= $this->get_field_id('image_uri'); ?>">User Image</label>
            <img class="<?= $this->id ?>_img" src="<?= (!empty($instance['image_uri'])) ? $instance['image_uri'] : ''; ?>" style="margin:0;padding:0;max-width:100%;display:block" />
            <input type="text" class="widefat <?= $this->id ?>_url" name="<?= $this->get_field_name('image_uri'); ?>" value="<?= $instance['image_uri'] ?? ''; ?>" style="margin-top:5px;" />
            <input type="button" id="<?= $this->id ?>" class="button button-primary js_custom_upload_media" value="Upload Image" style="margin-top:5px;" />
        </p>

    <?php


    }

    public function widget($args, $instance)
    {
        //echo $args['before_widget'];
    ?>
        <div class="s-testimonials__slide swiper-slide">
            <div class="s-testimonials__author">
                <img src="<?= esc_url($instance['image_uri']); ?>" alt="Author image" class="s-testimonials__avatar">
                <cite class="s-testimonials__cite">
                    <strong><?= $instance['title']; ?></strong>
                    <span><?= $instance['job']; ?></span>
                </cite>
            </div>
            <p><?= $instance['desc']; ?></p>
        </div>
<?php
        // echo $args['after_widget'];
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}
