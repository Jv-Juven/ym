




<html lang="en">

<head>

	<meta charset="utf-8" />

	<meta name="author" content="">

	<meta name="description" content="">



	<meta name="viewport" content="minimal-ui">

	<script>document.documentElement.className = 'js';</script>



	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Force latest IE rendering engine & Chrome Frame -->

	<meta name="apple-mobile-web-app-capable" content="yes" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Make IE recognise HTML5 elements for styling -->

	<!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<script type="text/javascript" src="http://makaprojects.oss-cn-hangzhou.aliyuncs.com/js/jquery-1.11.0.min.js"></script>

	<!-- <script src="http://makaprojects.oss-cn-hangzhou.aliyuncs.com/js/jquery.event.move.js"></script> -->
	<script src="js/jquery.event.swipe.js"></script>

	<!-- // <script src="js/weixin.js"></script> -->



	<script src="http://makaprojects.oss-cn-hangzhou.aliyuncs.com/js/jquery.transit.min.js"></script>



	<!-- 触摸滑动效果 -->

	<link rel="stylesheet" href="css/idangerous.swiper.css">

	<script src="js/idangerous.swiper-2.1.min.js"></script>



	<!-- 3D效果 -->

<!-- 	<link rel="stylesheet" href="css/idangerous.swiper.3dflow.css">

<script src="js/idangerous.swiper.3dflow.js"></script> -->



    <!-- Smooth -->

	<script src="js/idangerous.swiper.min.js"></script>

	<script src="js/idangerous.swiper.progress.js"></script>


	<link rel="stylesheet" href="css/animations.css">

	<link rel="stylesheet" href="css/myai.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/custom.css">

	<!-- 微信头设置 START -->
	 
	 <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	 <script src="js/wxconfig.js"></script>
	 <script>

	 setwx({
	 	debug:false,
	 	title:"北京国际音乐节-童画乐园免费获票直通车",
	 	desc:"与孩子共享视觉听觉盛宴，走入童话世界。",
	 	imgurl:"http://7oxgw6.com1.z0.glb.clouddn.com/hxjj2share.jpg"
	 });

	 
	 </script>
	<!-- 微信头设置 END -->

</head>



<style>

	.page{

		margin:0;

		padding:0;

		overflow:hidden;

		top:0;

		position:relative;

		font-family: "微软雅黑";

	}

	#pages {

		margin:0;

		padding:0;

		width:320px;

		height:504px;

		position:absolute;

		left:50%;

		top:50%;

		margin:-252px 0 0 -160px;

		overflow:hidden;

	}

	.swiper-containermain

	{

		margin:0;

		padding:0;

		width:320px;

		height:504px;

		position:absolute;

		left:50%;

		top:50%;

		margin:-252px 0 0 -160px;

	}

	#loading{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgba(45,41,43,1);
	}

	section img{
		position: absolute;
	}

	.page-bg{
		top:50%;
		left: 50%;
		width: 320px;
		height: 504px;
		margin:-252px -160px;
	}

</style>



