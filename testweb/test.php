<?php
ini_set('default_charset', 'utf-8');

// function deldir($dir) {
//   //先删除目录下的文件：
//   $dh=opendir($dir);
//   while ($file=readdir($dh)) {
//     if($file!="." && $file!="..") {
//       $fullpath=$dir."\\".$file;
//       if(!is_dir($fullpath)) {
//           unlink($fullpath);
//       } else {
//           deldir($fullpath);
//       }
//     }
//   }
//   closedir($dh);
//   //删除当前文件夹：
//   if(rmdir($dir)) {
//     return true;
//   } else {
//     return false;
//   }
// }


//exec("rmdir /s/q \\?\\F:\\work\\student\\student\\node_modules");


// $start_str = "This is not an honest face?";
// $bzstr = bzcompress($start_str);

// echo "Compressed String: \n\r";
// echo $bzstr;
// echo "\n\r";

// $str = bzdecompress($bzstr);
// echo "Decompressed String: \n\r";
// echo $str;
// echo "\n\r";


// function shutdown()
// {
//     // This is our shutdown function, in 
//     // here we can do any last operations
//     // before the script is complete.

//     echo 'Script executed with success', PHP_EOL;
// }

// function shutdown2()
// {
//     // This is our shutdown function, in 
//     // here we can do any last operations
//     // before the script is complete.

//     echo 'Script executed with success 2', PHP_EOL;
// }

//register_shutdown_function('shutdown' );


// header("Connection: close");
// ob_start();
// phpinfo();
// $size=ob_get_length(); 
// header("Content-Length: $size");
// ob_end_flush();
// flush();
// sleep(13);
// error_log("do something in the background");



// class BaseClass {
//    function __construct() {
//        print "In BaseClass constructor\n";
//    }

//    protected function preinit()
//   {
//     print "In BaseClass preinit\n";
//   }

//   protected function init()
//   {
//      print "In BaseClass init\n"; 
//   }
// }

// class SubClass extends BaseClass {
//    function __construct() {
//        print "In SubClass constructor\n";
//    }

//    protected function preinit()
//   {
//       print "In SubClass preinit\n";
//   }

//    protected function init()
//   {
//     print "In SubClass init\n";
//   }

// }

// class SubSubClass extends SubClass {
//   function __construct() {
//        print "In SubSubClass constructor\n";

//   }

//    function preinit()
//   {	
//   	print "\n";
//       print "In SubSubClass preinit\n";
//       parent::preinit();
//       print "\n";
//   }

//     function init()
//   {
//   	print "\n";
//     print "In SubSubClass init\n";
//     parent::init();
//   	print "\n";
//   }

// }

// $obj = new SubSubClass();
// $obj->preinit();
// $obj->init();




//$tempNum = strrpos("http://yanggang.admin.meihaoxueyuan.com:9001/tutor/list?username=12345678900&name=&mobile=", "http://yanggang.admin.meihaoxueyuan.com:9001/tutor/list?username=12345678900");


//var_dump($tempNum);

// $a = 0;



// if(is_bool($a)){
// 	echo 333;
// }else{
// 	echo 444;
// }


// $string = 'The quick brown fox jumped over the lazy dog.';
// $patterns = array();
// $patterns[0] = '/quick/';
// $patterns[1] = '/brown/';
// $patterns[2] = '/fox/';
// $replacements = array();
// // $replacements[0] = 'bear';
// // $replacements[1] = 'black';
// // $replacements[2] = 'slow';
// echo preg_replace($patterns, $replacements, $string);



//echo readfile("F:\work\meihao\doc\api.md");
//echo readfile("F:\work\meihao\doc\aaa.txt");



// $handle = fopen("F:\work\meihao\doc\api.md", "r");
// if ($handle) {
//     while (($line = fgets($handle)) !== false) {
//         // process the line read.

//         echo $line . "\n\r";
//     }

//     fclose($handle);
// } else {
//     // error opening the file.
// } 



// foreach(file('F:\work\meihao\doc\aaa.txt') as $line) {
//    echo $line. "\n";
// }




//phpinfo();



//echo md5("yg");





// $fileName = 'F:\work'.DIRECTORY_SEPARATOR.'1.png';


// if ($stream = fopen($fileName, 'r')) {
//     // print all the page starting at the offset 10
//     echo stream_get_contents($stream, -1, 10);

//     fclose($stream);
// }


// if ($stream = fopen('http://www.example.com', 'r')) {
//     // print all the page starting at the offset 10
//     echo stream_get_contents($stream, -1, 10);

//     fclose($stream);
// }


// $a1 = 1;
// $a2 = 2;
// $a3 = 3;


// echo "$a1$a2$a3";

// echo "<br>";

// echo '$a1$a2$a3';

// var_dump("$a1$a2$a3");

// var_dump('$a1$a2$a3');


// var_dump(strtotime("2015-11-12"));

// var_dump(strtotime("2015-11-13"));


// $typeArray = array();
//         $typeArray[] = "day";
//         $typeArray[] = "week";
//         $typeArray[] = "month";
        
//         echo $typeArray[rand(0,sizeof($typeArray) - 1 )];

// $sentParams["isprac"] = rand(0,1);
// echo $sentParams["isprac"] ;


// $a = array();


// var_dump($a[0]);


// var_dump($a[1]);

// var_dump(123);

// $capability = array(1,2,3,4);

// $quality = array(21,22,23,24);

// if(is_array($capability)) $capability = implode('|', $capability);
// if(is_array($quality)) $quality = implode('|', $quality);



// var_dump($capability);

// var_dump($quality);

// $prices = array();

//         $model = $prices[0][0].','.$prices[1][0].','.$prices[2][0];

// var_dump($model);




//                 $opentime = date('m月d日 H时i分',time());


// $a = var_export(time());



// echo $a;





// phpinfo();

echo "before:";

echo memory_get_usage(true);

echo "<br>";

for($i=1;$i<=200;$i++){
	echo "";
}


echo "after :";
echo memory_get_usage(true);
echo "<br>";


echo "after :";
echo memory_get_usage(true);
echo "<br>";


echo "after :";
echo memory_get_usage(true);
echo "<br>";


echo "after :";
echo memory_get_usage(true);
echo "<br>";

?>