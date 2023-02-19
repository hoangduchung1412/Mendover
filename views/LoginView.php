<?php 
//load file layout vao day
self::$fileLayout = "LayoutTrangChu.php";
?>
<!-- CONTENT -->
<div class="container">
	<div class="row" style="background: #ccc;">
	    <div class="col-md-6 col-xs-12 wrapbox-account wrapbox-heading-account">
	        <div class="header-page">
	            <h1>Đăng nhập</h1>
	        </div>
	    </div>

	    <div class="col-md-6 col-xs-12 wrapbox-account wrapbox-content-account">
	        <div class="user-box login-box">
	            <form method='post' action="index.php?controller=account&action=loginPost">
                  <div class="user-input">
                    <label style="font-size: 20px;">Email:<b id="req">*</b></label>
                    <input type="email" class="input-control" name="email" required="">
                  </div>
                  <div class="user-input">
                    <label  style="font-size: 20px;">Mật khẩu:<b id="req">*</b></label>
                    <input type="password" class="input-control" name="password" required="">
                  </div>
                  <div class="user-action">
                    <div class="login-btn-wrap button dark">
                        <input class="btn btn-login" type="submit" value="Đăng nhập">
                    </div>
                    <div class="link-login">
                        <a href="#">Quên mật khẩu?</a><br>
                        hoặc <a href="account/register" title="Đăng ký">Đăng ký</a>
                    </div>
                </div>
                </form>

	        </div>
	    </div>
	</div>
</div>