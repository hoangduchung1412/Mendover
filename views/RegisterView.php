<?php 
//load file layout vao day
self::$fileLayout = "LayoutTrangChu.php";
?>
<!-- CONTENT -->
<div class="container">
    <div class="row" style="background: #ccc;">
        <div class="col-md-6 col-xs-12 wrapbox-account wrapbox-heading-account" style="background: #ccc;">
            <div class="header-page">
                <h1>Tạo tài khoản</h1>
                <?php if(isset($_GET["notify"]) && $_GET["notify"] == "error"): ?>
	            <p style="color:red; font-weight: bold;">Đăng ký thất bại, email đã bị trùng!</p>
		        <?php elseif(isset($_GET["notify"]) && $_GET["notify"] == "success"): ?>
		        <p style="color:red; font-weight: bold;">Đăng ký thành công, click vào đăng nhập để đăng nhập tài khoản</p>
		        <?php else: ?>
		        <p> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
		        <?php endif; ?>
	            </div>
	        </div>

            <div class="col-md-6 wrapbox-account wrapbox-content-account">
              <div class="user-box">
                <form method='post' action="index.php?controller=account&action=registerPost">
                  <div class="user-input">
                    <label>Họ và tên:</label>
                    <input type="text" name="name" class="input-control">
                  </div>
                  <div class="user-input">
                    <label>Email:<b id="req">*</b></label>
                    <input type="text" name="email" class="input-control" required>
                  </div>
                  <div class="user-input">
                    <label>Địa chỉ:</label>
                    <input type="text" name="address" class="input-control">
                  </div>
                  <div class="user-input">
                    <label>Điện thoại:</label>
                    <input type="text" name="phone" class="input-control">
                  </div>
                  <div class="user-input">
                    <label>Mật khẩu:<b id="req">*</b></label>
                    <input type="password" name="password" class="input-control" required="">
                  </div>
                  <div class="user-action">
                    <input class="btn btn-login" type="submit" value="Đăng ký">
                  </div>
                </form>
                <div class="user-action" style="margin-top: 50px;">
                	 <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
                	<a href="account/login"><input class="btn btn-login" type="submit" value="Đăng nhập"></a>
	                            </div>
                </div>
                <a href="home" class="come-back"><i class="fas fa-long-arrow-alt-left mr-4"></i> Quay lại trang
	                                chủ </a>
              </div>
            </div>
    </div>