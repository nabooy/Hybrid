<?php 
	set::Model('Index', 'IndexModel');
	class Index extends IndexModel{
		public function run(){
			set::View('Index', 'index', [
				'IndexModel'=> $this->getString()
			]);
		}
	}
?>