<?php

namespace app\admin\model;

use think\Model;
use think\Db;

class BrandModel extends Model
{
    protected $table = 'tps_brand';
    protected $autoWriteTimestamp = true;

    function sql_structure($data = '', $offset = 0, $num = 0)
    {
        $sql_select = "select a.*";
        $sql_from = " FROM  tps_brand as a";
        $sql_where = " WHERE 1=1";

        if (isset($data['brand_id']) && !empty($data['brand_id'])) {
            $sql_where .= " AND a.brand_id='" . $data['brand_id'] . "'";
        }

        if (isset($data['brand_name']) && !empty($data['brand_name'])) {
            $sql_where .= " AND a.brand_name='" . $data['brand_name'] . "'";
        }

        if (isset($data['brand_url']) && $data['brand_url'] !== "") {
            $sql_where .= " AND a.brand_url ='" . $data['brand_url'] . "'";
        }

        if (isset($data['brand_description']) && !empty($data['brand_description'])) {
            $sql_where .= " AND a.brand_description ='" . $data['brand_description'] . "'";
        }

        if (isset($data['status']) && !empty($data['status'])) {
            $sql_where .= " AND a.status in (".implode(",",$data['status']).")";
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

    public function save_brand_model($data)
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

    public function update_brand_model($data,$id)
    {
        $bool = true;
        // 启动事务
        Db::startTrans();
        try {
            // 过滤post数组中的非数据表字段数据
            $this->allowField(true)->save($data,['brand_id' => $id]);
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
