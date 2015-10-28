 
<?php
require_once "wx/jssdk.php";
$jssdk = new JSSDK("wx817e130d4fd59abd", "03eb1d9e75fee5a9fab4c08481e0ba63");
$signPackage = $jssdk->GetSignPackage();
?>



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

	<script src="http://makaprojects.oss-cn-hangzhou.aliyuncs.com/js/jquery.event.move.js"></script>

	<script src="js/jquery.event.swipe.js"></script>

	<script src="js/weixin.js"></script>



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

	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script>
		var data={
			debug:false,
			title:"范冰冰魔范学院开学啦——4月2日，范爷降临",
			desc:"",
			imgurl:"http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-30/logo.jpg",
			link:'<?php echo $signPackage["url"];?>'
		}

		wx.config({
		  debug: false,
		  appId: '<?php echo $signPackage["appId"];?>',
		  timestamp: <?php echo $signPackage["timestamp"];?>,
		  nonceStr: '<?php echo $signPackage["nonceStr"];?>',
		  signature: '<?php echo $signPackage["signature"];?>',
		  jsApiList: [
		    // 所有要调用的 API 都要加到这个列表中
		    'onMenuShareTimeline','onMenuShareAppMessage'
		  ]
		});

		  wx.ready(function () {
		      // 在这里调用 API
		      //分享给朋友
		      wx.onMenuShareAppMessage({
		          title:data['title'], // 分享标题
		          desc:data['desc'], // 分享描述
		          link: data['link'], // 分享链接
		          imgUrl:data['imgurl'], // 分享图标
		          type: '', // 分享类型,music、video或link，不填默认为link
		          dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		          success: function () { 
		              // 用户确认分享后执行的回调函数
		              //alert('a');
		              
		          },
		          cancel: function () { 
		              // 用户取消分享后执行的回调函数
		          }
		      });
		      //分享到朋友圈
		      wx.onMenuShareTimeline({
		          title:data['title'], // 分享标题
		          desc:data['desc'], // 分享描述
		          link:data['link'], // 分享链接
		          imgUrl:data['imgurl'], // 分享图标
		          success: function () { 
		              // 用户确认分享后执行的回调函数
		              alert(data['desc']);
		          },
		          cancel: function () { 
		              // 用户取消分享后执行的回调函数
		          }
		      });
		      //分享到QQ
		      wx.onMenuShareQQ({
		          title: data['title'], // 分享标题
		          desc: data['desc'], // 分享描述
		          link: data['link'], // 分享链接
		          imgUrl: data['imgurl'], // 分享图标
		          success: function () { 
		             // 用户确认分享后执行的回调函数
		          },
		          cancel: function () { 
		             // 用户取消分享后执行的回调函数
		          }
		      });
		      //分享到腾讯微博
		      wx.onMenuShareWeibo({
		          title: data['title'], // 分享标题
		          desc: data['desc'], // 分享描述
		          link: data['link'], // 分享链接
		          imgUrl: data['imgurl'], // 分享图标
		          success: function () { 
		             // 用户确认分享后执行的回调函数
		          },
		          cancel: function () { 
		              // 用户取消分享后执行的回调函数
		          }
		      });

		});
	</script>

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
	section:nth-child(10) img{
		/*opacity: 0.4;*/
	}

	.bounceInUp,.bounceInDown,.fadeIn,.lightSpeedIn,.fadeOut,.bounceIn,.fadeInDown,.fadeInUp,.flipInX{
		-webkit-animation-duration:1s;
		        animation-duration:1s;
	}

	.opacity-twinkle{
		-webkit-animation:opacity-twinkle 2s 0.1s infinite linear normal forwards;
		        animation:opacity-twinkle 2s 0.1s infinite linear normal forwards;
	}
	@-webkit-keyframes opacity-twinkle{
		0%{
			opacity: 1;
		}
		50%{
			opacity: 0.3;
		}
		100%{
			opacity: 1;
		}
	}
	@keyframes opacity-twinkle{
		0%{
			opacity: 1;
		}
		50%{
			opacity: 0.3;
		}
		100%{
			opacity: 1;
		}
	}

	.p1-touch{
		position: absolute;
		width:105px;
		height: 105px;
		left:50%;
		margin:0 -53px;
		top:345px;
		/*pointer-events:none;*/
		/*-webkit-user-select:none;*/
	}
	.p1-mask{
		width: 100%;
		height: 100%;
		background-image: url('http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p1_touch.png');
		background-size: 100% 100%;
		-webkit-mask:-webkit-gradient(linear,right top,right bottom,color-stop(0%,rgba(0,0,0,1)),color-stop(15%,rgba(0,0,0,0)));
		-webkit-mask-size:100% 100%;
		-webkit-mask-position:0 0;
		/*-webkit-transition:all 2s ease-out;*/
	}

	.arrow{
		width: 40px;
		margin: 0 -20px;
		top: 480px;
		left: 50%;
	}

	.switch{
		position: absolute;
		width:30px;
		top:20px;
		right: 20px;
	}


	

