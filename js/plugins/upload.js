// 上传函数
window.uploader = function (options, handlers){
    // console.log("上传头像");
    var callback, config, name, uploader;
    config = $.extend({},{
        runtimes: 'html5,flash,html4',
        browse_button: 'click-file',
        uptoken_url: './controller/upLoad.php',
        domain: "http://7oxgw6.com1.z0.glb.clouddn.com/",
        container: 'container',
        max_file_size: '5mb',
        flash_swf_url: '/lib/plupload/Moxie.swf',
        max_retries: 3,
        dragdrop: false,
        drop_element: 'container',
        chunk_size: '4mb',
        auto_start: true,
        unique_names: true,
        save_key: true,
        statusTip: '.image-upload-tips',
        multi_selection: true,
        init: {
          'Error': function(up, err, errTip) {
            return console.log(errTip);
          },
          'BeforeUpload': function(up, file) {
            return $(this.getOption().statusTip).text('准备上传图片');
          },
          'UploadProgress': function(up, file) {
            return $(this.getOption().statusTip).text('正在上传图片');
          },
          'FileUploaded': function(up, file, info) {
            var domain;
            info = $.parseJSON(info);
            return domain = up.getOption('domain');
          },
          'UploadComplete': function() {
            return $(this.getOption().statusTip).text('图片上传成功');
          }
        }
    }, options);
    for (name in handlers) {
      callback = handlers[name];
      config.init[name] = callback;
    }
    uploader = Qiniu.uploader(config);
}
