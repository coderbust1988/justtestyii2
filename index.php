<?php 

set_time_limit(0);

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

// $a = array(
// 	"a"=>array(1,2,3,4),
// 	"b"=>array(11,22,33,44),
// 	"c"=>array(111,222,333,444),
// 	"d"=>array(1111,2222,3333,4444),
// 	"e"=>array(11111,22222,33333,44444),
// 	"f"=>array(111111,222222,333333,444444),
// 	"h"=>array(1111111,2222222,3333333,4444444),
// 	);

// var_dump(array_pop($a));


// var_dump(array_pop($a));

// var_dump(array_pop($a));

// var_dump(array_pop($a));


// echo "<br><br><br>";

// var_dump(array_shift($a));
// var_dump(array_shift($a));
// var_dump(array_shift($a));
// var_dump(array_shift($a));




// class MethodTest
// {
//     public function __call($name, $arguments)
//     {
//     	var_dump($arguments);
//         // Note: value of $name is case sensitive.
//         echo "Calling object method '$name' "
//              . implode(', ', $arguments). "\n";
//              echo "<br>";
//              echo "<br>";
//     }

//     /**  As of PHP 5.3.0  */
//     public static function __callStatic($name, $arguments)
//     {
//     	var_dump($arguments);
//         // Note: value of $name is case sensitive.
//         echo "Calling static method '$name' "
//              . implode(', ', $arguments). "\n";
//              echo "<br>";
//              echo "<br>";
//     }
// }

// $obj = new MethodTest;
// $obj->runTest('in object context');

// MethodTest::runTest('in static context');  // As of PHP 5.3.0




// class Wallet{
//     public $balance;
//     public function __construct($money){
//         $this->balance = $money;
//     }
//     public function getBalance(){
//         return $this->balance;
//     }
//     public function setBalance($value){
//         $this->balance = $value;
//     }
// }

// class MyThread extends Thread{
//     private $wallet;
//     private $std;
//     public function __construct($wallet,$std){
//         $this->wallet = $wallet;
//         $this->std = $std;
//     }
//     public function run(){
//         $this->synchronized(function($thread){
//                 $hack = $this->wallet;
//                 if($hack->getBalance() - 80 >0){
//                     sleep(1);
//                     $hack->setBalance($hack->getBalance() - 80);
//                     echo $this->getThreadId() . "reduce 80 successful<br/>Current num is：" . $hack->getBalance() . "<Br/>";
//                     //Here is Wrong!  The result is bool(false)????!!!!
//                     var_dump($hack == $this->wallet);
//                     echo "<br>";
//                 }
//                 else{
//                 	sleep(1);
//                  	echo $this->getThreadId() . "reduce fail<br/>Current num is：" . $hack->getBalance() . "<br/>";
//                 }
//         },$this->std);
//     }
// }


// $wallet = new Wallet(80);
// $std = new stdClass();
// for($x=0;$x<3;$x++){
//     $pool[] = new MyThread($wallet,$std);
//     $pool[$x]->start();
// }



// class workerThread extends Thread {
// public function __construct($i){
//   $this->i=$i;
// }

// public function run(){
//   while($this->i>0){
//    echo $this->getThreadId() ."  : " .$this->i . "   <br>";
//    sleep(1);
//    $this->i -- ;
//   }
// }
// }


// for($i=0;$i<50;$i++){
// $workers[$i]=new workerThread($i);
// $workers[$i]->start();
// }




// $i = 20000;
// while($i >0)
// {	

// 	$url = "http://test.api.meihaoxueyuan.com/v1/index/area";
// 	$ch = curl_init();
  
//     curl_setopt($ch, CURLOPT_URL, $url);

//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);// 获取的信息以文件流的形式返回

//     $result['content'] = curl_exec($ch);
//     if(curl_errno($ch)){
//     	var_dump("error..");
//     }
//     $result['info'] = curl_getinfo($ch);
//     curl_close($ch);


// 	var_dump($i);
// 	$i--;
// }





// $data = array();

// $data[] = array(1);

// $data[]["kk"][1] = array(11);
// $data[]["kk"][2] = array(22);    
//     if(    true){
//     	echo 333;
//     }


// echo json_encode($data);






// $checksum = crc32("121");
// var_dump($checksum);


// $alias = "123456";


// var_dump($alias);

// $rootAlias=substr($alias,0,3);


// var_dump($rootAlias);


// var_dump($alias);







// define('AKEY', "");
// define('SKEY', "");
// define('BUCKET',"");

// class Qiniu_List{

