<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\phpstudy\WWW\thinkphpbcshop\public/../application/admin\view\brand\web-uploader.html";i:1607960130;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/static/webuploader/css/webuploader.css" />
    <link rel="stylesheet" type="text/css" href="/static/webuploader/examples/image-upload/style.css" />
</head>
<body>
<div id="wrapper">
    <div id="container">
        <!--头部，相册选择和格式选择-->
        <div id="uploader">
            <div class="queueList">
                <div id="dndArea" class="placeholder">
                    <div id="filePicker" class="webuploader-container"><div class="webuploader-pick">点击选择图片</div><div id="rt_rt_1emt6he4u29218e61pro195hnc1" style="position: absolute; top: 20px; left: 398px; width: 170px; height: 44px; overflow: hidden; bottom: auto; right: auto;"><input type="file" name="file" class="webuploader-element-invisible" multiple="multiple"><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label></div></div>
                    <p>或将照片拖到这里，单次最多可选300张</p>
                </div>
                <ul class="filelist"></ul>
            </div>
            <div class="statusBar" style="display:none;">
                <div class="progress" style="display: none;">
                    <span class="text">0%</span>
                    <span class="percentage" style="width: 0%;"></span>
                </div>
                <div class="info">共0张（0B），已上传0张</div>
                <div class="btns">
                    <div id="filePicker2" class="webuploader-container"><div class="webuploader-pick">继续添加</div><div id="rt_rt_1emt6he52ju216uh1rrscof1evh6" style="position: absolute; top: 0px; left: 0px; width: 38px; height: 2px; overflow: hidden; bottom: auto; right: auto;"><input type="file" name="file" class="webuploader-element-invisible" multiple="multiple"><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label></div></div><div class="uploadBtn state-pedding">开始上传</div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" value="<?php echo $key_id; ?>" id="key_id">
<input type="hidden" value="<?php echo $imgSum; ?>" id="img_sum">
<script type="text/javascript"  src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/webuploader/dist/webuploader.js"></script>
<script type="text/javascript" src="/static/webuploader/examples/image-upload/upload.js"></script>
<script>
    // setTimeout('window.uploader.refresh()',100);//选择图片按钮行不通需要执行
</script>
</body>
</html>