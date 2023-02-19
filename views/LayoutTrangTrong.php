<!DOCTYPE html>
<html lang="en">

<head>
	<base href="http://localhost/devpro/php60/php60_project_10/">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Slick -->
	<link rel="stylesheet" type="text/css" href="assets/frontend/slick/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="assets/frontend/slick/slick/slick-theme.css" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/global.css">
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/responsive.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/frontend/fonts/fontawesome-free-6.1.0-web/css/all.min.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
    <link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
	<!-- Jquery -->
	<script type="text/javascript" src="assets/frontend/js/jquery-3.6.0.js"></script>
	<link rel="icon" href="images/AnhCat/logo.png" type="image/png">
	<title>BDS</title>
</head>

<body>
 <!-- plugin chat -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62af10af7b967b1179954dea/1g5tticce';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- /plugin chat -->
<!-- Facebook comment -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="xPiEC3Wu"></script>
<!-- /facebook comment -->
	<?php include "views/HeaderView.php"; ?>
	

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
   
	</div>

	<!-- PRODUCT LIST -->
	<div class="product-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tzshop-aside">
				<div class="box-product-list">
				<div class="box-title">
					<h2>
						<i class="fa-solid fa-bars"></i>
						Danh mục sản phẩm
					</h2>
				</div>

				<div class="list-product-item" style="display: block;">
					<ul>
                 <?php 
                    //co the ket noi csdl de truy van o day
                    $conn = Connection::getInstance();
                    $query = $conn->query("select * from categories where parent_id = 0");
                    $categories = $query->fetchAll(PDO::FETCH_OBJ);
                  ?>
                  <?php foreach($categories as $rows): ?> 
                  <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?> <i class="menu-right fa-solid fa-angle-right"></i></a>
                  <?php 
                      $querySub = $conn->query("select * from categories where parent_id = {$rows->id} "); 
                     $categoriesSub = $querySub->fetchAll(PDO::FETCH_OBJ);
                   ?>
                    <ul>
                    <?php foreach($categoriesSub as $rowsSub): ?>
                      <li><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </li>              
                  <?php endforeach; ?>              
              </ul>
				</div>
				</div>

				<div class="panel panel-default" style="margin-top:15px;">
		          <div class="panel-heading"> Tìm theo mức giá </div>
		          <div class="panel-body">
		            <ul class="list-group" style="border:0px;">
		              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
		                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
		              </li>
		              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
		              </li>
		              <li class="list-group-item" style="border:0px; text-align:center">
		                <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
		              </li>
		            </ul>
		          </div>
		        </div>

				<div class="widget-bestsellers">
					<div class="title-widget">
						<h2>Sản phẩm bán chạy</h2>
					</div>
					<ul>
						<li>
							<div class="as-bestsellers-thumb">
								<a href="#"><img src="assets/frontend/images/tgp_1.webp"></a>
							</div>
							<div class="as-bestsellers-content">
								<h3>
									<a href="#" class="text2line">Căn hộ 2 PN tại Pearl Plaza</a>
									<div class="bs-price">250.000.000</div>
								</h3>
							</div>
						</li>

						<li>
							<div class="as-bestsellers-thumb">
								<a href="#"><img src="assets/frontend/images/tgp_2.webp"></a>
							</div>
							<div class="as-bestsellers-content">
								<h3>
									<a href="#" class="text2line">Căn hộ 3 PN tại Pearl Plaza</a>
									<div class="bs-price-new">3.000.000.000</div>
									<div class="bs-price-old">3.200.000.000</div>
								</h3>
							</div>
						</li>

						<li>
							<div class="as-bestsellers-thumb">
								<a href="#"><img src="assets/frontend/images/tgp_3.webp"></a>
							</div>
							<div class="as-bestsellers-content">
								<h3>
									<a href="#" class="text2line">Bán căn hộ SSG Tower 3PN</a>
									<div class="bs-price">3.300.000.000</div>
								</h3>
							</div>
						</li>

						<li>
							<div class="as-bestsellers-thumb">
								<a href="#"><img src="assets/frontend/images/tgp_4.webp"></a>
							</div>
							<div class="as-bestsellers-content">
								<h3>
									<a href="#" class="text2line">Bán căn hộ SSG Tower 3PN</a>
									<div class="bs-price">3.000.000.000</div>
								</h3>
							</div>
						</li>

						<li>
							<div class="as-bestsellers-thumb">
								<a href="#"><img src="assets/frontend/images/tgp_5.webp"></a>
							</div>
							<div class="as-bestsellers-content">
								<h3>
									<a href="#" class="text2line">Nhà phố đẹp 3 tầng khắc phục nắng hướng Tây</a>
									<div class="bs-price">4.100.000.000</div>
								</h3>
							</div>
						</li>
					</ul>
				</div>

				<div class="banner_collection">
					<a href="#"><img src="assets/frontend/images/banner_product_sell.webp"></a>
				</div>
				</div>


			<?php self::renderBody(); ?>
			</div>
		</div>
	</div>
	<!-- FOOTER -->
	<footer class="w-100" style="background:#363636">
		<div class="container">
			<div class="row mt-3 mb-3">
				<div class="col-md-6">
					<h5>
						THÔNG TIN CHUNG
						<span class="line-remove" style="width: 78px; "></span>
					</h5>
					<h4 class="mt-2 pt-2 com-name">CÔNG TY TNHH MENDOVER</h4>
					<p class="com-phone">
						<i class="fas fa-phone-alt"></i>
						<a href="#" title="0999.999.999">0999 999 999</a>
					</p>
					<p class="com-email">
						<i class="fas fa-envelope"></i>
						<a href="#" title="cskh@hoanghoan.vn">cskh@mendover.vn</a>
					</p>
					<address class="com-address">
						<i style="width: 22px;" class="fas fa-map-marker-alt"></i>Số 1, Nguyễn Trãi, Thanh Xuân, Hà
						Nội
					</address>
				</div>
				<div class="col-md-3">
					<h5>
						VỀ CHÚNG TÔI
						<span class="line-remove" style="width: 78px; "></span>
					</h5>
					<ul>
						<li><a href="about.html" title="Giới thiệu">Giới thiệu</a></li>
						<li><a href="product.html" title="Sản phẩm">Sản phẩm</a></li>
						<li><a href="news.html" title="Tin tức">Tin tức</a></li>
						<li><a href="partner.html" title="Đối tác">Đối tác</a></li>
						<li><a href="contact.html" title="Liên hệ">Liên hệ</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h5>
						KẾT NỐI VỚI CHÚNG TÔI
						<span class="line-remove" style="width: 78px; "></span>
					</h5>
					<div class="mt-4 social-icon">
						<a href="#" target="_blank">
							<i class="fab fa-facebook-square"></i>
						</a>
						<a href="#" target="_blank">
							<i class="fab fa-twitter-square"></i>
						</a>
						<a href="#" target="_blank">
							<i class="far fa-envelope"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

<!-- Script -->
<script type="text/javascript" src="assets/frontend/js/javascript.js"></script>
<script src='assets/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>

</html>