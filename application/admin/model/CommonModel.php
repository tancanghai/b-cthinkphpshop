<?php

namespace app\admin\model;

use think\Model;
use think\Db;

class CommonModel extends Model
{
    protected $autoWriteTimestamp = true;

    public function get_id_data($tableName, $id, $idFieldName)
    {
        $data = Db::name($tableName)->where($idFieldName, $id)->find();
        return $data;
    }

    public function update_id_data($tableName, $data)
    {
        $bool = true;
        // 启动事务
        Db::startTrans();
        try {
            Db::table($tableName)->update($data);
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
