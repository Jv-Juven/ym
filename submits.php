<?php
$ins = NULL;
$conn = NULL;
$conf = array();
$host = 'localhost';
$user = 'root';
$pwd = 'qwer1234';
$db = 'hx_database';
$char = 'utf8';
$conn = new mysqli($host, $user, $pwd, $db);

// 检测连接
if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
	echo "fals";
}
$openid = $_POST["openid"];
$name = $_POST["patriarchName"];
$id = $_POST["patriarchId"];
$tel = $_POST["phone"];
$cname = $_POST["childName"];
$cage = $_POST["childAge"];
$cid = $_POST["childId"];
$openid=base64_encode($openid);
$sql = "insert into yuyue (openid,pname,pid,tel,cname,cage,cid) values (" . "'$openid'" . "," . "'$name'" . "," . '$id' . "," . '$tel' . "," . "'$cname'" . "," . $cage . "," . '$cid' . ")";
//$sql = "insert into yuyue (pname) values (" . $name. ")";
if ($conn->query($sql) === TRUE) {
	    echo "1";
	} else {
		// echo $openid . "&&" . $name . "&&" . $id . "&&" . $tel . "&&" . $cname . "&&" . $cage . "&&" . $cid;
		echo $sql;
	    // echo "0";
	}
?>