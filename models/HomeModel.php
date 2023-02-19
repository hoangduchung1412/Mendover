<?php 
	trait HomeModel {
		//san pham noi bat
		public function modelHotProduct() {
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 1 order by id desc limit 0,6");
			//tra ve tat ca ban ghi
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
		public function modelDiscountProduct() {
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where discount > 0 order by id desc limit 0,4");
			//tra ve tat ca ban ghi
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
		public function modelHotNewProduct() {
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 1 limit 0,4");
			//tra ve tat ca ban ghi
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
	}
 ?>