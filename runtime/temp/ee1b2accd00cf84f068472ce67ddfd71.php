<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:117:"D:\PhpStudy\phpstudy_install_dir\PHPTutorial\WWW\thinkphpbcshop\public/../application/admin\view\article\content.html";i:1613736427;}*/ ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<table class="table table-bordered table-hover" >
    <thead>
    <tr>
        <th>#</th>
        <th>标题</th>
        <th>作者</th>
        <th>关键词</th>
        <th>描述</th>
        <th>邮箱</th>
        <th>跳转链接</th>
        <th>是否显示</th>
        <th>是否置顶</th>
        <th>创建时间</th>
        <th>修改时间</th>
        <th style="width: 15%;">操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($datas) || $datas instanceof \think\Collection || $datas instanceof \think\Paginator): if( count($datas)==0 ) : echo "" ;else: foreach($datas as $k=>$v): ?>
    <tr data-cateid="<?php echo $v['cate_id']; ?>" data-id="<?php echo $v['article_id']; ?>">
        <td><?php echo ++$k; ?></td>
        <td><?php echo $v['title']; ?></td>
        <td><?php echo $v['author']; ?></td>
        <td><?php echo $v['keywords']; ?></td>
        <td><?php echo $v['description']; ?></td>
        <td><?php echo $v['email']; ?></td>
        <td><?php echo $v['link_url']; ?></td>
        <td><?php if(($v['show_status'] == \think\Config::get('cost.SHOWSTATUSHAVE')['VAL'])): ?> <?php echo \think\Config::get('cost.SHOWSTATUSHAVE')['DESC']; else: ?><?php echo \think\Config::get('cost.SHOWSTATUSNONE')['DESC']; endif; ?></td>
        <td><?php if(($v['show_top'] == \think\Config::get('cost.SHOWTOPHAVE')['VAL'])): ?> <?php echo \think\Config::get('cost.SHOWTOPHAVE')['DESC']; else: ?><?php echo \think\Config::get('cost.SHOWTOPNONE')['DESC']; endif; ?></td>
        <td><?php echo $v['create_time']; ?></td>
        <td><?php echo $v['update_time']; ?></td>
        <td>
            <a href="javascript:void(0)" class="btn btn-info btn-xs edit"     id="article-edit"><i class="fa fa-edit"></i> Edit</a>
            <a href="javascript:void(0)" class="btn btn-danger btn-xs delete" id="article-delete"><i class="fa fa-trash-o"></i> Delete</a>
        </td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
    <input id="page-count"  value="<?php echo $count; ?>" type="hidden">
</table>
</div>
<script>

</script>