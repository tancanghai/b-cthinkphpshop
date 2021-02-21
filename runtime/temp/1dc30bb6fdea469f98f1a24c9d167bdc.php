<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:113:"D:\PhpStudy\phpstudy_install_dir\PHPTutorial\WWW\thinkphpbcshop\public/../application/admin\view\article\add.html";i:1613921256;s:105:"D:\PhpStudy\phpstudy_install_dir\PHPTutorial\WWW\thinkphpbcshop\application\admin\view\common\header.html";i:1607246384;}*/ ?>
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
            <span class="widget-caption">Horizontal Form</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form id="togglingForm" class="form-horizontal" role="form" enctype="multipart/form-data"  method="post">
                    <div class="form-group">
                        <label for="cate_id" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">栏目</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <select id="cate_id" style="width:100%;" name="cate_id">
                                <option value="0" />空分类
                                <?php if(is_array($cate_data) || $cate_data instanceof \think\Collection || $cate_data instanceof \think\Paginator): if( count($cate_data)==0 ) : echo "" ;else: foreach($cate_data as $k=>$v): ?>
                                <option value="<?php echo $v['cate_id']; ?>" /><?php echo $v['cate_name']; endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">标题</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="标题" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="author" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">作者</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" class="form-control" id="author" placeholder="作者" name="author">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keywords" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">关键词</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" class="form-control" id="keywords" placeholder="关键词" name="keywords">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">邮箱</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" class="form-control" id="email" placeholder="邮箱" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link_url" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">跳转链接</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" class="form-control" id="link_url" placeholder="跳转链接" name="link_url">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right" style="padding-top: 0px !important;">是否显示</label>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>
                                <input name="show_status" type="radio" class="colored-blue" value="<?php echo \think\Config::get('cost.SHOWSTATUSHAVE')['VAL']; ?>" checked="checked">
                                <span class="text"><?php echo \think\Config::get('cost.SHOWSTATUSHAVE')['DESC']; ?></span>
                            </label>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>
                                <input name="show_status" type="radio" class="colored-danger" value="<?php echo \think\Config::get('cost.SHOWSTATUSNONE')['VAL']; ?>">
                                <span class="text"><?php echo \think\Config::get('cost.SHOWSTATUSNONE')['DESC']; ?></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right" style="padding-top: 0px !important;">是否置顶</label>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>
                                <input name="show_top" type="radio" class="colored-blue" value="<?php echo \think\Config::get('cost.SHOWTOPHAVE')['VAL']; ?>" >
                                <span class="text"><?php echo \think\Config::get('cost.SHOWTOPHAVE')['DESC']; ?></span>
                            </label>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>
                                <input name="show_top" type="radio" class="colored-danger" value="<?php echo \think\Config::get('cost.SHOWTOPNONE')['VAL']; ?>" checked="checked">
                                <span class="text"><?php echo \think\Config::get('cost.SHOWTOPNONE')['DESC']; ?></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label no-padding-right">描述</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <textarea class="form-control" rows="3" placeholder="描述" name="description"></textarea>
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
    $(function () {
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
                title: {
                    validators: {
                        notEmpty: {
                            message: 'The title is required'
                        },
                    }
                },
                author: {
                    validators: {
                        notEmpty: {
                            message: 'The author is required'
                        },
                    }
                },
                keywords: {
                    validators: {
                        notEmpty: {
                            message: 'The keywords is required'
                        },
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email is required'
                        },
                        regexp: {
                            regexp:  /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/,
                            message: 'The email Non conformity'
                        },
                    }
                },
                link_url: {
                    validators: {
                        notEmpty: {
                            message: 'The link_url is required'
                        },
                        regexp: {
                            regexp:  /((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/,
                            message: 'The link_url Non conformity'
                        },
                    }
                },
                description: {
                    validators: {
                        notEmpty: {
                            message: 'The description is required'
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
                $.post("<?php echo url('article/save_article_add'); ?>", thisData, function (callback) {
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
                                "url" : "<?php echo url('article/content'); ?>",
                                "targetElem" : "#content",
                                "formElem" : "#article_form",
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

    });
</script>