</style>



<body style="padding:0;margin:0;background:#000;">

	<!-- 预加载loading图片 START -->
	<img  style="position:absolute;top:160px;width:180px;left:50%;margin-left:-90px" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/loading.gif" alt="">
	<!-- 预加载loading图片 END -->

	<audio id="music" autoplay loop src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/music1.mp3"></audio>

	<div id="page_maincontent" style="width:100%;height:100%;overflow:hidden">

		

		<div id="pages">

			<div id="swiper_container" class="swiper-container swiper-containermain">

				<div class="swiper-wrapper">
					<!-- 1 -->
					<section class="swiper-slide page swiper-no-swiping" style="">
						<img class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/p1_bg.jpg" alt="">

						<img id="p1_fbb" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p1_fbb.jpg" alt="" class="page-bg">

						<img style="" class="page-bg stars01" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/stars01.png" alt="">
						<img style="" class="page-bg stars02" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/stars02.png" alt="">

						<!-- <img  class="page-bg stars" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/stars01.png" alt="">
						<img  class="page-bg stars" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/stars02.png" alt="">
						<img  class="page-bg stars" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/stars03.png" alt="">
						<img  class="page-bg stars" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/stars04.png" alt="">
						<img  class="page-bg stars" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/stars05.png" alt="">-->

						<!-- <img id="p1_stars" class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p1_stars.png" alt=""> -->
						<!-- <img class="page-bg" src="" alt=""> -->

						<img id="p1_tips" class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p1_tips.png" alt="">
						<img id="p1_title" style="width:280px;left:50%;margin:0 -140px;top:225px;" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/page_title.png" alt="">
						<img id="p1_thumb" class="p1-touch" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/p1_thumb.jpg" alt="">
						<img id="p1_thumb_line" class="p1-touch" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/p1_thumb_line.png" alt="">
						<!-- <img id="p1_touch" style="width:105px;left:50%;margin:0 -53px;top:346px;" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p1_touch.png" alt=""> -->
						
						<div id="p1_cover" class="p1-touch"></div>

					</section>
					<!-- 2 -->
					<section class="swiper-slide page">
						<img class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/p2_bg.jpg" alt="">
						<img id="p2_paper" class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/p2_paper.png" alt="">
						<img id="p2_silk" class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/p2_silk.png" alt="">
						<img id="p2_cover" class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/p2_cover.png" alt="">
						<img id="p2_stamp" style="width:80px;margin:0;left:50%;top:320px;" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/p2_stamp.png" alt="">
						<img id="p2_words" class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p2_words.png" alt="">

						<img class="arrow" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/arrow_up.png" alt="">
					</section>

					<!-- 3 -->
					<section class="swiper-slide page">
						<img class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p3_bg.jpg" alt="">

						<img style="" class="page-bg stars03" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/stars01.png" alt="">
						<img style="" class="page-bg stars04" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/stars02.png" alt="">

						<img id="p3_line1" class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p3_line1.png" alt="">
						<img id="p3_line2" class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p3_line2.png" alt="">
						<img id="p3_title" style="width:230px;left:50%;margin:0 -115px;top:40px;" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/p3_title.png" alt="">
						<img id="p3_circle" style="width:80px;left:50%;margin:0 35px;top:275px;" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p3_circle.png" alt="">
						<img id="p3_info1" style="width:150px;left:50%;margin:0 -130px;top:165px;" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p3_info1.png" alt="">
						<img id="p3_info2" style="width:95px;left:50%;margin:0 -70px;top:360px;" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p3_info2.png" alt="">
						<img id="p3_point" style="width:18px;left:50%;margin:0 67px;top:292px;" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p3_point.png" alt="">

						<img class="arrow" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/arrow_up.png" alt="">
					</section>

					<!-- 4 -->
					<section class="swiper-slide page">
						<img class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p4_bg.jpg" alt="">

						<img style="" class="page-bg stars05" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/stars01.png" alt="">
						<img style="" class="page-bg stars06" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/stars02.png" alt="">

						<img id="p4_tips" class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p4_tips.png" alt="">
						<img id="p4_words" class="page-bg" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p4_words.png" alt="">
						<img id="p4_title" style="width:250px;left:50%;margin:0 -125px;top:170px;" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/page_title.png" alt="">
						<img id="p4_code" style="width:120px;left:50%;margin:0 -60px;top:330px;" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-28/p4_code.png" alt="">
					</section>

				</div>

				<img class="switch" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/off.png" alt="">
				<img class="switch" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/on.png" alt="">

			</div>

		</div>
		
	</div>

	<div id="" style="position:absolute;width:640px;height:1008px;top:50%;left:50%;margin:-504px -320px;background:rgb(253,242,137);display:none;"></div>

	<div id="loading" style="">
		<img  style="position:absolute;top:160px;width:180px;left:50%;margin-left:-90px" src="http://myteamproject.oss-cn-beijing.aliyuncs.com/FBB/3-29/loading.gif" alt="">
		<!-- <div style="position:absolute;width:320px;height:20px;left:50%;top:50%;margin:-10px -160px;text-align:center;text-shadow:0px 0px 3px #111;">
			加载中...
		</div> -->
	</div>

		
