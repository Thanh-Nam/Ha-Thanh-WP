<?php
class Wg_Slide_Home extends WP_Widget
{
	function __construct()
	{
		parent::__construct(
			'Wg_Slide_Home',
			'Trang chủ - Slide trang chủ',
			array(
				'description' => 'Slide trang chủ'
			)
		);
	}
	function widget($args, $instance)
	{
		extract($args);
?>
<?php $slides = rwmb_meta('slide-item', array('object_type' => 'setting'), 'my_options'); ?>
<?php if (!empty($slides) && count($slides) > 0) : ?>
<section class="section pt-0 banner-full-main">
	<div class="container">
		<div class="slide_banner_mainss swiper-container">
			<div class="swiper-wrapper">
				<?php foreach($slides as $slide): ?>
				<div class="swiper-slide">
					<?php
						$imgs = _cget('img', $item, []);
						foreach ($imgs as $img) :
					?>
					<a href="<?php echo _cget('link',$slide); ?>" class="d-block" title="<?php echo _cget('name', $item); ?>">
						<picture>
							<source media="(min-width:767px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'full') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'full') ?>">
							<source media="(min-width:375px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'large') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'large') ?>">
							<source media="(min-width:575px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'medium_large') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'medium_large') ?>">
							<source media="(min-width:0px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'medium') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'medium') ?>">
							<img srcset="<?php echo wp_get_attachment_image_url($img, 'full') ?>" alt="<?php echo _cget('name', $item); ?>">
						</picture>
					</a>
					<?php 
						endforeach;
					?>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php
		echo $after_widget;
	}
}
