<?php get_header(); ?>
<?php $listSlide = rwmb_meta('slide-item', array('object_type' => 'setting'), 'my_options'); ?>
<?php if (!empty($listSlide) && count($listSlide) > 0) : ?>
<section class="slideshow group">
	<div class="owl-carousel owl-theme owl-sliderbanner">
		<?php foreach($listSlide as $itemSlide): ?>
	    <div class="item">
			<a href="<?php echo _cget('link', $itemSlide); ?>" title="" class="img">
	        	<?php
					$imgs = _cget('img', $itemSlide, []);
					foreach ($imgs as $k2 => $img) :
				?>
					<picture>
						<source media="(min-width:767px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'full') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'full') ?>">
						<source media="(min-width:375px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'large') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'large') ?>">
						<source media="(min-width:575px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'medium_large') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'medium_large') ?>">
						<source media="(min-width:0px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'medium') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'medium') ?>">
						<img srcset="<?php echo wp_get_attachment_image_url($img, 'medium_large') ?>" alt="<?php echo _cget('name', $item); ?>">
					</picture>
				<?php endforeach; ?>
			</a>
	    </div>
		<?php endforeach; ?>
	</div>
</section>
<?php endif; ?>
<section class="main group">
    <div class="container">
        <div class="box-container group">
            <div class="row-access">
                <div class="col-access">
                    <a class="fast-access" href="javascript:openModelBaoGia()" title="Yêu cầu báo giá">
                        <span class="icon fast-access-icon"><em class="fa fa-usd"></em></span> 
                        <span class="fast-access-title">Yêu cầu báo giá</span> 
                    </a>
                </div>
                <div class="col-access">
                    <a class="fast-access" href="<?php mb_option('link_installment'); ?>" title="Thủ tục trả góp">
                        <span class="fast-access-icon"><em class="fa fa-calculator"></em></span> 
                        <span class="fast-access-title">Thủ tục trả góp</span> 
                    </a>
                </div>
                <div class="col-access">
                    <a class="fast-access" href="<?php mb_option('link_price_list'); ?>" title="Bảng giá xe">
                        <span class="fast-access-icon"><em class="fa fa-car"></em></span> 
                        <span class="fast-access-title">Bảng giá xe KIA</span> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main group">
    <div class="container">
        <div class="box box-product group">
            <div class="box-header">
                <p class="box-title">KIA K3 - HOTLINE: 09345.28.111</p>
            </div>
            <div class="box-content group">
                <div class="row">
                    <div class="col-6 col-md-4 col-product">
                        <div class="product">
                            <div class="product-image">
                                <a href="kia-k3-deluxe-mt-1322877.html" title="KIA K3 1.6 Deluxe (MT)"><img class="img-responsive" alt="KIA K3 1.6 Deluxe (MT)" src="https://drive.gianhangvn.com/image/kia-k3-deluxe-mt-1929265j23730x3.jpg" /></a>
                            </div>
                            <div class="caption">
                                <h3 class="name"><a href="kia-k3-deluxe-mt-1322877.html" title="KIA K3 1.6 Deluxe (MT)">KIA K3 1.6 Deluxe (MT)</a></h3>
                                <div class="content-price">
                                    <span class="price">559,000,000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main group">
    <div class="container">
        <div class="box group">
            <div class="box-header">
                <p class="box-title">Tin tức mới</p>
            </div>
            <div class="box-content group">
                <div class="row">
                    <div class="col-md-5">
                        <div class="first-news">
                            <div class="image-wrapper">
                                <a title="THÁNG 10/2018, KIA TRIỂN KHAI CHƯƠNG TRÌNH TRI ÂN KHÁCH HÀNG TRÊN TOÀN QUỐC" href="thang-10-2018-kia-trien-khai-chuong-trinh-tri-an-khach-hang-tren-toan-quoc-65979u.html">
                                <img class="img-responsive" alt="THÁNG 10/2018, KIA TRIỂN KHAI CHƯƠNG TRÌNH TRI ÂN KHÁCH HÀNG TRÊN TOÀN QUỐC" src="https://drive.gianhangvn.com/image/thang-10-2018-kia-trien-khai-chuong-trinh-tri-an-khach-hang-tren-toan-quoc-1006428j23730x3.jpg" />
                                <span class="style-news"><span class="viewmore" data-lang="master_readmore">Xem tiếp</span></span>
                                </a>
                            </div>
                            <h3 class="title"><a title="THÁNG 10/2018, KIA TRIỂN KHAI CHƯƠNG TRÌNH TRI ÂN KHÁCH HÀNG TRÊN TOÀN QUỐC" href="thang-10-2018-kia-trien-khai-chuong-trinh-tri-an-khach-hang-tren-toan-quoc-65979u.html">THÁNG 10/2018, KIA TRIỂN KHAI CHƯƠNG TRÌNH TRI ÂN KHÁCH HÀNG TRÊN TOÀN QUỐC</a></h3>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="block block-border-top group">
                            <div class="block-img">
                                <a class="image-wrapper" title="12 TÍNH NĂNG NỔI BẬT GIÚP KIA OPTIMA NẰM TRONG TỐP XE TỐT NHẤT NĂM 2017" href="12-tinh-nang-noi-bat-giup-kia-optima-nam-trong-top-xe-tot-nhat-nam-2017-54449u.html">
                                <img class="img-news" alt="12 TÍNH NĂNG NỔI BẬT GIÚP KIA OPTIMA NẰM TRONG TỐP XE TỐT NHẤT NĂM 2017" src="https://drive.gianhangvn.com/image/12-tinh-nang-noi-bat-giup-kia-optima-nam-trong-top-xe-tot-nhat-nam-2017-695906j23730x3.jpg" />
                                <span class="style-news"></span>
                                </a>
                            </div>
                            <div class="block-caption">
                                <h4 class="block-title title-other-news"><a title="12 TÍNH NĂNG NỔI BẬT GIÚP KIA OPTIMA NẰM TRONG TỐP XE TỐT NHẤT NĂM 2017" href="12-tinh-nang-noi-bat-giup-kia-optima-nam-trong-top-xe-tot-nhat-nam-2017-54449u.html">12 TÍNH NĂNG NỔI BẬT GIÚP KIA OPTIMA NẰM TRONG TỐP XE TỐT NHẤT NĂM 2017</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>