<div id="main-content" class="wrap">
    <div class="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12" style="margin-top: 10px;">
            <ul class="top-left">
              <?php if(isset($_SESSION['customer_email'])): ?>
                <li><a class="login-btn" href="#">Xin chào <?php echo $_SESSION['customer_email']; ?></a></li>
                <li><a class="login-btn" href="index.php?controller=account&action=logout">Đăng xuất</a></li>
                <?php else: ?>
                <li><a class="login-btn" href="account/login">Đăng nhập</a></li>
                <li><a class="register-btn" href="account/register">Đăng ký</a></li>
            <?php endif; ?>
            </ul>
          </div>
          <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
            <div class="search-bar header-search">
              <input autocomplete="off" type="text" onkeypress="searchForm(event);" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
              <button type="submit">
              <i class="search-btn-icon fa-solid fa-magnifying-glass" onclick="return search();"></i>
            </div>
            <div class="smart-search">
              <ul>
                <!-- <li><img src="http://localhost/devpro/php60/php60_project_9/assets/upload/products/1654763864_prd17.webp"><a href="#">Sản phẩm</a></li>
                <li><img src="http://localhost/devpro/php60/php60_project_9/assets/upload/products/1654763864_prd17.webp"><a href="#">Sản phẩm</a></li>
                <li><img src="http://localhost/devpro/php60/php60_project_9/assets/upload/products/1654763864_prd17.webp"><a href="#">Sản phẩm</a></li> -->
              </ul>
            </div>
          </div>
          <style type="text/css">
            .header-search{position: relative;}
            .smart-search {
              position: absolute;
              width: 95%;
              background: #fff;
              height: 350px;
              overflow: scroll;
              display: none;
              z-index: 9;
              font-size: 14px;
              padding-left: 10px;
            }
            .smart-search ul {
              padding: 0px;
              margin: 0px;
              list-style: none;
            }
            .smart-search ul li {
              border-bottom: 1px solid #dddddd;
            }
            .smart-search img {
              width: 70px;
              margin-right: 5px;
            }
          </style>
          <script type="text/javascript">
            //khi an phim enter thi nhay den trang tim kiem theo ten
            function searchForm(event) {
              //bat phim enter tu ban phim (phim enter co keycode = 13)
              if(event.keyCode == 13) {
                //lay gia tri cua the html co id=key
                let key = document.getElementById('key').value;
                location.href = "index.php?controller=search&action=name&key="+key;
              }
            }
            function search() {
              //lay gia tri the html co id bang key
              let key = document.getElementById('key').value;
              //di chuyen den url tim kiem
              location.href = "index.php?controller=search&action=name&key="+key;
            }
            //---
            // de thuc hien cac dong code ben duoi thi website can phai load thu vien jquery
            /*
              de kiem tra xem website da load thu vien jquery chua thi thuc hien test bang doan code sau
            */
            // $(document).ready(function(){alert('jquery da duoc load vao trang');});
            $(".input-control").keyup(function(){
                var strKey = $("#key").val();
                if(strKey.trim() == ""){
                  $(".smart-search").attr("style","display:none;");
                }else{
                  $(".smart-search").attr("style","display:block;");
                  //---
                  //lay du lieu bang ajax
                  $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
                    //clear cac the li ben trong ul
                    $(".smart-search ul").empty();
                    //them du lieu vao ul
                    $(".smart-search ul").append(data);
                  });
                  //---
                }
              });
          </script>
          <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" style="margin-top: 10px;">
            <ul class="top-right">
              <?php 
                $numberProduct = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
              ?>
              <li class="top-item"><a class="top-cart" href="cart"><i class="cart-btn fa-solid fa-cart-shopping"></i><span>Giỏ hàng: </span> (<?php echo $numberProduct; ?>) sản phẩm</a></a>
              <div class="cart-product">
                <?php foreach($_SESSION['cart'] as $product): ?>
                <div class="row">  
                  <div class="col-md-3 col-lg-3">
                    <div class="image-cart"><a href="index.php?controller=products&action=detail&id=<?php echo $product['id'] ?>"><img src="assets/upload/products/<?php echo $product['photo']; ?>" style="width: 70px" class="img-responsive"></a></div>
                  </div>
                  <div class="col-md-7 col-lg-7">
                    <a href="image-cart"><a href="index.php?controller=products&action=detail&id=<?php echo $product['id'] ?>" class="btn-name"><?php echo $product['name']; ?></a>
                    <p><?php echo $product['number']; ?> * <?php echo number_format(($product['price'] - ($product['price'] * $product['discount'])/100)); ?></p>
                  </div>
                  <div class="col-md-2 col-lg-2">
                    <div><a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>"><i class="cart-delete-btn fa fa-times"></i></a></div>
                  </div>
                </div>
                <?php endforeach; ?>
                <div class="checkout-btn"><a href="index.php?controller=checkout" class="button cart-checkout">Thanh toán</a></div>
               </div>
              </div> 
            </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- MENU -->
    <header class="">
      <nav class="container">
        <div class="logo">
          <a href="index.php"><img src="assets/frontend/images/logo.webp"></a>
        </div>
        <div class="menu">
          <ul>
            <li class=""><a href="home">Trang chủ</a></li>
            <li><a href="index.php?controller=description">Giới thiệu</a></li>
            <li><a href="index.php?controller=products&action=category&id=0">
              Sản phẩm
              <i class="menu-down fa-solid fa-angle-down"></i>
            </a>
              <ul>
                 <?php 
                    //co the ket noi csdl de truy van o day
                    $conn = Connection::getInstance();
                    $query = $conn->query("select * from categories where parent_id = 0");
                    $categories = $query->fetchAll(PDO::FETCH_OBJ);
                  ?>
                  <?php foreach($categories as $rows): ?> 
                  <li><a href="products/category/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name);  ?>"><?php echo $rows->name; ?> <i class="menu-right fa-solid fa-angle-right"></i></a>
                  <?php 
                      $querySub = $conn->query("select * from categories where parent_id = {$rows->id} "); 
                     $categoriesSub = $querySub->fetchAll(PDO::FETCH_OBJ);
                   ?>
                    <ul>
                      <?php foreach($categoriesSub as $rowsSub): ?>
                      <li><a href="products/category/<?php echo $rowsSub->id; ?>/<?php echo Unicode::removeUnicode($rowsSub->name);  ?>"><?php echo $rowsSub->name; ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </li>              
                  <?php endforeach; ?>              
              </ul>
            </li>
            <li><a href="news">
              Tin tức
              <i class="menu-down fa-solid fa-angle-down"></i>
            </a>
              <ul>
                <li><a href="#">Bất Động Sản</a></li>
                <li><a href="#">Tin Nổi Bật</a></li>
              </ul>
            </li>
            <li><a href="contact">Liên hệ</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>