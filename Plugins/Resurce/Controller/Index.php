<?php 
	//set::Model('Index', 'getAllString');
	class Index {
		public function run(){
			session_start();
			if(isset($_SESSION['ID'])){
				
			} else {
				
			}
		set::View('Index', 'index', []);
		}
	}
?>