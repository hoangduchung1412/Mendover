<?php 
	//include file model vao day
	include "models/CheckoutModel.php";
	class CheckoutController {
		//ke thua CheckoutModel
		use CheckoutModel;
		public function index() {
			//goi view
			return View::make("CheckoutView.php");
		}
		//thanh toan gio hang
		public function checkout() {
			//kiem tra neu user chua dang nhap thi yeu cau dang nhap
			if(isset($_SESSION['customer_email']) == false)
				header('location:index.php?controller=account&action=login');
			else {
				//goi ham cartCheckout
				$this->cartCheckout();
				header('location:index.php?controller=cart&notify=order-success');
			}
		}
	}
?>