<?php


$config = require "config.php";
require "pdo.php";
$mypdo = new MyPdo($config);









$sql = "SELECT content FROM content where id = :id;";
			$stmt = $mypdo->prepare($sql);
			$idInt = 9;
			$stmt->bindParam(":id", $idInt);

			if($stmt->execute()){
				echo $stmt->fetch()["content"];
			}else{
				echo -1;
			}