

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
		$("#swiper_container section").find("img").hide();
		$("#swiper_container section").find("img").each(function(){
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

				initialSlide: 0,

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

});
