//img-base64-crossorigin-common 图片base64加密-跨域支持-缩略图
//width、height调用时传入具体像素值，控制大小 ,不传则默认图像大小
function getBase64(img) {
    var canvas = document.createElement("canvas");
    canvas.width = img.width;
    canvas.height = img.height;
    var ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
    var dataURL = canvas.toDataURL('image/jpeg');
    return dataURL;
}
//返回图片base64加密-缩略图-跨域支持// 跨域支持需要在
//anonymous：如果使用这个值的话就会在请求中的header中的带上Origin属性，但请求不会带上
//需要    server端   在response的header中带上Access-Control-Allow-Credentials属性
function getImageBase64Data(imgSrc){
    var image = new Image();
    image.crossOrigin = 'Anonymous';
    image.src = imgSrc;
    var defer=$.Deferred();
    image.onload = function() {
        var imageBase64Data = getBase64(image);
        defer.resolve(imageBase64Data);
    }
    return defer.promise();
}
//示例：
// $(function(){
//     var getImageBase64DataPromise=getImageBase64Data("https://dss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=3363295869,2467511306&fm=26&gp=0.jpg");
//     getImageBase64DataPromise.done(function(imageBase64Data){
//         //imageBase64Data 为图片http://127.0.0.1:8080/img/00001.jpg的 base64信息
//         console.log(imageBase64Data);
//         $("img").attr({ src: imageBase64Data, crossorigin:"anonymous" });
//     }).fail(function(err){
//         console.log(err);
//     });
// });