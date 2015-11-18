<?php

class MyPdo extends PDO{

	public static function exception_handler($exception) {
            die('Uncaught exception: '.$exception->getMessage());
    }

	function __construct($config) {
	  set_exception_handler(array(__CLASS__, 'exception_handler'));
	  $db_driver = $config["db_driver"];
	  $dbHost = $config["db_host"];
	  $db_port = $config["db_port"];
	  $db_name = $config["db_name"];
	  $db_username = $config["db_username"];
	  $db_password = $config["db_password"];
      parent::__construct("{$db_driver}:host={$dbHost};port={$db_port};dbname={$db_name}", $db_username,$db_password );
      restore_exception_handler();
   	}


	public function getOne($sql,$params){
		$sqlAppend = "";
		if(!empty($params) && sizeof($params)>0){
			foreach ($params as $key => $value) {
				$sqlAppend.=" {$key} = :{$key} and";
			}
		}
		$sql.=" where {$sqlAppend}";
		$sql = substr($sql, 0,strlen($sql)-3);
		$stmt = $this->prepare($sql);
			
		if(!empty($params) && sizeof($params)>0){
			foreach ($params as $key => $value) {
				$stmt->bindParam(":{$key}", $params[$key]);
			}
		}
		
		if($stmt->execute()){
			$retObjs = $stmt->fetchAll();
			if(empty($retObjs)){
				var_dump($sql);
			}else{
				var_dump($retObjs);
			}
			
		}else{
			echo 'execute sql error..'.$sql;
		}
	}


	public function findSQL($sql){
		$stmt = $this->prepare($sql);
		if($stmt->execute()){
			$retObjs = $stmt->fetchAll();
			if(empty($retObjs)){
				return -1;
			}else{
				return $retObjs;
			}
		}else{
			return -1;
		}

	}

	public function executeSQL($sql){
		$stmt = $this->prepare($sql);
		if($stmt->execute()){
			return 1;
		}else{
			return -1;
		}
	}
}


// $config = require "config.php";
// $mypdo = new MyPdo($config);

// // $sql = "SELECT * FROM accounting";
// // $params = array('userid'=>16,'courseid'=>3);
// // $mypdo->execSelectSql($sql,$params);



// // $sql = "SELECT * FROM accounting";
// // var_export($mypdo->findSQL($sql));



// $sql = "update accounting set userid = 1";
// $mypdo->executeSQL($sql);