<?php
@$code = $_GET['code'];
//前端传来的code值
@$appid = "wxa67e8e7d9404fb7f";
@$appsecret = "779277ccfb5a4185b2f5e6749b86947c";
//获取openid
$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$appsecret&code=$code&grant_type=authorization_code";
$result = https_request($url);
$jsoninfo = json_decode($result, true);
@$openid = $jsoninfo["openid"];
$access_token = $jsoninfo["access_token"];

$url2="https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
$result2 = https_request($url2);
$jsoninfo2 = json_decode($result2, true);
@$name = $jsoninfo2["nickname"];
//从返回json结果中读出openid
echo $name;

function https_request($url, $data = null) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
	if (!empty($data)) {
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	}
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($curl);
	curl_close($curl);
	return $output;
}
?>
