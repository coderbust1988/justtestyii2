<?php
session_start(); 

$config = require "config.php";
require "pdo.php";
$mypdo = new MyPdo($config);


$sql = "SELECT content FROM content where id = :id;";
			$stmt = $mypdo->prepare($sql);
			$stmt->bindParam(":id", $_POST["id"]);

			if($stmt->execute()){
				echo $stmt->fetch()["content"];


				$_SESSION["id"] = $_POST["id"];
			}else{
				echo -1;
			}
