<?php

namespace app\admin\controller;

use think\Controller;
use think\Config;
use app\admin\model\CateModel;
use app\admin\model\CommonModel;

class Cate extends Controller
{
    public function _initialize()
    {
        $model = new CateModel;
        $this->model=$model;
    }

    public function lists()
    {
        Config::set('default_ajax_return', 'html');
        return $this->fetch("list");
    }

    public function content()
    {
        Config::set('default_ajax_return', 'html');
        if (request()->isPost()) {
            $data = input('post.');
            $datas = $this->model->get_content($data["param_data"],$data["offset"],$data["num"]);
            $counts = $this->model->get_content_count($data["param_data"]);
            $listTree=new \app\admin\common\ListTree();
            $datas=$listTree->catetree($datas,"cate_id");
            return $this->fetch("content",[
                "datas"=>$datas,
                "count"=>$counts[0]["count"]
            ]);
        }
    }

    public function delete(){
        if (request()->isPost()) {
            $id = input('post.id');
            $datas = $this->model->get_pid_data($id);
            if($datas){
                return ['status' => 0, 'msg' => '删除失败！不是最底层栏目类别！'];
            }
            $rs=$this->model->where('cate_id',$id)->delete();
            if ($rs) {
                return ['status' => 1, 'msg' => '删除成功'];
            } else {
                return ['status' => 0, 'msg' => '删除失败'];
            }
        }
    }

    public function add()
    {
//        $this->view->engine->layout('common/layout');
        Config::set('default_ajax_return', 'html');
        $datas = $this->model->get_content("");
        return $this->fetch("add",[
            "cate_data"=>$datas
        ]);
    }

    public function save_cate_add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $bool = $this->model->save_cate_model($data);
            if ($bool) {
                return ['status' => 1, 'msg' => '保存成功'];
            } else {
                return ['status' => 0, 'msg' => '保存失败'];
            }
        }
    }

    public function edit($id,$pid)
    {
        Config::set('default_ajax_return', 'html');
        $datas = $this->model->get_content("");
        $cate_data=[];
        $cate_p=[];
        foreach ($datas as $k=>$v){
            if($v["cate_id"]==$pid){
                $cate_p=$v;
            }
            if($v["cate_id"]==$id){
                $cate_data=$v;
            }
        }
        return $this->fetch("edit",[
            "cate_datas"=>$datas,
            "cate_data"=>$cate_data,
            "cate_p"=>$cate_p,
        ]);
    }

    public function save_cate_edit()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $id=$data["id"];
            $data=$data["data"];
            $bool = $this->model->update_cate_model($data,$id);
            if ($bool) {
                return ['status' => 1, 'msg' => '更新成功'];
            } else {
                return ['status' => 0, 'msg' => '更新失败'];
            }
        }
    }

}
