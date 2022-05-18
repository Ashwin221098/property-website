<?php

class CommonUtils{
	
	public function validateUserNamePassword($username, $password){
		$flag_username_verification=true;
		$userName_verified="";
		
		if(empty($username) || !preg_match('/^[a-zA-Z0-9\_\@]+$/', $username)){
			$flag_username_verification=false;
		}
		return $flag_username_verification;
	}


}

?>