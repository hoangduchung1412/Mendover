<?php 
	//include file model vao day
	include "Models/ProductsModel.php";
	class ProductsController {
		//ke thua ProductsModel
		use ProductsModel;
		public function category() {
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 12;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord($category_id)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			return View::make("CategoryProductsView.php",["data"=>$data,"numPage"=>$numPage,"category_id"=>$category_id]);
		}
		//chi tiet san pham
		public function detail() {
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelGetRecord($id);
			//goi View, truyen du lieu ra view
			return View::make("DetailProductsView.php",["record"=>$record,"id"=>$id]);
		}
	}
 ?>