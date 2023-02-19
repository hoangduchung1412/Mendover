<?php 
	class Connection {
		//ham ket noi csdl, ket qua tra ve mot bien -> kieu bien nay la bien object
		public static function getInstance(){
			$hostname = "localhost";
			$database = "php60_project_1";
			$username = "root";
			$password = "";
			//ket noi csdl, tra ket qua ve bien object
			$db = new PDO("mysql:host=$hostname;dbname=$database;","$username","$password");
			//lay du lieu kieu unicode
			$db->exec("set names utf8");
			//tra ve bien ke noi
			return $db;
		}
	}
 ?>