<?php 
	//load file model
	include "Models/LoginModel.php";
	class LoginController {
		//ke thua LoginModel
		use LoginModel;
		public function index() {
			//goi view
			return View::make("LoginView.php");
		}
		public function dologin() {
			//goi ham modelLogin trong class LoginModel
			$this->modelLogin();
		}
		//dang xuat
 		public function logout() {
 			//huy bien session
 			unset($_SESSION['email']);
 			//di chuyen den mot url khac
 			header ('location:index.php');
 		}
	}
 ?>