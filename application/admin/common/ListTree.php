<?php

namespace app\admin\common;
//类别排序
class ListTree
{
    public function catetree($cateRes, $idString)
    {
        return $this->sort($idString, $cateRes);
    }

    public function sort($idString, $cateRes, $pid = 0, $level = 0)
    {
        static $arr = array();
        foreach ($cateRes as $k => $v) {
            if ($v["pid"] == $pid) {
                $v["level"] = $level;
                $arr[] = $v;
                $this->sort($idString, $cateRes, $v[$idString], $level + 1);
            }
        }
        return $arr;
    }

    //获取子栏目id

    public function childrenids($cateid, $idString)
    {
        $data = $this->field($idString . ",pid")->select();
        return $this->_childrenids($data, $idString, $cateid);
    }

    private function _childrenids($data, $idString, $cateid)
    {
        static $arr = array();
        foreach ($data as $k => $v) {
            if ($v["pid"] == $cateid) {
                $arr[] = $v[$idString];
                $this->_childrenids($data, $v[$idString]);
            }
        }
        return $arr;
    }

}