<body style="padding:0;margin:0;background:#000;">

	<!-- 预加载loading图片 START -->
	<!-- <img  style="position:absolute;top:160px;width:180px;left:50%;margin-left:-90px" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/loading.gif" alt=""> -->
	<!-- 预加载loading图片 END -->

	<!-- <audio id="music" autoplay loop src="#" data-src="http://makaupload.qiniudn.com/fbbmusic1.mp3"></audio> -->

	<audio id="music"  autoplay="autoplay" loop="loop">
		  <!-- <source src="http://makaupload.qiniudn.com/fbbmusic1.mp3" type="audio/mpeg"/> -->
		您的浏览器不支持 audio 元素。
	</audio>

	<div id="page_maincontent" style="width:100%;height:100%;overflow:hidden">

		

		<div id="pages">

			<div id="swiper_container" class="swiper-container swiper-containermain">

				<div class="swiper-wrapper">
					<!-- 1 -->
					<section class="swiper-slide page swiper-no-swiping" style="">

						<img src="http://7oxgw6.com1.z0.glb.clouddn.com/hxjj2p1-bg.jpg" alt="" class="page-bg">

						<img id="p1_city" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_city.png" alt="" class="page-bg">
						<img id="p1_clouds" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_clouds.png" alt="" class="page-bg">
						<img id="p1_girls" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_girls.png" alt="" class="page-bg">
						<img id="p1_lines" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_lines.png" alt="" class="page-bg">
						<img id="p1_moon" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_moon.png" alt="" class="page-bg">
						<img id="p1_note01" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note01.png" alt="" class="page-bg">
						<img id="p1_note02" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note02.png" alt="" class="page-bg">
						<img id="p1_note03" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note03.png" alt="" class="page-bg">
						<img id="p1_note04" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note04.png" alt="" class="page-bg">
						<img id="p1_note05" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note05.png" alt="" class="page-bg">
						<img id="p1_wind" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_wind.png" alt="" class="page-bg">
						<img id="p1_slogan01" src="http://7oxgw6.com1.z0.glb.clouddn.com/hxjj2p2-slogan.png" alt="" class="page-bg">
						<img id="p1_words" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_words.png" alt="" class="page-bg">

						<img id="p1_btn01" class="p1-btn01" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_btn01.png" alt="" class="">
						<img id="p1_btn02" class="p1-btn02" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_btn02.png" alt="" class="">

						<div class="page-bg tips-bg" style="position: absolute;background: rgba(0, 0, 0, .7)"></div>
						<div class="page-bg tips" style="position: absolute;background: rgba(0, 0, 0, 0)">
							<img src="http://7oxgw6.com1.z0.glb.clouddn.com/hxjj2p1-meng.png" alt="" class="page-bg">
							<img src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_slogan.png" alt="" class="p1-tips-slogan">
							<img src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_btn01.png" alt="" class="p1-tip-btn01">
							<img src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_btn02.png" alt="" class="p1-tip-btn02">
							<img src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_btn03.png" alt="" class="p1-tip-btn03">
							<div class="p1-close"></div>
						</div>
						
					</section>

					<!-- 2 -->
					<section class="swiper-slide page swiper-no-swiping" style="">
						<img src="http://7oxgw6.com1.z0.glb.clouddn.com/hxjj2p2-bg.jpg" alt="" class="page-bg">

						<img id="p2_lines" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_line.png" alt="" class="page-bg">
						<img id="p2_note01" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note01.png" alt="" class="page-bg">
						<img id="p2_note02" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note02.png" alt="" class="page-bg">
						<img id="p2_note03" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note03.png" alt="" class="page-bg">
						<img id="p2_note04" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note04.png" alt="" class="page-bg">
						<img id="p2_note05" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note05.png" alt="" class="page-bg">
						<img id="p2_wind" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_wind.png" alt="" class="page-bg">
						
						<img id="p2_letter02" class="p2-letter02" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p2_letter_2.png" alt="" class="p2-letter">
						<img id="p2_letter01" class="p2-letter01" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-19/p2_letter_1.png" alt="" class="p2-letter">

						<img id="p2_slogan" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p2_slogan.png" alt="" class="page-bg">
						<img id="p2_inputs" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p2_inputs.png" alt="" class="page-bg">
                        <!-- <img id="p2_btn02" class="p2-btn02" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p2_btn.png" alt="" class="page-bg"> -->
                        <div id="p2_btn02" class="p2-btn02"></div>

						<img id="p2_btn01" class="p1-btn01" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_btn01.png" alt="" class="">
						
						<div class="input-container">
							<input class="input" type="text" placeholder="请输入家长姓名"/>
							<input class="input" type="text" placeholder="请输入家长身份证号码"/>
							<input class="input" type="text" placeholder="请输入您的手机号码"/>
							<input class="input" type="text" placeholder="请输入儿童姓名"/>
							<input class="input" type="text" placeholder="请输入儿童年龄"/>
							<input class="input" type="text" placeholder="请输入儿童身份证号码"/>
						</div>
						<div class="page-bg tips-bg" style="position: absolute;background: rgba(0, 0, 0, .7)"></div>
						<div class="page-bg tips" style="position: absolute;background: rgba(0, 0, 0, 0)">
							<img src="http://7oxgw6.com1.z0.glb.clouddn.com/hxjj2p1-meng.png" alt="" class="page-bg">
							<img src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_slogan.png" alt="" class="p1-tips-slogan">
							<img src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_btn01.png" alt="" class="p1-tip-btn01">
							<img src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_btn02.png" alt="" class="p1-tip-btn02">
							<img src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_btn03.png" alt="" class="p1-tip-btn03">
							<div class="p1-close"></div>
						</div>
						<div class="page-bg warn" style="position: absolute;background: rgba(0, 0, 0, .7)">
							<div class="warn-box">
								请输入正确的
							</div>
						</div>

					</section>

					<!-- 3 -->
					<section class="swiper-slide page swiper-no-swiping" style="">
						<img src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_bg.jpg" alt="" class="page-bg">
						<img id="p3_lines" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_line.png" alt="" class="page-bg">
						<img id="p3_music2" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_music2.png" alt="" class="page-bg">
						<img id="p3_music03" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_music03.png" alt="" class="page-bg">
						<img id="p3_wind" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_wind.png" alt="" class="page-bg">
						<img id="p3_hand" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_hand.png" alt="" class="page-bg">
						<img id="p3_human" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_human.png" alt="" class="page-bg">
						<img id="p3_cat" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_cat.png" alt="" class="page-bg">
						<img id="p3_music" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_music.png" alt="" class="page-bg">
						<img id="p3_note04" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note04.png" alt="" class="page-bg">
						<img id="p3_note05" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_note05.png" alt="" class="page-bg">
                        <img id="p3_words" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_words.png" alt="" class="page-bg">

					    <img id="p3_btn" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p3_btn.png" alt="" class="p3-btn">

						<img id="p3_btn01" class="p1-btn01" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_btn01.png" alt="" class="">

						

						<div class="page-bg tips-bg" style="position: absolute;background: rgba(0, 0, 0, .7)"></div>
						<div class="page-bg tips" style="position: absolute;background: rgba(0, 0, 0, 0)">
							<img class="page-bg" src="http://7oxgw6.com1.z0.glb.clouddn.com/hxjj2p1-meng.png" alt="">
							<img class="p1-tips-slogan" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_slogan.png" alt="">
							<img class="p1-tip-btn01" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_btn01.png" alt="">
							<img class="p1-tip-btn02" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_btn02.png" alt="">
							<img class="p1-tip-btn03" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/p1_tips_btn03.png" alt="">
							<div class="p1-close"></div>
						</div>

						<img id="share" src="http://bigproject.oss-cn-beijing.aliyuncs.com/hxet/9-18/share.png" alt="" class="page-bg">

					</section>
					

				</div>

				<!-- <img class="switch" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/off.png" alt=""> -->
				<!-- <img class="switch" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/on.png" alt=""> -->

			</div>

		</div>
		
	</div>
	<div id="code" style="display:none"><?php echo $_GET['code']; ?></div>
	<div id="mid" style="display:none"></div>
	<div id="" style="position:absolute;width:640px;height:1008px;top:50%;left:50%;margin:-504px -320px;background:rgb(253,242,137);display:none;"></div>

	<div id="loading" style="">
		<img  style="position:absolute;top:160px;width:180px;left:50%;margin-left:-90px" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/loading.gif" alt="">
		<!-- <div style="position:absolute;width:320px;height:20px;left:50%;top:50%;margin:-10px -160px;text-align:center;text-shadow:0px 0px 3px #111;">
			加载中...
		</div> -->
	</div>

		
</body>

<script src="js/main.js"></script>
<script>
	$(function(){
		var code="<?php echo $_GET['code'];?>";
		var url="code.php";
		$.ajax({
			url:url,
			type:"GET",
			data:{code:code},
			success:function(data){
				$("#mid").text(data);
			},
			error:function(XMLHttpRequest, textStatus, errorThrown){
				alert(XMLHttpRequest.status);
			}
		});
	});
</script>



