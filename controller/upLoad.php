<?php

require_once "./../vendor/autoload.php";

use Qiniu\Auth;

  $bucket = 'makaupload';
  $accessKey = 'UFp58sI6CX93WOLekAtmvEPTj-ESr4t3kdX1jQsT';
  $secretKey = '0VjUO2iOWQbdaGzu15w06dx-_CZ4fDkRiV-xAzRs';
  $auth = new Auth($accessKey, $secretKey);

  $upToken = $auth->uploadToken($bucket);

  $upTokenArr = ["uptoken" => $upToken];

  echo json_encode($upTokenArr);

?>