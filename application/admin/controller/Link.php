<?php

namespace app\admin\controller;

use think\Controller;
use think\Config;
use app\admin\model\LinkModel;

class Link extends Controller
{
    public function _initialize()
    {
        $model = new LinkModel;
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
            $rs=$this->model->where('link_id',$id)->delete();
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
            "link_data"=>$datas
        ]);
    }

    public function save_link_add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $bool = $this->model->save_link_model($data);
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
        $link_data=[];
        $link_p=[];
        foreach ($datas as $k=>$v){
            if($v["link_id"]==$pid){
                $link_p=$v;
            }
            if($v["link_id"]==$id){
                $link_data=$v;
            }
        }
        return $this->fetch("edit",[
            "link_datas"=>$datas,
            "link_data"=>$link_data,
            "link_p"=>$link_p,
        ]);
    }

    public function save_link_edit()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $id=$data["id"];
            $data=$data["data"];
            $bool = $this->model->update_link_model($data,$id);
            if ($bool) {
                return ['status' => 1, 'msg' => '更新成功'];
            } else {
                return ['status' => 0, 'msg' => '更新失败'];
            }
        }
    }

}
