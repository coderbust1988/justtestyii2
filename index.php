<?php 

// $string = "true";
// if(strncasecmp($string,"trufeau",5)){
// 	print "True";
// }else{
// 	print "False";
// }



// class myClass {
//     public $mine;
//     private $xpto;
//     static protected $test;

//     static function test() {
//         var_dump(property_exists('myClass', 'xpto')); //true
//     }
// }

// var_dump(property_exists('myClass', 'mine'));   //true
// var_dump(property_exists(new myClass, 'mine')); //true
// var_dump(property_exists('myClass', 'xpto'));   //true, as of PHP 5.3.0
// var_dump(property_exists('myClass', 'bar'));    //false
// var_dump(property_exists('myClass', 'test'));   //true, as of PHP 5.3.0
// myClass::test();



// function shuffle_assoc(&$array) {
//         $keys = array_keys($array);

//         shuffle($keys);

//         foreach($keys as $key) {
//             $new[$key] = $array[$key];
//         }

//         $array = $new;

//         return true;
//     }



//$array1 = array("a"=>1,"b"=>2,"c"=>3);

//$array1 = array(7,1,44,88);


// $array1 = array();
// $array1["a"] = 11;
// $array1["b"] = 12;
// $array1["c"] = 13;


// //shuffle($array1);

// shuffle_assoc($array1);

// var_dump($array1);



//$a = array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5,"f"=>6,"h"=>7);

$a = array(
	"a"=>array(1,2,3,4),
	"b"=>array(11,22,33,44),
	"c"=>array(111,222,333,444),
	"d"=>array(1111,2222,3333,4444),
	"e"=>array(11111,22222,33333,44444),
	"f"=>array(111111,222222,333333,444444),
	"h"=>array(1111111,2222222,3333333,4444444),
	);

var_dump(array_pop($a));


var_dump(array_pop($a));

var_dump(array_pop($a));

var_dump(array_pop($a));


echo "<br><br><br>";

var_dump(array_shift($a));
var_dump(array_shift($a));
var_dump(array_shift($a));
var_dump(array_shift($a));





?>










