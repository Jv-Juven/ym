

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
		$("#swiper_container section>img").hide();
		$("#swiper_container section>img").each(function(){
			if( $(this).attr("data-role") =="show" ){
				$(this).show();
			}
		});

		while(timeouts.length!=0) clearTimeout(timeouts.pop());

	}
	function showp1()

	{
		disappearall();
		
		timeouts.push(setTimeout('$("#p1_nv").css({"x":"-100%"}).show().transition({"x": "0px"}, 300)', 600, "ease-out"));
		timeouts.push(setTimeout('$("#p1_nan").css({"x":"100%"}).show().transition({"x": "0px"}, 300)', 800, "ease-out"));
		timeouts.push(setTimeout('$("#p1_word1").css({"y":"-100%"}).show().transition({"y": "0px"}, 400)', 1200, "ease-out"));
		timeouts.push(setTimeout('$("#p1_word2").css({"scale":"1.4", "opacity":"0"}).show().transition({"scale": "1", "opacity":"1"}, 1000)', 1600, "ease-out"));
		timeouts.push(setTimeout('$("#p1_word3").fadeIn(800);', 2000));
	
	}
	function showp2()

	{
		disappearall();

		timeouts.push(setTimeout('$("#p2_bg_2").css({"scale":"1.4", "opacity":"0"}).show().transition({"scale": "1", "opacity":"1"}, 1800)', 0, "ease-out"));
		timeouts.push(setTimeout('$("#p2_word2").fadeIn(800);', 1000));
		timeouts.push(setTimeout('$("#p2_word").css({"scale":"1.4", "opacity":"0"}).show().transition({"scale": "1", "opacity":"1"}, 1000)', 2000, "ease-out"));


	}
	function showp3()

	{
		disappearall();

		timeouts.push(setTimeout('$("#p3_bg_2").css({"scale":"1.4", "opacity":"0"}).show().transition({"scale": "1", "opacity":"1"}, 1800)', 0, "ease-out"));
		timeouts.push(setTimeout('$("#p3_word2").fadeIn(800);', 1000));
		timeouts.push(setTimeout('$("#p3_word").css({"scale":"1.4", "opacity":"0"}).show().transition({"scale": "1", "opacity":"1"}, 1000)', 2000, "ease-out"));

	}

	function showp4()
	{
		disappearall();

		

	}


	ws=document.body.clientWidth/320.0;

	hs=document.body.clientHeight/504.0;

		if(ws-hs>1) ws=hs;

		$('#pages').each(function(){


				$(this).css({ scale: hs<ws?ws:hs});

		});

		$('.bg').css({ scale: ws/(hs<ws?ws:hs)});

	var mySwiper01;


	mySwiper01 = new Swiper('.swiper-containermain',{

				slidesPerView: 1,

				mode:'vertical',

				//Enable 3D Flow

				//followFinger:false,

				progress: false,

				speed: 400,

				noSwiping : false,
				noSwipingClass : 'swiper-no-swiping',

				initialSlide: 3,

				followFinger: true,

				updateOnImagesReady: true,

				onSwiperCreated: function(swiper){

					// if(swiper.activeIndex!==0){
						eval('showp'+(swiper.activeIndex+1)+'()');
					// } 
					
				},
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
					console.log("onImagesReady");
					$("#loading").fadeOut(300);
					eval(showp1());
				}

			});



	// 音乐播放
	function music_play(){
		var page_music=document.getElementById("music");
		// page_music.src=$(page_music).attr("data-src");
		$("section").on("touchstart",function(){
			page_music.play();
		});
		$(".switch").eq(1).on("click",function(){
			page_music.pause();
			$(this).hide();
		});
		$(".switch").eq(0).on("click",function(){
			page_music.play();
			$(".switch").eq(1).show();
		});
		page_music.play();
	}

	// music_play();


	// Image loading in sequence
	function imgLoaded(){
		var length=$("img").length;
		// console.log(length);
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

	//============================扩展代码====================================

	var pic_wrapper = $(".upload-pic");
	var pic_token = "";

	//图片上传
	window.uploader({
	    browse_button: "upload_btn",
	    container: "upload_btn_wrapper",
	},{
	    FileUploaded: function (up,file,info) {
	        info = $.parseJSON(info);
	        domain = up.getOption("domain");
	        url = domain + info.key;
	        console.log(url);
	        pic_token = info.key;
	        $("#upload_btn_wrapper .upload-pic").append('<img src="' + url + '">');
	        
	    },
	    BeforeUpload: function() {
	    	$(".warn-mask").show();
	    },
	    UploadComplete: function() {
	       //队列文件处理完毕后,处理相关的事情

	       //设置上传得图片居中
	       var img = $("#upload_btn_wrapper .upload-pic img");
	       console.log(img);
	       img.on("load", function(){
		       	$(this).center({
			       	"width": pic_wrapper.outerWidth(),
			       	"height": pic_wrapper.outerHeight()
			       });
	       });
	       $(".warn-mask").hide();
	    },
	    'Error': function(up, err, errTip) {
	       //上传出错时,处理相关的事情
	       alert(errTip);
	    }
	});

	//生成海报按钮
	$("#p4_btn").on("click", function(){

		var des = $(".p4-des").val();
		var src = $(".p4-src").val();

		if (pic_token.length == 0) {
			alert("请上传图片");
			return;
		}
		if (des.length == 0){
			alert("请填写目标人物");
			$(".p4-des").focus();
			return
		}
		if (src.length == 0){
			alert("请填写你的昵称");
			$(".p4-src").focus();
			return
		}

		var url = window.location.href.replace("ym/","ym") + "?img_token=" + pic_token + "&des=" + $(".p4-des").val() + "&src=" + $(".p4-src").val();

		 setwx({
		 	debug: true,
		 	title: "梦想.家",
		 	desc: "您给我一个梦想，我们还您一个家",
		 	imgurl: "http://myteamproject.oss-cn-beijing.aliyuncs.com/jiaju/5-30/jiaju_logo.jpg",
			url: url
		 });

		 alert("生成海报成功！")

	});


	/////////////////////////////////
	// Chrome下input输入框内容无法选中的解决方法 //
	/////////////////////////////////
	$("input").click(function(e){
	　　$(this).select();
	});
	//阻止chrome自己的mouseup事件即可。
	$("input").mouseup(function(e){
	    if(window.navigator.userAgent.indexOf("Chrome")!=-1){
	        var event = e||window.event; 
	        event.preventDefault(); 
	    }
	});






});













