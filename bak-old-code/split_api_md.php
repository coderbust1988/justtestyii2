<?php
ini_set('default_charset', 'utf-8');

phpinfo();
die();


$file = new SplFileObject("api.md");
$total = 0;

$foundInput = false;
$foundOutput = false;

while (!$file->eof()) {
    $tmpChar = $file->fgets();
    if(strrpos($tmpChar, "地址：") > -1 ){
    	echo "<br>";
    	echo $tmpChar;
    	echo "<br>";
    	$total ++;

    	$foundInput = false;
		$foundOutput = false;
    }

    if(strrpos($tmpChar, "###接口输入") > -1 ){
    	// echo "##Input##";
    	// echo "<br>";
    	$foundInput = true;
    	$foundOutput = false;
    }

    if(strrpos($tmpChar, "###接口输出") > -1 ){
    	//echo "##Output##";
    	echo "<br>";
    	$foundInput = false;
    	$foundOutput = true;
    }


    if($foundInput && strrpos($tmpChar, "提交方式：") > -1 ){
    	$method =  substr($tmpChar, strlen("提交方式："));
    	echo $method;
    	echo "<br>";
    }

	if($foundInput && strrpos($tmpChar, "|") > -1 
		&& preg_match('/^[a-z]/', $tmpChar) 
		&&  !(strrpos($tmpChar, "curl -X") > -1)  
	){
			//echo $tmpChar;
			echo explode("|", $tmpChar)[0] . " | ";
			//echo "<br>";
	}


	// if($foundOutput && strrpos($tmpChar, "|") > -1 
	// 	&& preg_match('/^[a-z]/', $tmpChar) 
	// ){		
	// 		echo $tmpChar;
	// 		//echo explode("|", $tmpChar)[0];
	// 		echo "<br>";
	// }

}

echo "<br>";
echo "found :".$total ." count..";
echo "<br>";
$file = null;

