<?php 
//load file layout vao day
self::$fileLayout = "LayoutTrangChu.php";
?>
<!-- BANNER -->
	<div class="banner">
		<script type="text/javascript">
        $(document).ready(function(){
            //khai bao array chua danh sach cac duong dan anh
            var slide = new Array();
            slide[0] = "assets/frontend/images/banner1.webp";
            slide[1] = "assets/frontend/images/banner2.webp";
            slide[2] = "assets/frontend/images/banner3.webp";
            //khai bao bien n luu vi tri anh
            var n = 0;
            setInterval(function(){
                //tac dong vao the html co id=slide-img
                $("#slide-img").fadeOut(function(){
                    $("#slide-img").attr("src",slide[n]);
                    //hien thi anh
                    $("#slide-img").fadeIn();
                    n++;
                    //neu n o vi tri anh cuoi cung thi reset n
                    if(n == slide.length)
                       n = 0;
                });
            },5000);
        }); 
    </script>
    <div class="box-slide">
    	<img src="assets/frontend/images/banner1.webp" id="slide-img" class="d-block w-100" alt="...">
    </div>
    <div class="breadcrumbs">
    	<div class="container">
    		<ul>
    			<li class="home"><a href="index.php">
    			Trang chủ
    			<i class="fa-solid fa-angle-right"></i>
    			</a></li>
    			<li><a href="index.php?controller=news">Tin tức</a></li>
    		</ul>
    	</div>
    </div>
	</div>

	<!-- NEWS LIST -->
	<div class="product-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tzshop-aside">
				<div class="box-product-list">
				<div class="box-title">
					<h2>
						<i class="fa-solid fa-bars"></i>
						Danh mục tin tức
					</h2>
				</div>

				<div class="list-product-item" style="display: block;">
					<ul>
						<li class="li_lv1"><a href="#">Bất động sản</a></li>
						<li class="li_lv1"><a href="#">Tin nổi bật</a></li>								
					</ul>
				</div>
				</div>

				<div class="widget-bestsellers">
					<div class="title-widget">
						<h2>Tin mới cập nhật</h2>
					</div>
					<ul>
						<li>
							<div class="as-bestsellers-thumb">
								<a href="#"><img src="assets/frontend/images/news/news_img1.webp"></a>
							</div>
							<div class="as-bestsellers-content">
								<h3>
									<a href="#" class="text2line">Nội thất căn hộ với những màu sắc tương phản</a>
									<div class="date">24/03/2016</div>
								</h3>
							</div>
						</li>

						<li>
							<div class="as-bestsellers-thumb">
								<a href="#"><img src="assets/frontend/images/news/news_img2.webp"></a>
							</div>
							<div class="as-bestsellers-content">
								<h3>
									<a href="#" class="text2line">Căn hộ chung cư đẹp với phong cách Scandinavian</a>
									<div class="date">24/03/2016</div>
								</h3>
							</div>
						</li>

						<li>
							<div class="as-bestsellers-thumb">
								<a href="#"><img src="assets/frontend/images/news/news_img3.webp"></a>
							</div>
							<div class="as-bestsellers-content">
								<h3>
									<a href="#" class="text2line">Mê mẩn với căn hộ chung cư có thiết kế nội thất hoàn hảo</a>
									<div class="date">24/03/2016</div>
								</h3>
							</div>
						</li>

						<li>
							<div class="as-bestsellers-thumb">
								<a href="#"><img src="assets/frontend/images/news/news_img4.webp"></a>
							</div>
							<div class="as-bestsellers-content">
								<h3>
									<a href="#" class="text2line">Mẫu căn hộ cao cấp với nội thất gỗ ấm cúng</a>
									<div class="date">24/03/2016</div>
								</h3>
							</div>
						</li>			
					</ul>
				</div>

				<div class="banner_collection">
					<a href="#"><img src="assets/frontend/images/banner_product_sell.webp"></a>
				</div>
				</div>


				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="row grid-margin">
						<?php foreach($data as $rows): ?>
						<div class="col-lg-12 col-md-12">
							<div class="blog-item">
								<div class="pageblog-thumb">
									<div class="image"><a href="news/detail/<?php echo $rows->id ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><img src="assets/upload/news/<?php echo $rows->photo  ?>"></a></div>
									<a title="Nội thất căn hộ với những màu sắc tương phản" class="tzblog-view" href="news/detail/<?php echo $rows->id ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><i class="fa-solid fa-magnifying-glass"></i></a>
								</div>
								<h3 class="article_name"><a href="news/detail/<?php echo $rows->id ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><?php echo $rows->name ?></a></h3>
								<span class="tzblog-meta">
									<em>
										<i class="fa-solid fa-user"></i>
										Hoàng Hùng
									</em>
									<em>
										<i class="fa-solid fa-clock"></i>
										26/03/2016
									</em>
								</span>
								<div class="action-button-hidden">
									<p class="description"><?php echo $rows->description; ?></p>
									<div class="quickviewbtn">
										<a class="color-tooltip" data-toggle='tooltip' href="news/detail/<?php echo $rows->id ?>/<?php echo Unicode::removeUnicode($rows->name); ?>">Đọc tiếp</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
					<ul class="pagination pull-left" style="margin-top: 0px !important;">
						<li class="page-item"><a class="page-link" href="#">Trang</a></li>
						<?php for($i = 1; $i <=  $numPage; $i++): ?>
						<li class="page-item"><a class="page-link" href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php endfor; ?>
					</ul>
					<style type="text/css">
						.pagination {display: flex; margin-bottom: 20px;}
						.pagination a {font-size: 16px; color: #333;}
					</style>
						</div>
					</div>
			</div>
		</div>
	</div>