<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" initial-scale="1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="tem_url" content="<?php echo get_stylesheet_directory_uri(); ?>">
	<meta name="site_url" content="<?php echo site_url(); ?>">
	<meta name="ajax_url" content="<?php echo admin_url('admin-ajax.php'); ?>">
	<link rel="icon" href="<?php echo mb_image('favicon'); ?>" type="image/x-icon" />

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/theme/frontend/css/common.min.css?v=2">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/theme/frontend/css/style.css?v=2">
   	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/theme/frontend/css/add/style.css?v=2">
    <?php wp_head(); ?>
	<?php mb_option('script_header'); ?>
	<script>
		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
		var template_directory_uri = '<?php echo get_template_directory_uri() ?>/';
	</script>

</head>
<body>
	<section class="top group">
        <div class="container">
            <div class="top-right">
                <div class="hotline">
                    <span class="icon"><em class="fa fa-phone">&nbsp;</em></span>
                    <p><a href="tel:<?php mb_option('hotline'); ?>" title="Gọi ngay cho chúng tôi"><?php mb_option('hotline'); ?> - Mr.Sa Tuyển</a></p>
                </div>
                <div class="search-box">
                    <span class="btn-search"><span class="fa fa-search"></span></span>
                    <input type="text" class="text-search" placeholder="Tìm kiếm..." data-field="keyword" data-required="1" data-min="2" value="" data-lang="master_search" />
                </div>
            </div>
        </div>
    </section>
    <section class="header group">
        <div class="container">
            <div class="logo">
                <a title="<?php bloginfo('name'); ?>" href="<?php echo get_home_url(); ?>">
                	<img src="<?php mb_image('logo'); ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" class="img-fluid">
                </a>
            </div>
            <a href="javascript:void(0);" class="cd-nav-toggle"><span class="fa fa-bars"></span></a>
        </div>
    </section>