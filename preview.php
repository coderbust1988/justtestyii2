<?php


$filename = md5($_POST["id"]).".html";
		if(file_put_contents($filename, $_POST["content"]))
		{
			echo "http://".$_SERVER['SERVER_NAME'].DIRECTORY_SEPARATOR.$filename;
		}else{
			echo -1;
		}