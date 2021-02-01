<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"D:\phpstudy\WWW\thinkphpbcshop\public/../application/admin\view\brand\edit.html";i:1608043329;s:72:"D:\phpstudy\WWW\thinkphpbcshop\application\admin\view\common\header.html";i:1607246382;}*/ ?>
<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 1.6.0
Purchase: https://wrapbootstrap.com/theme/beyondadmin-adminapp-angularjs-mvc-WB06R48S4
-->


<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <title>B-C电商商城</title>

    <meta name="description" content="BeyondAdmin Versions"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/static/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet"/>
    <link id="bootstrap-rtl-link" href="" rel="stylesheet"/>
    <link href="/static/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/static/css/weather-icons.min.css" rel="stylesheet"/>

    <!--Fonts-->
<!--        <link href="../fonts.googleapis.com/css@family=open+sans_3a300italic,400italic,600italic,700italic,400,600,700,300.css" rel="stylesheet" type="text/css">-->

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/css/beyond.min.css" rel="stylesheet"/>
    <link href="/static/css/demo.min.css" rel="stylesheet"/>
    <link href="/static/css/typicons.min.css" rel="stylesheet"/>
    <link href="/static/css/animate.min.css" rel="stylesheet"/>
    <link href="/static/css/datatables.bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <!--卑微小谭自定义样式 styles-->
    <link rel="stylesheet" href="/static/css/common/add-common.css">

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/skins.min.js"></script>
    <script src="/static/layui/layui.js"></script>
    <script src="/static/js/common/cost-common.js"></script>
</head>
<!-- /Head -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-lightred">
            <span class="widget-caption">图片修改和数据保存分开</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form id="togglingForm" class="form-horizontal" role="form" enctype="multipart/form-data"  method="post">
                    <div class="form-group">
                        <label for="brand_name" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">品牌名称</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" class="form-control" id="brand_name" placeholder="品牌名称" name="brand_name" value="<?php echo $datas['brand_name']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="brand_url" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">品牌官网地址</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" class="form-control" id="brand_url" placeholder="品牌官网地址" name="brand_url" value="<?php echo $datas['brand_url']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right" style="padding-top: 0px !important;">状态</label>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>
                                <input name="status" type="radio" class="colored-blue" value="<?php echo \think\Config::get('cost.BRANDSTATUSHAVE')['VAL']; ?>"  <?php if(($datas['status'] == \think\Config::get('cost.BRANDSTATUSHAVE')['VAL'])): ?> checked="checked" <?php endif; ?>>
                                <span class="text"><?php echo \think\Config::get('cost.BRANDSTATUSHAVE')['DESC']; ?></span>
                            </label>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>
                                <input name="status" type="radio" class="colored-danger" value="<?php echo \think\Config::get('cost.BRANDSTATUSNONE')['VAL']; ?>" <?php if(($datas['status'] == \think\Config::get('cost.BRANDSTATUSNONE')['VAL'])): ?> checked="checked" <?php endif; ?>>
                                <span class="text"><?php echo \think\Config::get('cost.BRANDSTATUSNONE')['DESC']; ?></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">品牌描述</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <textarea class="form-control" rows="3" placeholder="品牌描述" name="brand_description"><?php echo $datas['brand_description']; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">品牌图片</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" >
                            <div class="well">
                                <div  class="dropzone">
                                    <div class="row">
                                        <?php if((!empty($arrImg))): if(is_array($arrImg) || $arrImg instanceof \think\Collection || $arrImg instanceof \think\Paginator): if( count($arrImg)==0 ) : echo "" ;else: foreach($arrImg as $k=>$vo): ?>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    <a href="javascript:void(0)" class="thumbnail delete-picture">
                                                        <img src="<?php echo $vo; ?>" alt="图片未加载">
                                                    </a>
                                                </div>
                                                <?php if((($k+1)%4==0)): ?>
                                                    <div class="clearfix"></div>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                            <a href="javascript:void(0)" class="thumbnail" id="clickPicture">
                                                <img src="/static/img/addpuls.jpg" alt="图片未加载" title="点击添加图片">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2  col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <button id="submit" class="btn btn-blue">保存</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/static/js/validation/bootstrapvalidator.js"></script>
<!--Basic Scripts-->
<script src="/static/js/jquery.serializejson.min.js" type="text/javascript" ></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/slimscroll/jquery.slimscroll.min.js"></script>

