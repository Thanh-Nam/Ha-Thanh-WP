<?php 
add_filter('rwmb_meta_boxes', 'tech5s_options_meta_boxes_config');
function tech5s_options_meta_boxes_config($meta_boxes) 
{
    $meta_boxes[] = array(
        'id' => 'Slide',
        'title' => 'Slide Ảnh ',
        'settings_pages' => 'tech5s-slider',
        'tab' => 'Slide-banner',
        'fields' => array(
            array(
                'name' => 'Slide Ảnh',
                'id' => 'slide-item',
                'type' => 'group',
                'clone' => true,
                'sort_clone' => true,
                'fields' => array(
                    array(
                        'name' => 'Ảnh',
                        'id' => 'img',
                        'type' => 'image_advanced',
                        'max_file_uploads' => 1,
                        'class' => 'hc-normal',
                        'image_size' => ''
                    ),
                    array(
                        'name' => 'Tên',
                        'id' => 'name',
                        'type' => 'text',
                        'size' => 100
                    ),
                    array(
                        'name' => 'Link',
                        'id' => 'link',
                        'type' => 'text',
                        'size' => 100
                    )
                )
            )
        )
    );
    return $meta_boxes;
}