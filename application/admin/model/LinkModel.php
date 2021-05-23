<?php

namespace app\admin\model;

use think\Model;
use think\Db;

class LinkModel extends Model
{
    protected $table = 'tps_link';
    protected $autoWriteTimestamp = true;

    function sql_structure($data = '', $offset = 0, $num = 0)
    {
        $sql_select = "select  *";
        $sql_from = " FROM  tps_link ";
        $sql_where = " WHERE 1=1";

        if (isset($data['link_id']) && !empty($data['link_id'])) {
            $sql_where .= " AND link_id='" . $data['link_id'] . "'";
        }

        if (isset($data['title']) && !empty($data['title'])) {
            $sql_where .= " AND  title='" . $data['title'] . "'";
        }

        if (isset($data['status']) && !empty($data['status'])) {
            $sql_where .= " AND  status ='" . $data['status'] . "'";
        }

        if (isset($data['type']) && !empty($data['type'])) {
            $sql_where .= " AND  type in (".implode(",",$data['type']).")";
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

    /**
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\db\exception\DataNotFoundException
     */
    function get_id_data($id){
        return Db::table($this->table)->where('link_id',$id)->find();
    }

    /**
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\db\exception\DataNotFoundException
     */
    function get_pid_data($id){
        return Db::table($this->table)->where('pid',$id)->find();
    }

    public function save_link_model($data)
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

    public function update_link_model($data,$id)
    {
        $bool = true;
        // 启动事务
        Db::startTrans();
        try {
            // 过滤post数组中的非数据表字段数据
            $this->allowField(true)->save($data,['link_id' => $id]);
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
