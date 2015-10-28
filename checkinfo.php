<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="viewport" content="minimal-ui">
		<script>document.documentElement.className = 'js';</script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<!-- Force latest IE rendering engine & Chrome Frame -->
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>
			报名列表
		</title>
		<style>.table {
	display: table;
	width: 98%;
	margin: 0 auto;
	border-collapse: collapse;
	font-family: "微软雅黑";
	font-size: 14px;
}
.tr {
	display: table-row;
}
.tr:nth-child(1) {
	color: #222;
	font-size: 16px;
	font-weight: 600;
}
.tr:nth-child(odd) {
	background-color: rgba(200, 250, 116, 0.5);
}
.tr>div {
	display: table-cell;
	border: 1px solid #999;
	text-align: center;
}</style>
	</head>
	<body>
		<div class="table">
			<div class="tr">
				<div>
					序号
				</div>
				<div>
					微信号
				</div>
				<div>
					家长名
				</div>
				<div>
					家长身份证
				</div>
				<div>
					电话
				</div>
				<div>
					儿童姓名
				</div>
				<div>
					儿童年龄
				</div>
				<div>
					儿童身份证
				</div>
			</div>
			<?php

				 $ins = NULL;
     $conn = NULL;
     $conf = array();
     $host = 'localhost';
     $user = 'root';
     $pwd = 'qwer1234';
   $db = 'hx_database';
    $char = 'utf8';
	$conn = new mysqli($host, $user, $pwd,$db);

	// 检测连接
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$order=0;
	 $sql="select * from yuyue";

            $result=$conn->query($sql);

            if ($result->num_rows > 0) {
                // 输出每行数据
                while($row = $result->fetch_assoc()) {
                	$order++;
                     $id=base64_decode($row["openid"]);
                    $pname=$row["pname"];
                    $pid=$row["pid"];
					$tel=$row["tel"];
					
					 $cname=$row["cname"];
                    $cid=$row["cid"];
                    $age=$row["cage"];
                    echo "<div class='tr'><div>$order</div><div>$id</div><div>$pname</div><div>$pid</div><div>$tel</div><div>$cname</div><div>$age</div><div>$cid</div></div>";
                }
            } 
			?>
		</div>
	</body>
</html>