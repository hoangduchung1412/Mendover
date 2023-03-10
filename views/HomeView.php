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
      <h2 class="header-prd">S???n ph???m b??n ch???y</h2>
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
                <a class="buy-clk" href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>">Chi ti???t</a>
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
          <a class="" href="index.php?controller=products&action=category&id=0">Xem th??m</a>
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
                <h4>Mi???n ph?? v???n chuy???n</h4>
                <p>Ch??ng t??i v???n chuy???n mi???n ph?? v???i ????n h??ng tr??n 1000.000 ??</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="about-info">
              <div class="about-img">
                <a class="img_2"></a>
              </div>
              <div class="about-item">
                <h4>Khuy???n m???i gi?? tr???</h4>
                <p>Gi???m gi?? t???i 30% v??o c??c d???p l??? l???n trong n??m v?? m???i d???p cu???i th??ng</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="about-info">
              <div class="about-img">
                <a class="img_3"></a>
              </div>
              <div class="about-item">
                <h4>H??? tr??? ?????i tr???</h4>
                <p>H??? tr??? mi???n ph?? ?????i tr??? s???n ph???m trong 30 ng??y ?????u ti??n t??? khi mua h??ng</p>
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
      <h2 class="header-ppl">S???n ph???m n???i b???t</h2>
      <div class="slide-ppl">
        <div class="row multi-columns-row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="list-item">
              <ul>
                <li class="active">
                  <span class="icon_1"></span>
                  <a href="#" class="active">C??n h??? cao c???p</a>
                  <span class="sub-minus"></span>
                </li>
                <li class="">
                  <span class="icon_2"></span>
                  <a href="#" class="">C??n h??? chung c??</a>
                </li>
                <li class="">
                  <span class="icon_3"></span>
                  <a href="#" class="">C??n h??? d??? ??n n???n</a>
                </li>
                <li class="">
                  <span class="icon_4"></span>
                  <a href="#" class="">V??n ph??ng cao ???c</a>
                </li>
                <li class="">
                  <span class="icon_5"></span>
                  <a href="#" class="">Nh?? ??? khu cao t???ng</a>
                </li>
                <li class="">
                  <span class="icon_6"></span>
                  <a href="#" class="">Nh?? ??? khu ???? th???</a>
                </li>
                <li>
                  <span class="icon_7"></span>
                  <a href="#">C??n h??? khu ngh??? d?????ng</a>
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
                        <a class="buy-clk" href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>">Chi ti???t</a>
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
              <p class="desc">T??i r???t h??i l??ng v???i d???ch v??? chuy??n nghi???p v?? ch???t l?????ng s???n ph???m c??ng nh?? th??i ????? ph???c v??? c???a Mendover. Ch???c ch???n r???ng t??i s??? quay l???i ????y nhi???u l???n n???a ????? mua h??ng.</p>
              <p class="name">Ph???m Nh???t Th??nh</p>
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
      <h2 class="header-prm">S???n ph???m khuy???n m??i</h2>
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
                      <a class="buy-clk" href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>">Chi ti???t</a>
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
  <h2 class="header-ptn"> ?????I T??C </h2>
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
            <h2 class="title">Tr???i nghi???m d???ch v??? <br> <strong> c??ng MENDOVER ngay </strong> </h2>
          </div>
          <div class="col-lg-6 col-md-7">
            <p class="mb-1 text-white"> Th??ng tin li??n h??? </p>
              <div class="form-group">
              <input type="text" placeholder="Email/S??? ??i???n tho???i">
              <button class="savePhone"> G???i </button>
            </div>
          </div>
        </div>
      </div>
    </div>
