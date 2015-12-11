<?php
require_once '../vendor/autoload.php';

use Qiniu\Auth;

  // $bucket = '';
  // $accessKey = '';
  // $secretKey = '';
	
  $bucket = '';
  $accessKey = '';
  $secretKey = '';

  

  $auth = new Auth($accessKey, $secretKey);

  $upToken = $auth->uploadToken($bucket);

  echo $upToken;




/*
token 是如下
  FMIQBKeyeSviTXMHf5CoTr_x5X2ut7rIttwBM5ub:ZMiaVrP_zHl7rTwvC-9RoHknxtw=:eyJzY29wZSI6InlhbmdnYW5nY2MiLCJkZWFkbGluZSI6MTQ0OTA0MTQ2MH0=

*/





