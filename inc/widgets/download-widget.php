<?php


class Download_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'khater-download-widget',
            'Khater: Download Widget'
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

?>
        <p>
            <label for="<?= $this->get_field_id('Andimage_uri'); ?>">Android Image</label>
            <img class="<?= $this->id ?>_img" src="<?= (!empty($instance['Andimage_uri'])) ? $instance['Andimage_uri'] : ''; ?>" style="margin:0;padding:0;max-width:100%;display:block" />
            <input type="text" class="widefat <?= $this->id ?>_url" name="<?= $this->get_field_name('Andimage_uri'); ?>" value="<?= $instance['Andimage_uri'] ?? ''; ?>" style="margin-top:5px;" />
            <input type="button" id="<?= $this->id ?>" class="button button-primary js_custom_upload_media" value="Upload Image" style="margin-top:5px;" />
        </p>
        <p>
            <label for="<?= $this->get_field_id('Iosimage_uri'); ?>">iOS Image</label>
            <img class="<?= $this->id ?>_img" src="<?= (!empty($instance['Iosimage_uri'])) ? $instance['Iosimage_uri'] : ''; ?>" style="margin:0;padding:0;max-width:100%;display:block" />
            <input type="text" class="widefat <?= $this->id ?>_url" name="<?= $this->get_field_name('Iosimage_uri'); ?>" value="<?= $instance['Iosimage_uri'] ?? ''; ?>" style="margin-top:5px;" />
            <input type="button" id="<?= $this->id ?>" class="button button-primary js_custom_upload_media" value="Upload Image" style="margin-top:5px;" />
        </p>

<?php


    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        echo '<div class="row s-download__header">
                    <div class="column lg-12">';
        if ($instance['title']) {
            echo $args['before_title'] . $instance['title'] . $args['after_title'];
        }
        echo ' <p class="lead">' . $instance['desc'] . ' </p>
                    </div>
                </div>';
        printf(
            '<div class="row s-download__badges-block">
                    <div class="column lg-12 s-download__badges">
                        <a href="#0" title="" class="badge-appstore">
                            <img src="%s" alt="">
                        </a>
                        <a href="#0" title="" class="badge-googleplay">
                            <img src="%s" alt="">
                        </a>
                    </div>
                </div>',
            esc_url($instance['Andimage_uri']),
            esc_url($instance['Iosimage_uri'])
        );
        echo $args['after_widget'];
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}
