<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangChu.php";
 ?>
 <!-- BANNER -->
 <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
      </div>
    </div>
  </div>

  <!-- PRODUCT -->
  <div class="product">
    <div class="container">
      <div class="box-product">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <a href="#"><img src="assets/frontend/images/product_1.webp"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <a href="#"><img src="assets/frontend/images/product_2.webp"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <a href="#"><img src="assets/frontend/images/product_3.webp"></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- HOT PRODUCT -->
  <div class="container">
    <div class="hot-product-wrap">
      <h2 class="header-prd">Sản phẩm bán chạy</h2>
      <div class="slide-prd">
        <div class="row multi-columns-row">
        <?php foreach($hotProduct as $rows): ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <div class="product">
              <div class="img">
                <img src="assets/upload/products/<?php echo $rows->photo; ?>" class="img-fluid">
              </div>
              <div class="shop-icon">
                <?php if($rows->discount > 0): ?>
                <span class="hv-price"><?php echo $rows->discount; ?> %</span>
                <?php endif; ?>
              </div>
              <div class="buy-btn">
                <a class="buy-clk" href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">Mua ngay</a>
                <a class="buy-clk" href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>">Chi tiết</a>
              </div>
              <div class="infor">
                <p class="name"><a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><?php echo $rows->name; ?></a></p>
                <p class="vote">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </p>
                <div class="price">
                  <p class="new"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?></p>
                  <?php if($rows->discount > 0): ?>
                  <p class="old"><?php echo number_format($rows->price); ?></p>
                  <?php endif; ?>
                </div>
              </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

        <div class="more">
          <a class="" href="index.php?controller=products&action=category&id=0">Xem thêm</a>
        </div>
      </div>

    </div>
  </div>


  <!-- ABOUT -->
  <div class="about-us">
    <div class="container">
      <div class="about-content">
        <div class="row multi-columns-row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="about-info">
              <div class="about-img">
                <a class="img_1"></a>
              </div>
              <div class="about-item">
                <h4>Miễn phí vận chuyển</h4>
                <p>Chúng tôi vận chuyển miễn phí với đơn hàng trên 1000.000 đ</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="about-info">
              <div class="about-img">
                <a class="img_2"></a>
              </div>
              <div class="about-item">
                <h4>Khuyến mại giá trị</h4>
                <p>Giảm giá tới 30% vào các dịp lễ lớn trong năm và mỗi dịp cuối tháng</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="about-info">
              <div class="about-img">
                <a class="img_3"></a>
              </div>
              <div class="about-item">
                <h4>Hỗ trợ đổi trả</h4>
                <p>Hỗ trợ miễn phí đổi trả sản phẩm trong 30 ngày đầu tiên từ khi mua hàng</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- POPULAR PRODUCT -->
  <div class="container">
    <div class="popular-product-wrap">
      <h2 class="header-ppl">Sản phẩm nổi bật</h2>
      <div class="slide-ppl">
        <div class="row multi-columns-row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="list-item">
              <ul>
                <li class="active">
                  <span class="icon_1"></span>
                  <a href="#" class="active">Căn hộ cao cấp</a>
                  <span class="sub-minus"></span>
                </li>
                <li class="">
                  <span class="icon_2"></span>
                  <a href="#" class="">Căn hộ chung cư</a>
                </li>
                <li class="">
                  <span class="icon_3"></span>
                  <a href="#" class="">Căn hộ dự án nền</a>
                </li>
                <li class="">
                  <span class="icon_4"></span>
                  <a href="#" class="">Văn phòng cao ốc</a>
                </li>
                <li class="">
                  <span class="icon_5"></span>
                  <a href="#" class="">Nhà ở khu cao tầng</a>
                </li>
                <li class="">
                  <span class="icon_6"></span>
                  <a href="#" class="">Nhà ở khu đô thị</a>
                </li>
                <li>
                  <span class="icon_7"></span>
                  <a href="#">Căn hộ khu nghỉ dưỡng</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-8 col-md-8">
            <div class="product-ppl">
              <?php foreach($hotnewProduct as $rows): ?>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="product">
                      <div class="img">
                        <img src="assets/upload/products/<?php echo $rows->photo; ?>" class="img-fluid">
                      </div>
                      <div class="shop-icon">
                        <?php if($rows->discount > 0): ?>
                        <span class="hv-price"><?php echo $rows->discount; ?> %</span>
                        <?php endif; ?>
                      </div>
                      <div class="buy-btn">
                        <a class="buy-clk" href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">Mua ngay</a>
                        <a class="buy-clk" href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>">Chi tiết</a>
                      </div>
                      <div class="infor">
                        <p class="name"><a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><?php echo $rows->name; ?></a></p>
                        <!-- <p class="vote">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                        </p> -->
                        <div class="price">
                          <p class="new"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?></p>
                          <?php if($rows->discount > 0): ?>
                          <p class="old"><?php echo number_format($rows->price); ?></p>
                          <?php endif; ?>
                        </div>
                      </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- REVIEW -->
  <div class="review">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="author-slider">
            <a href="#"><img src="assets/frontend/images/author1.webp"></a>
            <div class="author-infor">
              <p class="desc">Tôi rất hài lòng với dịch vụ chuyên nghiệp và chất lượng sản phẩm cũng như thái độ phục vụ của Mendover. Chắc chắn rằng tôi sẽ quay lại đây nhiều lần nữa để mua hàng.</p>
              <p class="name">Phạm Nhật Thành</p>
              <p class="job">Web designer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- PROMOTION PRODUCT -->
  <div class="container">
    <div class="prm-product">
      <h2 class="header-prm">Sản phẩm khuyến mãi</h2>
      <div class="slide-show">
        <div class="prev"><i class="prm-icon fa-solid fa-angle-left"></i></div>
        <div class="next"><i class="prm-icon fa-solid fa-angle-right"></i></div>
      </div>
      <div class="slide-prm">
        <div class="row">
            <?php foreach($discountProduct as $rows): ?>
            <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="product">
                    <div class="img">
                      <img src="assets/upload/products/<?php echo $rows->photo; ?>" class="img-fluid">
                    </div>
                    <div class="shop-icon">
                      <?php if($rows->discount > 0): ?>
                      <span class="hv-price"><?php echo $rows->discount; ?> %</span>
                      <?php endif; ?>
                    </div>
                    <div class="buy-btn">
                      <a class="buy-clk" href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">Mua ngay</a>
                      <a class="buy-clk" href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>">Chi tiết</a>
                    </div>
                    <div class="infor">
                      <p class="name"><a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><?php echo $rows->name; ?></a></p>
                      <p class="vote">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                      </p>
                      <div class="price">
                        <p class="new"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?></p>
                        <?php if($rows->discount > 0): ?>
                        <p class="old"><?php echo number_format($rows->price); ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- PARTNER -->
  <h2 class="header-ptn"> ĐỐI TÁC </h2>
  <div class="partner">
    <div class="container">
      <div class="slide-partner">
        <div class="ptn-item">
          <div class="img">
            <img src="assets/frontend/images/ptn1.webp">
          </div>
        </div>
        <div class="ptn-item">
          <div class="img">
            <img src="assets/frontend/images/ptn2.webp">
          </div>
        </div>
        <div class="ptn-item">
          <div class="img">
            <img src="assets/frontend/images/ptn3.webp">
          </div>
        </div>
        <div class="ptn-item">
          <div class="img">
            <img src="assets/frontend/images/ptn4.webp">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CONTACT -->
  <div class="contact contact-index">
      <div class="container">
        <div class="row contact-row">
          <div class="col-lg-6 col-md-5">
            <h2 class="title">Trải nghiệm dịch vụ <br> <strong> cùng MENDOVER ngay </strong> </h2>
          </div>
          <div class="col-lg-6 col-md-7">
            <p class="mb-1 text-white"> Thông tin liên hệ </p>
              <div class="form-group">
              <input type="text" placeholder="Email/Số điện thoại">
              <button class="savePhone"> Gửi </button>
            </div>
          </div>
        </div>
      </div>
    </div>
