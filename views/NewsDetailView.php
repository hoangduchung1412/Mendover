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
    			<li><a href="index.php?controller=news">Tin tức
    			<i class="fa-solid fa-angle-right"></i>
    			</a></li>
    			<li><a href="#"><?php echo $record->name; ?></a></li>
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
						<div class="col-lg-12 col-md-12">
							<div class="tzpost-content">
								<h2><?php echo $record->name; ?></h2>
								<p class="tzblog-meta">
									<em>
										<i class="fa-solid fa-user"></i>
										Hoàng Hùng
									</em>
									<em>
										<i class="fa-solid fa-clock"></i>
										26/03/2016
									</em>
								</p>
								<p style="text-align: center;"><img src="assets/upload/news/<?php echo $record->photo  ?>"></p>
								<p style="text-align: justify;"><?php echo $record->content; ?></p>	
								<div class="tag_article"></div>
							</div>
							<div class="social-media">
								<ul class="media-icon2">
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-instagram-square"></i></a></li>
								</ul>
							</div>
							<div class="tzcomments-area">
								<h3 class="tz-title-comment">6 bình luận</h3>
								<ol class="comment-list">
									<li>
										<div class="comment-body">
											<div class="comment-content">
												<strong>Vũ Hoài An</strong>
												<span class="comment-metadata">
													17/06/2022
													<a href="#">Trả lời</a>
												</span>
												<p>Không gian nhà bếp có thiết kế hình chữ L gọn gàng và được đặt tại một góc của ngôi nhà để không chiếm quá nhiều diện tích. Không gian phòng ngủ ấm cúng được bao bọc bởi trần, sàn và tường gỗ kết hợp với hệ thống ánh sáng âm sàn mang lại một cảm giác thư giãn tuyệt vời cho không gian.</p>
											</div>
										</div>
									</li>
									<li>
										<div class="comment-body">
											<div class="comment-content">
												<strong>Hoàng Đức Hùng</strong>
												<span class="comment-metadata">
													16/06/2022
													<a href="#">Trả lời</a>
												</span>
												<p>Tuyệt vời!</p>
											</div>
										</div>
									</li>
									<li>
										<div class="comment-body">
											<div class="comment-content">
												<strong>Đức</strong>
												<span class="comment-metadata">
													17/06/2022
													<a href="#">Trả lời</a>
												</span>
												<p>Good!</p>
											</div>
										</div>
									</li>
									<li>
										<div class="comment-body">
											<div class="comment-content">
												<strong>Vinh Đỗ</strong>
												<span class="comment-metadata">
													17/06/2022
													<a href="#">Trả lời</a>
												</span>
												<p>tuyệt vời cho không gian. Tời Bài viết thật tuyệt vời</p>
											</div>
										</div>
									</li>
								</ol>
							</div>
							<div class="pagination-product">
								<ul>
									<li class="active"><a href="product1.html">1</a></li>
									<li class=""><a href="product2.html">2</a></li>
									<li class=""><a href="product3.html">3</a></li>
									<li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
								</ul>
							</div>
							<h3 class="tz-title-comment">Viết bình luận của bạn</h3>
							<div class="comment-respond">
								<form>
									<div class="row">
										<div class="col-lg-6 col-md-6" style="margin-bottom: 15px;">
											<label>
												Họ và tên
												<span class="required">*</span>
											</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-lg-6 col-md-6" style="margin-bottom: 15px;">
											<label>
												Email
												<span class="required">*</span>
											</label>
											<input type="email" class="form-control">
										</div>
										<div class="col-lg-12 col-md-12">
											<label>
											Viết bình luận
											<span class="required">*</span>
											<textarea rows="5" cols="120" style="min-height: 100px;" id="comment" class="form-control " title="Bình luận" name="Body"></textarea>
											<button type="submit" value="gửi bình luận" class="button_height_44" style="margin-top:20px;">Gửi bình luận</button>
										</label>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

						</div>
					</div>
			</div>
		</div>
	</div>