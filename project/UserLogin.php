<?php
require('DBConnection.php');
require('user.php');
require('CommonUtils.php');

session_start();


$username = $_POST['username'];
$password = $_POST['password'];
$objUtils = new CommonUtils();

if($objUtils->validateUserNamePassword($username, $password)== true){
	$userDTO = checkUserAvailability($username, $password);
	if($userDTO != null){
		echo "Its in..." . $userDTO->getUserName();
		//$tempVar = $->getUser();
		if(!empty(trim($userDTO->getUserName())) && $userDTO->getUserName() != null){
			echo "asdasdasdasdasd" . "<tr><td>$record->username</td><td>$record->passcode</td></tr>";
			$_SESSION['user'] = serialize($userDTO);
			redirect('../home.php');
		}
	}else{
		echo "UserDTO is null........";
		$_POST['error_login']="Error........";
		//redirect("../login.php");
	}
}


function checkUserAvailability($user, $pwd){
	$isAuthenticatedUser = false;
	$DbConnectionObj = new DbConnection();
	$dbConnection = $DbConnectionObj->getDbConnection();
	$result = $dbConnection -> query("SELECT * FROM user where user_id='$user' and user_password='$pwd'");
	
	if(mysqli_num_rows($result) > 0){
		$isAuthenticatedUser=true;
		$userObj = new User();
		while($record = $result->fetch_object()){
			$userObj->setUser($record->user_id, $record->user_name, ($record->user_is_admin == 0 ? "guest" : "admin"));
		}
		
/* 		$_SESSION['objUser'] = serialize($userObj);
		redirect('home.php'); */
		$DbConnectionObj->closeDbConnection();
		return $userObj;
	}
}


function redirect(string $uri): never {
	header('Location: ' . $uri);
	exit();
}

?>