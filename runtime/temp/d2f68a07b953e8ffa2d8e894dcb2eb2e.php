<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:114:"D:\PhpStudy\phpstudy_install_dir\PHPTutorial\WWW\thinkphpbcshop\public/../application/admin\view\cate\content.html";i:1613698110;}*/ ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<table class="table table-bordered table-hover" >
    <thead>
    <tr>
        <th>#</th>
        <th>栏目名称</th>
        <th>关键词</th>
        <th>描述</th>
        <th>是否显示</th>
        <th>排序</th>
        <th>创建时间</th>
        <th>修改时间</th>
        <th style="width: 15%;">操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($datas) || $datas instanceof \think\Collection || $datas instanceof \think\Paginator): if( count($datas)==0 ) : echo "" ;else: foreach($datas as $k=>$v): ?>
    <tr data-id="<?php echo $v['cate_id']; ?>" data-pid="<?php echo $v['pid']; ?>">
        <td><?php echo ++$k; ?></td>
        <td><?php echo str_repeat("---- ",$v["level"]);?> <?php echo $v['cate_name']; ?></td>
        <td><?php echo $v['keywords']; ?></td>
        <td><?php echo $v['description']; ?></td>
        <td><?php if(($v['show_nav'] == \think\Config::get('cost.SHOWNAVHAVE')['VAL'])): ?> <?php echo \think\Config::get('cost.SHOWNAVHAVE')['DESC']; else: ?><?php echo \think\Config::get('cost.SHOWNAVNONE')['DESC']; endif; ?></td>
        <td><?php echo $v['sort']; ?></td>
        <td><?php echo $v['create_time']; ?></td>
        <td><?php echo $v['update_time']; ?></td>
        <td>
            <a href="javascript:void(0)" class="btn btn-info btn-xs edit"     id="cate-edit"><i class="fa fa-edit"></i> Edit</a>
            <a href="javascript:void(0)" class="btn btn-danger btn-xs delete" id="cate-delete"><i class="fa fa-trash-o"></i> Delete</a>
        </td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
    <input id="page-count"  value="<?php echo $count; ?>" type="hidden">
</table>
</div>
<script>

</script>