<?php
class User {
	private $userFirstName;
	private $userName;
	private $passCode;
	private $userRole;
	
	public function setUser($pUser, $pFirstName, $pUserRole){
		$this->userName = $pUser;
		$this->userFirstName = $pFirstName;
		$this->userRole = $pUserRole;
	}
	
	public function getUser(){
		return $this;
	}
	
	public function getUserName(){
		return $this->userName;
	}
	
	public function getPassCode(){
		return $this->passCode;
	}
	
	public function getUserRole(){
		return $this->userRole;
	}
	
	public function getUserFirstName(){
		return $this->userFirstName;
	}
	
}