<!--Beyond Scripts-->
<script src="/static/js/beyond.min.js"></script>
<script src="/static/js/common/cost-common.js"></script>
<script>
    $(document).ready(function () {
        layui.use(['layer', 'form',"laydate"], function(){
            var layer = layui.layer;
            var form = layui.form;
            var laydate = layui.laydate;
        });
        $('#togglingForm').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                brand_name: {
                    validators: {
                        notEmpty: {
                            message: 'The brand_name is required'
                        },
                    }
                },
                brand_url: {
                    validators: {
                        notEmpty: {
                            message: 'The brand_url is required'
                        },
                        regexp: {
                            regexp:  /((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/,
                            message: 'The brand_url Non conformity'
                        },
                    }
                },
                brand_description: {
                    validators: {
                        notEmpty: {
                            message: 'The brand_description is required'
                        },
                    }
                },
            }
        });

        // $("#togglingForm").submit(function(ev){ev.preventDefault();});
        $("#submit").on("click", function(){
            let bootstrapValidator = $("#togglingForm").data('bootstrapValidator');
            bootstrapValidator.validate();
            if(bootstrapValidator.isValid()){
                let thisData= $("#togglingForm").serializeJSON();
                let id = "<?php echo $datas['brand_id']; ?>";
                $.post("<?php echo url('brand/save_brand_edit'); ?>", {"data":thisData,"id":id}, function (callback) {
                    if (callback.status == 1) {
                        layer.msg(callback.msg, {
                            icon: 1,
                            time: 1000
                        }, function(){
                            var indexs = parent.layer.getFrameIndex(window.name);//关闭当前iframe
                            parent.layer.close(indexs);
                            var obj={
                                "offset" : 0,
                                "num" : 10,
                                "pagetouse" : true,
                                "url" : "<?php echo url('brand/content'); ?>",
                                "targetElem" : "#content",
                                "formElem" : "#brand_form",
                                "pageCountElem" : "#page-count"
                            };
                            parent.list(obj);
                        });
                    }else{
                        layer.msg(callback.msg, {time: 1000,icon: 2});
                    }
                }, "json");
            }
        });

        $(document).off("click","#clickPicture").on("click","#clickPicture",function (event) {
            let id = "<?php echo $datas['brand_id']; ?>";
            let imgSum = "<?php echo $imgSum; ?>";
            if(imgSum >= 3){
                layer.msg("最多添加3张图片", {time: 1000,icon: 2});
                return false;
            }
            layer.open({
                type: 2,
                maxmin: true,
                shadeClose: true,
                title: '添加图片',
                shade: [0.4],
                area: ['80%', '90%'],
                content: "<?php echo url('brand/webUploader'); ?>?id="+id+"&imgSum="+imgSum,
                cancel: function(index, layero){
                        layer.close(index);
                        window.location.reload();//刷新当前iframe页
                }
            });
        });

        $(document).off("mouseenter",".thumbnail.delete-picture").on("mouseenter",".thumbnail.delete-picture",function (event) {
            var str = '<div  class="clickPlusReduct" onclick="clickReduct(this)" title="删除图片" style="position:absolute;top:0%; right:0%;"><a class="btn btn-danger btn-sm icon-only white" href="javascript:void(0);"><i class="fa fa-times "></i></a></div>';
                $(this).css("position", "relative").prepend(str);
        });
        $(document).off("mouseleave",".thumbnail.delete-picture").on("mouseleave",".thumbnail.delete-picture",function (event) {
            $(this).find(".clickPlusReduct").detach().remove();
        });

    });

    function clickReduct(obj) {
        console.log(obj);
        console.log("delete");
        let imgPath = $(obj).next("img").attr("src");
        let id = "<?php echo $datas['brand_id']; ?>";
        layer.confirm('确认删除?', {icon: 3, title:'提示'}, function(index){
            layer.close(index);
            $.post("<?php echo url('brand/deleteImg'); ?>", {"imgPath":imgPath,"id":id}, function (callback) {
                if (callback.status == 1) {
                    layer.msg(callback.msg, {
                        icon: 1,
                        time: 1000
                    }, function(){
                        window.location.reload();//刷新当前iframe页
                    });
                }else{
                    layer.msg(callback.msg, {time: 1000,icon: 2});
                }
            }, "json");
        });
    }
</script>