//     private $QINIU_RSF_HOST = 'http://rsf.qbox.me';
//     private $header = array();
//     private $url = '';
//     private static $instance;

//     private  function __construct(){}

//     //单态模式实例化
//     public static function getInstance() {

//         if(!isset(self::$instance)){
//             $c = __CLASS__;
//             self::$instance = new $c;
//         }

//         return self::$instance;
//     }

//     /**
//       * @param prefix 前缀
//       * @param marker 标记
//       * @param limit  限制出现的个数
//       *
//      **/

//     public  function getUrl($prefix='', $marker='', $limit = 0){

//         $query = @array('bucket' => BUCKET);        

//         if (!empty($prefix)) {
//             $query['prefix'] = $prefix;
//         }
//         if (!empty($marker)) {
//             $query['marker'] = $marker;
//         }
//         if (!empty($limit)) {
//             $query['limit'] = $limit;
//         }
//         $url = '/list?' . http_build_query($query);
//         $this->url = $url;
//     }


//     //获取token
//     private function getToken($url){
//         $find = array('+', '/');
//         $replace = array('-', '_');
//         $sign = hash_hmac('sha1', $this->url."\n", SKEY, true);
//         $result = AKEY . ':' . str_replace($find, $replace, base64_encode($sign));
//         return $result; 
//     }

//     /**
//       * @Description 列出文件
//       * @return array(
//       *                 ['marker'] => 标记，
//       *                 ['item']   => 文件列表数组
//       *             )
//      **/

//     public function listFiles(){

//         $_post_url = trim($this->QINIU_RSF_HOST.$this->url,'\n'); 
//         $curl = curl_init ();
//         curl_setopt($curl, CURLOPT_URL, $_post_url);
//         $this->header[] = 'Host: rsf.qbox.me';
//         $this->header[] = 'Content-Type:application/x-www-form-urlencoded';
//         $this->header[] = 'Authorization: QBox '.$this->getToken($this->url);   
//         curl_setopt ( $curl, CURLOPT_HEADER, false);
//         curl_setopt ( $curl, CURLOPT_HTTPHEADER, $this->header );
//         curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false); 
//         curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false); 
//         curl_setopt ( $curl, CURLOPT_POST, true);
//         curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true);  
//         curl_setopt ( $curl, CURLOPT_POSTFIELDS, "");   
//         $result = curl_exec ( $curl );  
//         curl_close ( $curl );  
//         return json_decode($result,true);  
//     }

// }

// //演示方法
// $Qiniu_List = Qiniu_List::getInstance();
// $Qiniu_List -> getUrl('','eyJjIjowLCJrIjoiMTUxMDI3MTQ0NTkwOTc5OTk2OTgyOC5wbmcifQ==');
// echo "<pre>";
// print_r($Qiniu_List -> listFiles());
// echo "</pre>";




// $fileName = '1.txt';



// $a = substr($fileName, strpos($fileName, "."));


// var_dump($a);

// class a extends b{
// 	private $a;
// 	private $b;
// 	private $c;
// 	//private $d;

// 	function aaa(){
// 		echo "bbb";
// 	}
// }

// class b {
// 	private $a;
// 	private $b;
// 	private $c;
// 	public $d;
// 	public function __construct($inputStr){
// 		$this->a = "a";
// 		$this->b = "b";
// 		$this->c = "c";
// 		$this->d = $inputStr;

// 		$this->aaa();

// 		var_dump(__CLASS__);
// 	}


// 	function aaa(){
// 		echo "888";
// 	}


// }

// $classA = new a("hello..");
// var_dump($classA);


// var_dump($_SESSION);

// var_dump(class_exists("a",true));






// function a_test($str)
// {
// 	$args=func_get_args();
// 	var_dump($args);
//     //echo "\nHi: $str";
//     //var_dump(debug_backtrace());
// }

// a_test('friend');




// $city  = "San Francisco";
// $state = "CA";
// $event = "SIGGRAPH";

// $nothing_here = [1,2,3,4];

// $location_vars = array("city", "state");

// $result = compact("event", "nothing_here","city", "state", $location_vars);
// print_r($result);

//$size = "large";
// $var_array = array("color" => "blue",
//                    "size"  => "medium",
//                    "shape" => "sphere");
// extract($var_array, EXTR_PREFIX_SAME, "wddx");

// echo "$color, $size, $shape, $wddx_size\n";




// $a = 'aaa\\dd';
// var_dump($a);


// abstract class a{} 

