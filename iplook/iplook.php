<?php

class IP
{
    private static $fp     = NULL;
    private static $offset = NULL;
    private static $index  = NULL;

    private static $cached = array();

    public static function find($ip)
    {
        if (empty($ip) === TRUE)
        {
            return 'N/A';
        }

        $nip   = gethostbyname($ip);
        $ipdot = explode('.', $nip);

        if ($ipdot[0] < 0 || $ipdot[0] > 255 || count($ipdot) !== 4)
        {
            return 'N/A';
        }

        if (isset(self::$cached[$nip]) === TRUE)
        {
            return self::$cached[$nip];
        }

        if (self::$fp === NULL)
        {
            self::init();
        }

        $nip2 = pack('N', ip2long($nip));

        $tmp_offset = (int)$ipdot[0] * 4;
        $start      = unpack('Vlen', self::$index[$tmp_offset] . self::$index[$tmp_offset + 1] . self::$index[$tmp_offset + 2] . self::$index[$tmp_offset + 3]);

        $index_offset = $index_length = NULL;
        $max_comp_len = self::$offset['len'] - 1024 - 4;
        for ($start = $start['len'] * 8 + 1024; $start < $max_comp_len; $start += 8)
        {
            if (self::$index{$start} . self::$index{$start + 1} . self::$index{$start + 2} . self::$index{$start + 3} >= $nip2)
            {
                $index_offset = unpack('Vlen', self::$index{$start + 4} . self::$index{$start + 5} . self::$index{$start + 6} . "\x0");
                $index_length = unpack('Clen', self::$index{$start + 7});

                break;
            }
        }

        if ($index_offset === NULL)
        {
            return 'N/A';
        }

        fseek(self::$fp, self::$offset['len'] + $index_offset['len'] - 1024);

        self::$cached[$nip] = explode("\t", fread(self::$fp, $index_length['len']));

        if(sizeof(self::$cached[$nip]) == 4 && (self::$cached[$nip][0] != "CLOUDFLARE" )){
            return self::$cached[$nip];
        }else{
            return self::$cached[$nip];
            
            // $params = array();
            // $params["ip"] = $ip;
            // $ret = self::curl("http://ip.taobao.com/service/getIpInfo2.php","POST",$params);
            
            // $ret = json_decode($ret);
            
            // if($ret->code ==0 ){
            //     $tmpArray = array();
            //     $tmpArray[] = $ret->data->country;
            //     $tmpArray[] = $ret->data->region;
            //     $tmpArray[] = $ret->data->city;
            //     self::$cached[$nip] = $tmpArray;
            //     return self::$cached[$nip];
            // }else{
            //     return 0;
            // }
        }
    }

    private static function init()
    {
        if (self::$fp === NULL)
        {
            self::$fp = fopen(__DIR__ . '/17monipdb.dat', 'rb');
            if (self::$fp === FALSE)
            {
                throw new Exception('Invalid 17monipdb.dat file!');
            }

            self::$offset = unpack('Nlen', fread(self::$fp, 4));
            if (self::$offset['len'] < 4)
            {
                throw new Exception('Invalid 17monipdb.dat file!');
            }

            self::$index = fread(self::$fp, self::$offset['len'] - 4);
        }
    }

    public function __destruct()
    {
        if (self::$fp !== NULL && is_resource(self::$fp))
        {
            fclose(self::$fp);
        }
    }


    public static function curl($url, $method = 'GET', $params = array(), $header = array()) {
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
        
        if(!empty($header)){
            $headers = array();
            foreach($header as $k => $v){$headers[] = $k.': '.$v;}
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
              
        curl_setopt ($ch, CURLOPT_REFERER, "http://www.163.com/ ");   //构造来路  
        $result = curl_exec($ch);
        if(curl_errno($ch)){
            return false;
        }
        curl_close($ch);
        return $result;
    }
}



// echo $_SERVER["REMOTE_ADDR"];
// echo "<br><br>";

function getIP(){
global $ip;
if (getenv("HTTP_CLIENT_IP"))
$ip = getenv("HTTP_CLIENT_IP");
else if(getenv("HTTP_X_FORWARDED_FOR"))
$ip = getenv("HTTP_X_FORWARDED_FOR");
else if(getenv("REMOTE_ADDR"))
$ip = getenv("REMOTE_ADDR");
else $ip = "Unknow";
return $ip;
}

$ipclass = new IP();

var_dump("117.176.128.148");
var_dump($ipclass->find("117.176.128.148"));

var_dump("180.97.33.107");
var_dump($ipclass->find("180.97.33.107"));

var_dump("218.75.110.152");
var_dump($ipclass->find("218.75.110.152"));

var_dump("104.28.14.119");
var_dump($ipclass->find("104.28.14.119")); // http://ip.taobao.com/ipSearch.php?ipAddr=104.28.14.119

var_dump("192.30.252.128");
var_dump($ipclass->find("192.30.252.128")); 

var_dump("182.140.236.27");
var_dump($ipclass->find("182.140.236.27")); 

var_dump("183.79.227.90");
var_dump($ipclass->find("183.79.227.90")); 

var_dump("104.16.35.249");
var_dump($ipclass->find("104.16.35.249")); 

var_dump("101.200.96.31");
var_dump($ipclass->find("101.200.96.31")); 

var_dump("61.153.202.157");
var_dump($ipclass->find("61.153.202.157")); 




// http://www.ipip.net/download.html



?>