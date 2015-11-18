<?php
session_start(); 




$config = require "config.php";
require "pdo.php";
$mypdo = new MyPdo($config);


$filename = md5(rand()).".html";
		if(file_put_contents($filename, $_POST["content"]))
		{
			$content = $_POST["content"];
			if(isset( $_SESSION["id"] )){
				$id = $_SESSION['id'];
				$sql = "update content set content = :content where id = $id;";
				
			}else{
				$sql = "insert into content (content) values (:content);";
			}
			$stmt = $mypdo->prepare($sql);
			$stmt->bindParam(":content", $content);

			if($stmt->execute()){
				echo "http://".$_SERVER['SERVER_NAME'].DIRECTORY_SEPARATOR.$filename;
			}else{
				echo -1;
			}
			
		}else{
			echo -1;
		}