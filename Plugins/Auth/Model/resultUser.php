<?php 
	class resultUser{
		public function getUserByUsernamePassword($user, $pass){
			$sqlResult = set::selectOne('SELECT * FROM Auth WHERE Auth_Username="'.$user.'" AND Auth_Password="'.$pass.'"');
			return $sqlResult;
		}
		
		public function getUserByID($ID){
			$sqlResult = set::selectOne('SELECT * FROM Auth WHERE UserID="'.$ID.'"');
			return $sqlResult;
		}
		
		public function getTextPage($TextName){
			$Text['Empty'] = 'Моля попълнете всички полета';
			$Text['NoUser'] = 'Няма потребител с тези данни';
			return $Text[$TextName];
		}
		
	}	