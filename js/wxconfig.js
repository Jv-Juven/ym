var access_token;

function setwx(msg) {
	$.ajax({
		url: 'http://makerh5.com/web/api/wx/sample.php',
		data: {
			url: msg["url"]
			// url: window.location.href.split('#')[0]
		},
		type: 'post',
		dataType: 'json',
		success: function(data) {
			var json = eval(data);
			setConfig({
				debug: msg['debug'],
				title: msg['title'],
				desc: msg['desc'],
				imgurl: msg['imgurl'],
				link: "open.weixin.qq.com/connect/oauth2/authorize?appid=wxa67e8e7d9404fb7f&redirect_uri=http%3a%2f%2fmakerh5.com%2fweb%2fhxet6%2findex.php&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect"
			}, json);
		},
		error: function() {
			$.error("Ajax error!");
		}
	});
}


function setConfig(data, json) {
	wx.config({
		debug: data['debug'],
		appId: json['appId'],
		timestamp: json['timestamp'],
		nonceStr: json['nonceStr'],
		signature: json['signature'],
		jsApiList: [
			// 所有要调用的 API 都要加到这个列表中
			'onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo', 'startRecord', 'stopRecord', 'onVoiceRecordEnd', 'playVoice', 'pauseVoice', 'stopVoice', 'onVoicePlayEnd', 'uploadVoice', 'downloadVoice', 'chooseImage', 'previewImage', 'uploadImage', 'downloadImage', 'translateVoice'
		]
	});

	wx.ready(function() {
		// 在这里调用 API
		//分享给朋友
		wx.onMenuShareAppMessage({
			title: data['title'], // 分享标题
			desc: data['desc'], // 分享描述
			link: data['link'], // 分享链接
			imgUrl: data['imgurl'], // 分享图标
			type: '', // 分享类型,music、video或link，不填默认为link
			dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
			success: function() {
				// 用户确认分享后执行的回调函数
				//alert('a');

			},
			cancel: function() {
				// 用户取消分享后执行的回调函数
			}
		});
		//分享到朋友圈
		wx.onMenuShareTimeline({
			title: data['title'], // 分享标题
			desc: data['desc'], // 分享描述
			link: data['link'], // 分享链接
			imgUrl: data['imgurl'], // 分享图标
			success: function() {
				// 用户确认分享后执行的回调函数
				alert(data['desc']);
			},
			cancel: function() {
				// 用户取消分享后执行的回调函数
			}
		});
		//分享到QQ
		wx.onMenuShareQQ({
			title: data['title'], // 分享标题
			desc: data['desc'], // 分享描述
			link: data['link'], // 分享链接
			imgUrl: data['imgurl'], // 分享图标
			success: function() {
				// 用户确认分享后执行的回调函数
			},
			cancel: function() {
				// 用户取消分享后执行的回调函数
			}
		});
		//分享到腾讯微博
		wx.onMenuShareWeibo({
			title: data['title'], // 分享标题
			desc: data['desc'], // 分享描述
			link: data['link'], // 分享链接
			imgUrl: data['imgurl'], // 分享图标
			success: function() {
				// 用户确认分享后执行的回调函数
			},
			cancel: function() {
				// 用户取消分享后执行的回调函数
			}
		});
	});
}