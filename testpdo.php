<?php


$config = require "config.php";
require "pdo.php";
$mypdo = new MyPdo($config);














$content = str_repeat("absamnbmfn".rand(1,100), 100);
			$sql = "insert into content (content) values ('".$content."');";


var_export($sql);
			if($mypdo->executeSQL($sql)){
				echo "http://".$_SERVER['SERVER_NAME'];
			}else{
				echo -1;
			}