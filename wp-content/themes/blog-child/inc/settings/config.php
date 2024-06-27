<?php
require_once('config_main.php');
require_once('config_slide.php');
add_filter('mb_settings_pages', 'tech5s_settings_pages');
function tech5s_settings_pages($settings_pages) 
{
    $settings_pages[] = array(
        'id' => 'my-options',
        'menu_title' => 'Cấu hình chung',
        'option_name' => 'my_options',
        'icon_url' => 'dashicons-images-alt',
        'tabs' => array(
            'base-setting' => 'Cấu hình chung',
            'social-setting' => 'Mạng xã hội',
            'title-setting' => 'Tiêu đề các trang',
            'content-setting' => 'Nội dung',
        ),
        'submenu_title' => 'Cấu hình'
    );
    
    $settings_pages[] = array(
        'id' => 'tech5s-slider',
        'option_name' => 'my_options',
        'menu_title' => 'Slider',
        'parent' => 'my-options',
        'tabs' => array(
            'Slide-banner' => 'Silder trang trủ',
            'achievement-setting' => 'Thành tựu',
        ),
        'submenu_title' => 'Slider'
    );
    
    return $settings_pages;
}
