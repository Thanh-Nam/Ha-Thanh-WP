<?php
class Wg_New_Category_Home extends WP_Widget
{
	function __construct()
	{
		parent::__construct(
			'Wg_New_Category_Home',
			'Trang chủ - Danh mục tin tức trang chủ',
			array(
				'description' => 'Danh mục tin tức trang chủ'
			)
		);
	}
	function widget($args, $instance)
	{
		extract($args);
?>

<?php 
	$categories = get_categories(
		array(
		    'hide_empty' => false,
            'orderby'   => 'date',
	        'order'     => 'DESC',
            'meta_query' => array(
            	array(
	                'key'=>'home',
	                'value'=> 1
	            )
            )
		)
	);

?>
<?php if(isset($categories) && count($categories) > 0): ?>
<?php foreach($categories as $key  => $itemCate): ?>
<?php 
	global $post;
	$i = 0;
	$the_query_post = new WP_Query(
        array(
            'post_type' 		=> 'post',
            'cat'          => $itemCate->term_id,
            'post_status' 		=> 'publish',
            'posts_per_page' 	=> 12,
            'orderby'   		=> 'date',
            'order'     		=> 'DESC'
        )
    );
?>
<?php if ($the_query_post->have_posts()) : ?>
<section class="section pt-0 item-new-category section-new section-post-new position-relative" data-key="<?php echo $i; ?>">
	<div class="container">
		<h2 class="title-ss-all mb-3"><a href="<?php echo get_category_link($itemCate); ?>" title="<?php echo $itemCate->name; ?>" class="smooth" title=""><?php echo $itemCate->name; ?></a></h2>
		<div class="row row_5 slide_new_post_<?php echo $i; ?>">

			<?php
                while ($the_query_post->have_posts()) : $the_query_post->the_post();
            ?>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
				<?php get_template_part('templates/post/item'); ?>
			</div>
			<?php 
				$i++;
				endwhile;
				wp_reset_postdata();
			?>
	    </div>
	    <p class="text-center pt-2">
	    	<a href="<?php echo get_category_link($itemCate); ?>" class="btn-seemor smooth btn btn-info" title="Xem thêm">Xem thêm</a>
	    </p>
    </div>
</section>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>

<?php
		echo $after_widget;
	}
}
