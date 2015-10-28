
$.fn.extend({

	//设置元素居中
	center: function(opt) {
		options = {
			"x": true,
			"y": true,
			"width": 320.0,
			"height": 504.0
		}
		options = $.extend({}, options, opt);
		var _this = $(this);
		var width = _this.outerWidth(),
			height = _this.outerHeight(),
			scale = (width/height) > (options["width"]/options["height"]) ? options["height"]/height : options["width"]/width;

		// 设置目标元素的大小
		_this.css({
			"position": "absolute",
			"width": width * scale + "px",
			"height": height * scale + "px"
		});

		console.log(_this.width()+"\n"+_this.height());

		console.log(options["x"]);

		if (options["x"] && options["y"]) {
			_this.css({
				"top": "50%",
				"left": "50%",
				"margin": "-"+(_this.outerHeight()/2)+"px -"+(_this.outerWidth()/2)+"px"
			})
		};
		if (options["x"] && !options["y"]) {
			_this.css({
				"top": "0",
				"left": "50%",
				"margin": "0 -"+(_this.outerWidth()/2)+"px"
			})
		};
		if (!options["x"] && options["y"]) {
			_this.css({
				"top": "50%",
				"left": "0",
				"margin": "-"+(_this.outerHeight()/2)+"px 0"
			})
		};

	},
});