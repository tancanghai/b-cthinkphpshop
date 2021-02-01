<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:115:"D:\PhpStudy\phpstudy_install_dir\PHPTutorial\WWW\thinkphpbcshop\public/../application/admin\view\brand\content.html";i:1610014266;}*/ ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<table class="table table-bordered table-hover" >
    <thead>
    <tr>
        <th>#</th>
        <th>名称</th>
        <th>官网地址</th>
        <th style="width: 30%;">图片</th>
        <th>描述</th>
        <th>状态</th>
        <th>创建时间</th>
        <th>修改时间</th>
        <th style="width: 15%;">操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($datas) || $datas instanceof \think\Collection || $datas instanceof \think\Paginator): if( count($datas)==0 ) : echo "" ;else: foreach($datas as $k=>$v): ?>
    <tr data-id="<?php echo $v['brand_id']; ?>">
        <td><?php echo ++$k; ?></td>
        <td><?php echo $v['brand_name']; ?></td>
        <td><?php echo $v['brand_url']; ?></td>
        <td class="row">
            <?php foreach($v['brand_img'] as  $key=>$value): ?>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <span class="thumbnail">
                    <img src="<?php echo $value; ?>" alt="图片未加载">
                </span>
            </div>
            <?php if((($key+1)%3==0)): ?>
            <div class="clearfix"></div>
            <?php endif; endforeach; ?>
        </td>
        <td><?php echo $v['brand_description']; ?></td>
        <td><?php echo $v['status']; ?></td>
        <td><?php echo $v['create_time']; ?></td>
        <td><?php echo $v['update_time']; ?></td>
        <td>
            <a href="javascript:void(0)" class="btn btn-info btn-xs edit"     id="brand-edit"><i class="fa fa-edit"></i> Edit</a>
            <a href="javascript:void(0)" class="btn btn-danger btn-xs delete" id="brand-delete"><i class="fa fa-trash-o"></i> Delete</a>
        </td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
    <input id="page-count"  value="<?php echo $count; ?>" type="hidden">
</table>
</div>
<script>

</script>