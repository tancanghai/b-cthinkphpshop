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
        return $this->fetch("add");
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

    public function edit($id)
    {
        Config::set('default_ajax_return', 'html');
        $datas = $this->model->get_content(["link_id"=>$id]);
        return $this->fetch("edit",[
            "link_data"=>$datas[0]
        ]);
    }

    public function save_link_edit()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $id=$data["link_id"];
//            $logo=$data["logo"];
            $bool = $this->model->update_link_model($data,$id);
            $files = request()->file('image');
            foreach($files as $file){
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    // 成功上传后 获取上传信息
                    // 输出 jpg
                    echo $info->getExtension();
                    // 输出 42a79759f284b767dfcb2a0197904287.jpg
                    echo $info->getFilename();
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }

            if ($bool) {
                return ['status' => 1, 'msg' => '更新成功'];
            } else {
                return ['status' => 0, 'msg' => '更新失败'];
            }
        }
    }

}
