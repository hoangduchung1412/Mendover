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
    			<li><a href="index.php?controller=products&action=category&id=0">Tất cả sản phẩm
    			<i class="fa-solid fa-angle-right"></i>
    			</a></li>
    			<li><a href="#" style="color: #bda87f;"><?php echo $record->name ?></a></li>
    		</ul>
    	</div>
    </div>
	</div>

	<!-- PRODUCT DETAIL -->
	<div class="product-detail">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-lg-5 col-md-5">
					<div class="item">
						<img class="sp-img" src="assets/upload/products/<?php echo $record->photo; ?>">
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-lg-7 col-md-7">
					<div class="product-details-area">
						<div class="product-description">
							<h1 class="name"><?php echo $record->name; ?></h1>
							<div class="short-description">
								<p class="stock-status">Còn hàng</p>
								<div class="price-box">
									<p class="new"><?php echo number_format($record->price - ($record->price * $record->discount)/100); ?></p>
		                            <?php if($record->discount > 0): ?>
		                            <p class="old"><?php echo number_format($record->price); ?></p>
		                            <?php endif; ?>
								</div>
								<p class="des-content text3line">	
									   <?php echo $record->description; ?>	
								</p>
							</div>
							<div class="form-action">
								<div class="add-to-cart">
									<label for="qty">Số lượng: </label>
									<div class="pull-left">
										<div class="pull-left">
											<input onkeyup="valid(this,'numbers')" min="1" type="text" title="Số lượng" value="1" id="qtym" name="quantity" class="input-text">
											<div class="btn-count">
												<button onclick="var result = document.getElementById('qtym'); var qtypro =result.value; if( !isNaN(qtypro)) result.value++; return false;" type="button">
													<i class="fa-solid fa-angle-up"></i>
												</button>
												<button onclick="var result = document.getElementById('qtym'); var qtypro =result.value; if( !isNaN(qtypro) && qtypro > 1) result.value--; return false;" type="button">
													<i class="fa-solid fa-angle-down"></i>
												</button>
											</div>
										</div>
									</div>
								</div>

								<div class="qnt-addcart clearfix">
									<button class="button-detail-product" type="submit"><a href="index.php?controller=cart&action=create&id=<?php echo $record->id ?>">Mua ngay</a></button>
								</div>
							</div>

							<div class="detail-call">
								<a href="#">
									<div class="callphoneicon"><i class="fa-solid fa-phone"></i></div>
									Gọi ngay 19006750
									<br>
									<span>(Đặt hàng nhanh chóng)</span>
								</a>
							</div>

							<div class="social-media">
								<ul class="media-icon2">
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-instagram-square"></i></a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- PRODUCT OVERVIEW TAB -->
	<div class="product-overview-tab">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="detail-info">
					<nav class="d-flex">
						<div class="nav nav-tabs tabs-title" id="nav-tab" role="tablist">
							<a class="nav-link active" id="nav-tt-tab" data-toggle="tab" href="#nav-dt" role="tab" aria-controls="nav-dt" aria-selected="true">THÔNG TIN SẢN PHẨM</a>
							<a class="nav-link" id="nav-gt-tab" data-toggle="tab" href="#nav-gt" role="tab" aria-controls="nav-ts" aria-selected="false">GIỚI THIỆU</a>
							<a class="nav-link" id="nav-tag-tab" data-toggle="tab" href="#nav-tag" role="tab" aria-controls="nav-bq" aria-selected="false">TAG</a>
						</div>
					</nav>
					<div class="tab-content current" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-dt" role="tabpanel" aria-labelledby="nav-dt-tab">
							<h1 style="text-align: center;"><?php echo $record->name; ?></h1>

							<p style="text-align: justify;"><?php echo $record->description; ?></p>

							<p style="text-align: center;"><img src="assets/upload/products/<?php echo $record->photo; ?>"></p>
							<p style="text-align: justify;">
								✓ Diện tích: 101m²
								<br>
								✓ Tầng: 15
								<br>
								✓ Giá bán: 250 triệu VNĐ (bao gồm VAT + 02 % Phí Bảo trì)
								<br>
								✓ Nội thất: nhà trống
								<br>
								✓ Bố cục căn hộ: 02 PN + 02 WC + Bếp + Phòng Khách 
								<br>
								✓ Tiện ích: Hồ bơi, Spa, Sauna, phòng tập gym, trường học, công viên, sân chơi trẻ em, siêu thị, nhà hàng, hệ thống an ninh thẻ từ, bảo vệ 24h/24h.
							</p>


						</div>
						<div class="tab-pane fade" id="nav-gt" role="tabpanel" aria-labelledby="nav-gt-tab">
							
						</div>
						<div class="tab-pane fade" id="nav-tag" role="tabpanel" aria-labelledby="nav-tag-tab">
							<p>Căn hộ</p>
						</div>
					</div>
				</div>
			</div>
		</div>
				</div>
			</div>
	
	<!-- RELATE PRODUCT -->
	<div class="container">
    <div class="prm-product">
      <h2 class="header-prm">Sản phẩm khuyến mãi</h2>
      <div class="slide-show">
        <div class="prev"><i class="prm-icon fa-solid fa-angle-left"></i></div>
        <div class="next"><i class="prm-icon fa-solid fa-angle-right"></i></div>
      </div>
      <div class="slide-prm">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="product">
              <div class="img">
                <img src="assets/frontend/images/prm_1.webp" class="img-fluid">
              </div>
              <div class="shop-icon">
                <span class="hv-price"> - 2 % </span>
              </div>
              <div class="buy-btn">
                <a class="buy-clk" href="#">Mua ngay</a>
                <a class="buy-clk" href="#">Chi tiết</a>
              </div>
              <div class="infor">
                <p class="name"><a href="#">Nhà đẹp 2 tầng với thiết kế gần gũi thiên nhiên</a></p>
                <p class="vote">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </p>
                <div class="price">
                  <p class="new">5.000.000.000đ</p>
                  <p class="old">5.100.000.000đ</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="product">
              <div class="img">
                <img src="assets/frontend/images/prm_2.webp" class="img-fluid">
              </div>
              <div class="shop-icon">
                <span class="hv-price"> - 7 % </span>
              </div>
              <div class="buy-btn">
                <a class="buy-clk" href="#">Mua ngay</a>
                <a class="buy-clk" href="#">Chi tiết</a>
              </div>
              <div class="infor">
                <p class="name"><a href="#">Mẫu nhà phố đẹp 5 tầng với tông màu đơn sắc</a></p>
                <p class="vote">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </p>
                <div class="price">
                  <p class="new">2.500.000.000đ</p>
                  <p class="old">2.700.000.000đ</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="product">
              <div class="img">
                <img src="assets/frontend/images/prm_3.webp" class="img-fluid">
              </div>
              <div class="shop-icon">
                <span class="hv-price"> - 4 % </span>
              </div>
              <div class="buy-btn">
                <a class="buy-clk" href="#">Mua ngay</a>
                <a class="buy-clk" href="#">Chi tiết</a>
              </div>
              <div class="infor">
                <p class="name"><a href="#">Bán căn hộ Pearl Plaza 2 phòng ngủ tầng 15</a></p>
                <p class="vote">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </p>
                <div class="price">
                  <p class="new">250.000.000đ</p>
                  <p class="old">260.000.000đ</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="product">
              <div class="img">
                <img src="assets/frontend/images/prm_4.webp" class="img-fluid">
              </div>
              <div class="shop-icon">
                <span class="hv-price"> - 6 % </span>
              </div>
              <div class="buy-btn">
                <a class="buy-clk" href="#">Mua ngay</a>
                <a class="buy-clk" href="#">Chi tiết</a>
              </div>
              <div class="infor">
                <p class="name"><a href="#">Căn hộ 3PN tại Pearl Plaza</a></p>
                <p class="vote">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </p>
                <div class="price">
                  <p class="new">3.000.000.000đ</p>
                  <p class="old">3.200.000.000đ</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="middle" style="margin-top: 20px;"><div style="text-align: center;" class="fb-comments" data-href="http://dantri.com.vn" data-width="" data-numposts="5"></div></div>