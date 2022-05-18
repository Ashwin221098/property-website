<?php
class DbConnection {
	private $dbName;
	private $hostName;
	private $userName;
	private $passCode;
	private $connection;
	
	function __construct() {
		echo 'Constructor called...';
		$this->dbName = 'avrdb';
		$this->hostName='localhost';
		$this->userName='root';
		$this->passCode='';
	}
	
	function getDbConnection(){
		$isConnected=true;
		$this->connection = new mysqli($this->hostName, $this->userName, $this->passCode, $this->dbName);
		
		if (!$this->connection) {
			$isConnected=false;
		}else{
			echo 'Connected successfully';
		}
		return $this->connection;
	}
	
	/*function executeQuery($qry){
		$result = $mysqli -> query($qry);
		return $result;
	}*/
	
	
	function closeDbConnection(){
		if($this->connection){
			mysqli_close($this->connection);
		}
	}
	 
	
	
}
?>