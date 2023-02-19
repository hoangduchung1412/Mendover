<?php 
	//load file model
	include "models/HomeModel.php";
	class HomeController {
		//ke thua Model
		use HomeModel;
		public function index() {
			//san pham noi bat
			$hotProduct = $this->modelHotProduct();
			//san pham giam gia
			$discountProduct = $this->modelDiscountProduct();
			//san pham not bat 
			$hotnewProduct = $this->modelHotNewProduct();
			return View::make("HomeView.php",["hotProduct"=>$hotProduct,"discountProduct"=>$discountProduct,"hotnewProduct"=>$hotnewProduct]);
		}
	}
 ?>