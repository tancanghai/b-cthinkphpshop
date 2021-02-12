<?php

namespace app\admin\model;

use think\Model;
use think\Db;

class CateModel extends Model
{
    protected $table = 'tps_cate';
    protected $autoWriteTimestamp = true;

    function sql_structure($data = '', $offset = 0, $num = 0)
    {
        $sql_select = "select a.*";
        $sql_from = " FROM  tps_cate as a";
        $sql_where = " WHERE 1=1";

        if (isset($data['cate_id']) && !empty($data['cate_id'])) {
            $sql_where .= " AND a.cate_id='" . $data['cate_id'] . "'";
        }

        if (isset($data['cate_name']) && !empty($data['cate_name'])) {
            $sql_where .= " AND a.cate_name='" . $data['cate_name'] . "'";
        }

        if (isset($data['keywords']) && !empty($data['keywords'])) {
            $sql_where .= " AND a.keywords ='" . $data['keywords'] . "'";
        }

        if (isset($data['description']) && !empty($data['description'])) {
            $sql_where .= " AND a.description  like '%" . $data['description'] . "%'";
        }

        if (isset($data['show_nav']) && !empty($data['show_nav'])) {
            $sql_where .= " AND a.show_nav in (".implode(",",$data['show_nav']).")";
        }

        $sql_order = " ";
        $sql_limit = "";
        if ($num !== 0 && $offset !== 0) {
            $sql_limit = "  LIMIT $offset, $num";
        }
        return array("select" => $sql_select, "from" => $sql_from, "where" => $sql_where, "order" => $sql_order, "limit" => $sql_limit);
    }

    function get_content($data, $offset = 0, $num = 0)
    {
        $sql_array = self::sql_structure($data, $offset, $num);
        $sql = join("", $sql_array);
        return Db::query($sql);
    }

    function get_content_count($data)
    {
        $sql_array = self::sql_structure($data);
        $sql = "select count(1) as count" . $sql_array['from'] . $sql_array['where'];
        return Db::query($sql);
    }

    function get_id_data($id){
        $result=Db::table($this->table)->where('cate_id',$id)->find();
        return $result;
    }

    function get_pid_data($id){
        $result=Db::table($this->table)->where('pid',$id)->find();
        return $result;
    }

    public function save_cate_model($data)
    {
        $bool = true;
        // 启动事务
        Db::startTrans();
        try {
            // 过滤post数组中的非数据表字段数据
            $this->allowField(true)->save($data);
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            $bool = false;
            // 回滚事务
            Db::rollback();
        }
        return $bool;
    }

    public function update_cate_model($data,$id)
    {
        $bool = true;
        // 启动事务
        Db::startTrans();
        try {
            // 过滤post数组中的非数据表字段数据
            $this->allowField(true)->save($data,['cate_id' => $id]);
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            $bool = false;
            // 回滚事务
            Db::rollback();
        }
        return $bool;
    }

}
