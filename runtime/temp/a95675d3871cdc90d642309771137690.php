<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpstudy\WWW\bcthinkphpshop\public/../application/admin\view\brand\list.html";i:1610953590;}*/ ?>
<!--<div class="horizontal-space"></div>-->
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="well with-header with-footer" >
            <div class="header bg-blue">
                品牌列表
            </div>
            <div class="buttons-preview">
                <form id="brand_form" class="form-horizontal">
                    <div class="form-group">
                        <label for="brand_name" class="col-xs-1 col-sm-1 col-md-1 col-lg-1 control-label">名称</label>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <input type="text" class="form-control" id="brand_name" name="brand_name">
                        </div>
                        <label for="brand_url" class="col-xs-1 col-sm-1 col-md-1 col-lg-1 control-label">官网地址</label>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <input type="text" class="form-control" id="brand_url" name="brand_url">
                        </div>
                        <label for="brand_description" class="col-xs-1 col-sm-1 col-md-1 col-lg-1 control-label">描述</label>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <input type="text" class="form-control" id="brand_description" name="brand_description">
                        </div>
                    </div>

                    <div class="form-group">
                            <label  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 control-label" style="padding-top: 0px !important;">状态</label>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <label>
                                    <input name="status[]" type="checkbox" class="colored-blue" value="<?php echo \think\Config::get('cost.BRANDSTATUSHAVE')['VAL']; ?>">
                                    <span class="text"><?php echo \think\Config::get('cost.BRANDSTATUSHAVE')['DESC']; ?></span>
                                </label>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <label>
                                    <input name="status[]" type="checkbox" class="colored-danger" value="<?php echo \think\Config::get('cost.BRANDSTATUSNONE')['VAL']; ?>">
                                    <span class="text"><?php echo \think\Config::get('cost.BRANDSTATUSNONE')['DESC']; ?></span>
                                </label>
                            </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1  col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                            <button type="button" class="btn btn-info" id="query-button">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                查询
                            </button>
                        </div>
                        <button type="button" class="btn btn-success pull-right" id="add-button">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            品牌添加
                        </button>
                    </div>

                </form>
            </div>
            <div id="content" class="row"></div>
            <div class="footer" style="border-top: 0px;">
                <div id="page-box" class="pull-right"></div>
            </div>
        </div>

    </div>
</div>
<script src="/static/js/common/func-common.js"></script>
<script>
    $(function () {
        var obj={
            "offset" : 0,
            "num" : 10,
            "pagetouse" : true,
            "url" : "<?php echo url('brand/content'); ?>",
            "targetElem" : "#content",
            "formElem" : "#brand_form",
            "pageCountElem" : "#page-count"
        };
        list(obj);
        $("#query-button").off("click").on("click",function(){
            list(obj);
        });

        $('#add-button').on('click', function () {
            //注意：parent 是 JS 自带的全局对象，可用于操作父页面
            layer.open({
                type: 2,
                maxmin: true,
                shadeClose: true,
                title: '品牌添加',
                shade: [0.4],
                area: ['80%', '90%'],
                content: "<?php echo url('brand/add'); ?>",
                cancel: function(index, layero){
                    //if(confirm('确定要关闭么')){ //只有当点击confirm框的确定时，该层才会关闭
                        layer.close(index);
                        window.list(obj);
                   // }
                    return false;
                }
            });
        });

        $(document).off("click","#brand-edit").on("click","#brand-edit",function (event) {
            let id = $(this).closest("tr").data("id");
            layer.open({
                type: 2,
                maxmin: true,
                shadeClose: true,
                title: '品牌添加',
                shade: [0.4],
                area: ['80%', '90%'],
                content: "<?php echo url('brand/edit'); ?>?id="+id,
                cancel: function(index, layero){
                    //if(confirm('确定要关闭么')){ //只有当点击confirm框的确定时，该层才会关闭
                    layer.close(index);
                    window.list(obj);
                    // }
                    return false;
                }
            });
        });

        $(document).off("click","#brand-delete").on("click","#brand-delete",function (event) {
            let id = $(this).closest("tr").data("id");
            layer.confirm('确认删除?', {icon: 3, title:'提示'}, function(index){
                layer.close(index);
                $.post("<?php echo url('brand/delete'); ?>", {"id":id}, function (callback) {
                    if (callback.status == 1) {
                        layer.msg(callback.msg, {
                            icon: 1,
                            time: 1000
                        }, function(){
                            window.list(obj);
                        });
                    }else{
                        layer.msg(callback.msg, {time: 1000,icon: 2});
                    }
                }, "json");
            });
        });

    });
</script>