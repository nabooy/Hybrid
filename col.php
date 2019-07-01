<?php 
	class col{
	
		public static function dbCon(){
			$con = mysqli_connect("localhost", "root", "", "set");
			return $con;
		}
		
		public static function select($sql){
			mysqli_set_charset(self::dbCon(),"utf8");
			$query = mysqli_query(self::dbCon(), $sql);
			$dbdata = array();
			while($fetch = mysqli_fetch_assoc($query)){
				$dbdata[]=$fetch;
			}
			return $dbdata;
		}
		
		public static function selectOne($sql){
			$Result = self::select($sql);
			$getPop = array_pop($Result);
			return $getPop;
		}
		
		public static function db($sql){
			$query = mysqli_query(self::dbCon(), $sql);
			return $query;
		}
	}