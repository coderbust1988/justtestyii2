<?php

set_time_limit(0);

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
    if(!empty($params) && sizeof($params) > 0){
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



$i = 0;
$arrayStr = array();
while($i < 10000000){
	$begin = time();
	var_dump("the :".$i." time..");
	$arrayStr[] = str_repeat("a", 100).str_repeat("b", 100);
	$i++;
	//sleep(1);
}