<?php 
	set::Model('Auth', 'resultUser');
	class Index extends resultUser{
		
		public function run($data){
			session_start();
			if(isset($_SESSION['ID'])){
				$this->getUser();
			} else {
				set::View('Auth','noLogged', []);
			}
		}
		
		public function Login($data){
			session_start();
			if($data['Username'] == "" || $data['Password'] == ""){
				set::View('Auth','noLogged', []);
				echo $this->getTextPage('Empty');
				} else {
				$ResutlUser = $this->getUserByUsernamePassword($data['Username'], $data['Password']);
				if($ResutlUser){
					$_SESSION['ID'] = $ResutlUser['UserID'];
					$this->getUser();
					} else {
					set::View('Auth','noLogged', []);
					echo $this->getTextPage('NoUser');
				}
			}
		}
		
		public function Logout(){
			session_start();
			session_destroy();
			set::View('Auth','noLogged', []);
		}
		
		public function getUser(){
			session_start();
			$UserInfo = $this->getUserByID($_SESSION['ID']);
			if($UserInfo['Map_Permission'] == 1){
				set::View('Auth','setAdmin', []);
			}
			set::View('Auth','isLogged', [
				'userInfo' => $UserInfo
			]);
		}
	}
?>