// $ref = new ReflectionClass('a'); 
// $ref = unserialize(serialize($ref)); 
// var_dump($ref); 
//var_dump($ref->getDocComment()); 



// $a =  array("a"=>1,"b"=>2,"c"=>3);
// $b = serialize($a);

// var_dump($b);

// $c = unserialize($b);

// var_dump($c);


// $time = microtime(TRUE);
// $mem = memory_get_usage();


// $a = str_repeat("aaaaa", 250000);




// print_r(array(
//   'memory' => (memory_get_usage() - $mem) / (1024 * 1024),
//   'seconds' => microtime(TRUE) - $time
// ));


//phpinfo();

//var_export(gd_info());


function curl($url, $method = 'GET', $params = array(), $header = array()) {
	$headers['CLIENT-IP'] = '202.103.229.40';    
	$headers['X-FORWARDED-FOR'] = '202.103.229.40';   
	$headerArr = array();    
	foreach( $headers as $n => $v ) {    
	    $headerArr[] = $n .':' . $v;     
	}  

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    if(strpos($url,'https') !== false){
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 对认证证书来源的检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); // 从证书中检查SSL加密算法是否存在
    }
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method)); //设置请求方式
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);// 获取的信息以文件流的形式返回
    if(!empty($params)){
        curl_setopt($ch, CURLOPT_POST, 1); // 发送一个常规的Post请求
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params); // Post提交的数据包
    }
    // if(!empty($header)){
    //     $headers = array();
    //     foreach($header as $k => $v){$headers[] = $k.': '.$v;}
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // }

    curl_setopt ($ch, CURLOPT_HTTPHEADER , $headerArr );  //构造IP  
  
	curl_setopt ($ch, CURLOPT_REFERER, "http://www.163.com/ ");   //构造来路  

    $result['content'] = curl_exec($ch);
    if(curl_errno($ch)) return false;
    $result['info'] = curl_getinfo($ch);
    curl_close($ch);
    return $result;
}


// $params = array();
// $params["ip"] = "180.97.33.107";
// $ret = curl("http://ip.taobao.com/service/getIpInfo2.php","POST",$params);

// echo json_encode($ret);

//echo json_decode($ret);

// $params = array();

//  $params["username"] = "uuuuu";
//  $params["password"] = "uuuuuu";

// //$params["user_login"] = "uuuuu";


// $i = 0;
// while($i < 100000){
// 	$begin = time();
//     $ret = curl("http://www.chanpin100.com/wp-admin/admin-ajax.php","POST",$params);
// 	//$ret = curl("http://www.chanpin100.com/wp-login.php?action=lostpassword","POST",$params);
// 	var_dump("the :".$i." time..");
// 	var_dump($ret);
// 	$i++;
// }


// http://student.meihaoxueyuan.com/api/users/captcha?id=1450247168039378


//Request URL:http://www.chanpin100.com/wp-content/themes/xiu/modules/comment.php
//comment:123
//comment_post_ID:3616
//comment_parent:0
//comment_mail_notify:comment_mail_notify


// http://www.chanpin100.com/wp-login.php
// username
// password




// function ccc(){
//     var_dump(__FUNCTION__);
// }

// function a(){
//     var_dump(__FUNCTION__);
//     ccc();
// }


// a();


// function t1(){
//     $i = 0;
//     $sum = 0;
//     while($i < 100000000){
//         $sum = $sum +$i;
//         $i++;
//     }
//     return $sum;
// }

// $begin = time();

// $sum = t1();

// $end = time();

// var_dump($sum);
// var_dump("used time:".($end-$begin));

// var_dump(time());
// var_dump($_SERVER['REQUEST_TIME']);
// sleep(5);

// echo "<br>";

// var_dump(time());
// var_dump($_SERVER['REQUEST_TIME']);


// $results =[1,2];

//  if(!empty($results)){
//      echo 3;          
//   }else{
//     echo 4;
//   }



// var_dump( date("Ymd"));



// $begin = $_SERVER["REQUEST_TIME"];

// $a = array();
// for($i = 0; $i <1000000; $i++){
//     $a[] = $i >> 3;
// }
// $b = serialize($a);


// $c = unserialize($b);

// var_dump(time()-$begin);


// for ($i=0; $i < 5 ; $i++) { 
    
//     var_dump($tmp);
//     $tmp = md5($tmp);
// }




$str = "The string ends in escape: ";
$str .= chr(21); /* 在 $str 后边增加换码符 */

/* 通常这样更有用 */

$str = sprintf("The string ends in escape: %c", 27);


var_dump($str);


?>










