<?php 
	class mySqlCode{
		public function getString(){
			$sqlResult = set::select('SELECT * FROM products_parts');
			return $sqlResult;
		}
		
	}	