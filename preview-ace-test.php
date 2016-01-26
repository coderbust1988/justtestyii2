<?php
session_start(); 

$config = require "config.php";
require "pdo.php";
$mypdo = new MyPdo($config);


$filename = $config["html_loction"].DIRECTORY_SEPARATOR.md5(rand()).".html";
		if(file_put_contents($filename, $_POST["content"]))
		{
			$content = $_POST["content"];
			if(isset( $_SESSION["id"]) &&$_SESSION["id"]>0 ){
				$id = $_SESSION['id'];
				$sql = "update content set content = :content where id = $id;";
				
			}else{
				$sql = "insert into content (content) values (:content);";
			}
			$stmt = $mypdo->prepare($sql);
			$stmt->bindParam(":content", $content);

			if($stmt->execute()){
				echo "http://".$_SERVER['SERVER_NAME'].DIRECTORY_SEPARATOR.$filename;

				if(isset( $_SESSION["id"]) &&$_SESSION["id"]>0 ){
					session_unset();
					session_destroy();
					$_SESSION = array();
			}
			}else{
				echo -1;
			}
			
		}else{
			echo -1;
		}