</body>



<script>


$(function(){

	window.ontouchmove=function(e){
		var evt=e||event;
		evt.returnValue=false;
	}
	window.onmousemove=function(e){
		var evt=e||event;
		evt.returnValue=false;
	}



	var timeouts = [];



	function disappearall()

	{
		//1
		$("section:nth-child(1) img:not(:nth-child(1))").hide();
		//2
		$("#p2_cover,#p2_stamp,#p2_words").hide();
		$("#p2_paper,#p2_silk").css({"rotate":"0deg","x":"0","y":"0"}).show();
		//3
		$("section:nth-child(3) img:not(:nth-child(1)):not('.arrow')").hide();
		//4
		$("section:nth-child(4) img:not(:nth-child(1))").hide();
		// $("").hide();

		// $(".stars").hide();
		
		while(timeouts.length!=0) clearTimeout(timeouts.pop());

	}
	function showp1()

	{
		disappearall();
		$("#p1_cover").show();
		timeouts.push(setTimeout('$("#p1_title").show().addClass("bounceInDown");',0));
		timeouts.push(setTimeout('$("#p1_fbb").show().addClass("fadeIn");',400));
		timeouts.push(setTimeout('$("#p1_tips").show().addClass("fadeIn");',1200));
		// timeouts.push(setTimeout('$("section:nth-child(1) .stars,.stars01").show()',800));
		timeouts.push(setTimeout('$("#p1_thumb").css({"y":"100px"}).show().transition({"y":"0"},2000)',400));
		// timeouts.push(setTimeout(stars,0));
		timeouts.push(setTimeout(function(){
			$(".stars01").show();
			stars_twinkle01();
		},0));
		timeouts.push(setTimeout(function(){
			$(".stars02").show();
			stars_twinkle02();
		},1000));
		

	}

	function showp2()

	{

		disappearall();
		timeouts.push(setTimeout('$("#p2_silk").fadeOut(600)',200));
		timeouts.push(setTimeout('$("#p2_paper").transition({"rotate":"-50deg","x":"30px","y":"-105px"},1200)',600));
		timeouts.push(setTimeout('$("#p2_paper").fadeOut(800)',1400));
		timeouts.push(setTimeout('$("#p2_cover,#p2_words").fadeIn(1400)',1900));
		timeouts.push(setTimeout('$("#p2_stamp").css({"scale":"2","opacity":"0"}).show().transition({"scale":"1","opacity":"0.8"},400,"ease-in")',3000));
		// timeouts.push(setTimeout('$("section:nth-child(2) .arrow").fadeIn(200)',0));
		timeouts.push(setTimeout(arrowing,0));
	}


	function showp3()

	{

		disappearall();
		timeouts.push(setTimeout('$("#p3_title").show().addClass("bounceInDown");',0));
		timeouts.push(setTimeout('$("section:nth-child(3) .stars,.stars01").show()',800));
		timeouts.push(setTimeout('$("#p3_circle").show().addClass("scale-opct");',0));
		timeouts.push(setTimeout('$("#p3_point").show().addClass("hatch");',500));
		timeouts.push(setTimeout('$("#p3_line1").show().addClass("fadeIn");',500));
		timeouts.push(setTimeout('$("#p3_info1").show().addClass("BounceIn");',1200));
		timeouts.push(setTimeout('$("#p3_line2").show().addClass("fadeIn");',1800));
		timeouts.push(setTimeout('$("#p3_info2").show().addClass("BounceIn");',2500));

		// timeouts.push(setTimeout('$(".stars").show().addClass("scale-opct");',0));

		// timeouts.push(setTimeout('$("section:nth-child(3) .arrow").fadeIn(200)',0));
		
		timeouts.push(setTimeout(arrowing,0));
		timeouts.push(setTimeout(function(){
			$(".stars03").show();
			stars_twinkle03();
		},0));
		timeouts.push(setTimeout(function(){
			$(".stars04").show();
			stars_twinkle04();
		},1000));

	}



	function showp4()

	{

		disappearall();
		timeouts.push(setTimeout('$("#p4_title").show().addClass("flipInX");',0));
		timeouts.push(setTimeout('$("section:nth-child(4) .stars,.stars01").show()',800));
		timeouts.push(setTimeout('$("#p4_words").show().addClass("lightSpeedIn");',400));
		timeouts.push(setTimeout('$("#p4_code").show().addClass("fadeIn");',800));
		timeouts.push(setTimeout('$("#p4_tips").show().addClass("fadeInUp");',1000));

		// timeouts.push(setTimeout('$(".stars").show().addClass("scale-opct");',0));

		// timeouts.push(setTimeout(stars_twinkle01,0));
		// timeouts.push(setTimeout(stars_twinkle02,1000));
		timeouts.push(setTimeout(function(){
			$(".stars05").show();
			stars_twinkle05();
		},0));
		timeouts.push(setTimeout(function(){
			$(".stars06").show();
			stars_twinkle06();
		},1000));

	}




	ws=document.body.clientWidth/320.0;

	hs=document.body.clientHeight/504.0;

		if(ws-hs>1) ws=hs;

		$('#pages').each(function(){


				$(this).css({ scale: hs<ws?ws:hs});

		});

		$('.bg').css({ scale: ws/(hs<ws?ws:hs)});

	var mySwiper01;
	setTimeout(function(){


		mySwiper01 = new Swiper('.swiper-containermain',{

					slidesPerView:1,

					mode:'vertical',

					//Enable 3D Flow

					

					//followFinger:false,

					progress: false,

					speed:400,

					noSwiping:true,

					initialSlide:0,

					followFinger:true,

					updateOnImagesReady:true,

					onSwiperCreated: function(swiper){

						// if(swiper.activeIndex!==0){
							eval('showp'+(swiper.activeIndex+1)+'()');
						// } 
						
					} ,

					

					onSlideChangeEnd:function(swiper){

						eval('showp'+(swiper.activeIndex+1)+'()');

					},

					

					onSlideChangeStart:function(swiper){

						disappearall();

					},

					

					onProgressChange: function(swiper) {

						// var slide=swiper.slides[0];
						// var progress=slide.progress;
						// $("#p1_light").css({'y':-progress*20+'px'});
						// console.log(progress);
					},

					onTouchStart:function(swiper){
						// disappearall();
					},

					onTouchEnd:function(swiper) {

					},

					onImagesReady: function(swiper){
						// console.log("onImagesReady");
						// $("#loading").fadeOut(300);
						// eval(showp1());
					}

				});

		$("#loading").fadeOut(300);

	},4000);




	function music_play(){
		var page_music=document.getElementById("music");
		$(".switch").eq(1).on("click",function(){
			page_music.pause();
			$(this).hide();
		});
		$(".switch").eq(0).on("click",function(){
			page_music.play();
			$(".switch").eq(1).show();
		});
	}

	music_play();

	//星光闪烁和箭头晃动
	function stars_twinkle01(){
		$("section .stars01").css({"opacity":"1"}).transition({"opacity":"0.1"},1000,"linear",function(){
			$("section .stars01").css({"opacity":"0.1"}).transition({"opacity":"1"},1000,"linear",stars_twinkle01);
		});	
	}
	function stars_twinkle02(){
		$("section .stars02").css({"opacity":"1"}).transition({"opacity":"0.1"},1000,"linear",function(){
			$("section .stars02").css({"opacity":"0.1"}).transition({"opacity":"1"},1000,"linear",stars_twinkle02);
		});	
	}
	function stars_twinkle03(){
		$("section .stars03").css({"opacity":"1"}).transition({"opacity":"0.1"},1000,"linear",function(){
			$("section .stars03").css({"opacity":"0.1"}).transition({"opacity":"1"},1000,"linear",stars_twinkle03);
		});	
	}
	function stars_twinkle04(){
		$("section .stars04").css({"opacity":"1"}).transition({"opacity":"0.1"},1000,"linear",function(){
			$("section .stars04").css({"opacity":"0.1"}).transition({"opacity":"1"},1000,"linear",stars_twinkle04);
		});	
	}
	function stars_twinkle05(){
		$("section .stars05").css({"opacity":"1"}).transition({"opacity":"0.1"},1000,"linear",function(){
			$("section .stars05").css({"opacity":"0.1"}).transition({"opacity":"1"},1000,"linear",stars_twinkle05);
		});	
	}
	function stars_twinkle06(){
		$("section .stars06").css({"opacity":"1"}).transition({"opacity":"0.1"},1000,"linear",function(){
			$("section .stars06").css({"opacity":"0.1"}).transition({"opacity":"1"},1000,"linear",stars_twinkle06);
		});	
	}

	function arrowing(){
		$(".arrow").css({"y":"10","opacity":"1"}).transition({"y":"-10px","opacity":"0.3"},1800,"linear",arrowing);
		// $(".arrow").delay(800).transition({"y":"0px","opacity":"1"},800,"linear");
	}

	// function stars_twinkle02(){
	// 	$("section .stars:nth-child(2)").css({"opacity":"1"}).transition({"opacity":"0.3"},1000,"linear");
	// 	$("section .stars:nth-child(2)").delay(1000).transition({"opacity":"1"},1000,"linear");
	// 	setTimeout(stars_twinkle02,2000);
	// }


	var checked;
	var hastouch = "ontouchstart" in window?true:false,
		tapstart = hastouch?"touchstart":"mousedown",
		tapend = hastouch?"touchend":"mouseup";
		$('#p1_cover').on(tapstart,function(e){
			e.preventDefault()||e.preventDefault;
			$('#p1_thumb_line').show();
			// $('#check_scaninfo').html('扫描中...');
			$('#p1_thumb_line').transition({y:'105px'},1000,function(){
				
				$('#p1_thumb_line').fadeOut();
				mySwiper01.swipeNext();

				

			});
			
			
		});
		$('#p1_cover').on(tapend,function(){
			$('#p1_thumb_line').hide();
			$('#p1_thumb_line').stop(true);
			$('#p1_thumb_line').css({'y':0});
			// if(checked)
			// {
			// 	$('#check_scaninfo').hide().html('扫描失败！请重新扫描').fadeIn();
			// }

		});

	// Image loading in sequence
	function imgLoaded(){
		var length=$("img").length;
		console.log(length);
		var index=0;
		var total=length*0.7;
		var percent=0;
		var loaded=false;
		function loadimg(){
			var img=new Image();
			var str=$("img").eq(index).attr("src");
			$("img").eq(index).attr('src',str);
			img.src=str;
			console.log(str);
			img.onload=function(){
				if(img.complete){
					if(index<length-1){
						if(index<=total){
							console.log(index);
							percent=Math.ceil(100*(index/total));
							// $("#percent").css({"width":percent+"%"});
							// $("#perc_num").html(percent+"%");
						}
						else{
							if(!loaded){
								$("#loading").hide();
								page_loading();
								loaded=true;
							}
						}
						index++;
						loadimg();
					}

				}
				else{
					// loadimg();
				}
			}
		}
		loadimg();
	}

	//带有进度的加载
	// imgLoaded();

	// alert("ontouchstart" in window);


	function stopDefault(e){
		if(e&&e.preventDefault){
			e.preventDefault();
		}
		else{
			window.event.returnValue-false;
		}
		return false;
	}

	stopDefault();

});


</script>





