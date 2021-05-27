// <div className="form-group">
//     <label htmlFor="image_uploads"
//            className="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">logo</label>
//     <div className="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="btn-box">
//         <button id="btn">上传图片</button>
//         <!--                            <input type="file"  accept="image/*" id="image_uploads" onchange="handleFiles(this)" multiple>-->
//         <input type="file" accept="image/*" id="image_uploads" onChange="handleFiles(this)">
//     </div>
//     <div className="col-xs-7 col-sm-7 col-md-7 col-lg-7" id="preview">
//         {if condition="($link_data.logo)"}
//         <div className="preview-img-box">
//             <img src="{$link_data.logo}" alt="未成功加载图片" className="img">
//         </div>
//         {else /}
//             No files currently selected for upload
//         {/if}
//             </div>
//             </div>

//配置可接收图片类型
const fileTypes = [
    'image/jpeg',
    'image/pjpeg',
    'image/png'
];
//验证图片类型函数
function validFileType(file) {
    return fileTypes.includes(file.type);
}
//根据b字节大小返回对应的单位大小
function returnFileSize(number) {
    if(number < 1024) {
        return number + 'bytes';
    } else if(number >= 1024 && number < 1048576) {
        return (number/1024).toFixed(1) + 'KB';
    } else if(number >= 1048576) {
        return (number/1048576).toFixed(1) + 'MB';
    }
}

//上传时预览图片
function handleFiles(thisObj) {
    let preview =$("#preview");
    preview.empty();
    const curFiles = thisObj.files;
    if(curFiles.length == 0) {
        preview.append("<p>No files currently selected for upload</p>");
    } else {
        for(const file of curFiles) {
            if(validFileType(file)) {
                var title = "File name "+file.name+", file size "+returnFileSize(file.size)+".";
                var box='<div class="preview-img-box"><img src="'+URL.createObjectURL(file)+'" alt="未成功加载图片"  class="img" title="'+title+'"></div>';
            } else {
                var title=`File name "+file.name+": Not a valid file type. Update your selection.`;
                var box='<div class="preview-img-box"><img src="###" alt="不合法图片"  class="img" title="'+title+'"></div>';
            }
            preview.append(box);
        }
    }
}

//获取图片本地url
function getObjectURL(file) {
    var url = null;
    if (window.createObjectURL != undefined) { // basic
        url = window.createObjectURL(file);
    } else if (window.URL != undefined) { // mozilla(firefox)
        url = window.URL.createObjectURL(file);
    } else if (window.webkitURL != undefined) { // webkit or chrome
        url = window.webkitURL.createObjectURL(file);
    }
    return url;
}

// <form action="/index/index/upload" encType="multipart/form-data" method="post">
//     <input type="file" name="image[]"/> <br>
//     <input type="file" name="image[]"/> <br>
//     <input type="file" name="image[]"/> <br>
//     <input type="submit" value="上传"/>
// </form>
//获取带文件数据的表单数据  后台可以接收$_FILES   $_FILES 是一个预定义的数组，用来获取通过 POST 方法上传文件的相关信息
//formElement ： form表单元素 例如："#togglingForm",
// files： input的文件对象
//inputName  字段名
function getFormData(formElement,files,inputName){
    let form=document.querySelector(formElement);
    //将获得的表单元素作为参数，对formData进行初始化
    let formData=new FormData(form);
    //通过get方法获得name为advType元素的value值
    // console.log(formData.get("link_url"));//1
    for(const file of files) {
        //参考多图上传的写法
        formData.append("image[]", file);
    }
    return formData;
}