<?php

namespace app\admin\controller;

use think\Controller;
use think\Config;
use app\admin\model\LinkModel;
use app\admin\common\Uploader;

class Link extends Controller
{
    public function _initialize()
    {
        $model = new LinkModel;
        $this->model = $model;
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
            $datas = $this->model->get_content($data["param_data"], $data["offset"], $data["num"]);
            foreach ($datas as $k=>$v){
                if($v["logo"]){
                    $v["logo"]= (json_decode($v["logo"],true))[0];
                }
                $datas[$k]=$v;
            }
            $counts = $this->model->get_content_count($data["param_data"]);
            return $this->fetch("content", [
                "datas" => $datas,
                "count" => $counts[0]["count"]
            ]);
        }
    }

    public function delete()
    {
        if (request()->isPost()) {
            $id = input('post.id');
            $link_data = $this->model->get_id_data($id);
            if ($link_data["logo"]) {
                $logos = json_decode($link_data["logo"], true);
                $Uploader = new Uploader();
                foreach ($logos as $value) {
                    $Uploader->removeFile($value);
                }
            }
            $rs = $this->model->where('link_id', $id)->delete();
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
            $imgPaths = (new Uploader())->upload_img_files();
            $data["logo"] = $imgPaths;
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
        $datas = $this->model->get_id_data($id);
        if($datas["logo"]){
            $datas["logo"]= (json_decode($datas["logo"],true))[0];
        }
        return $this->fetch("edit", [
            "link_data" => $datas
        ]);
    }

    public function save_link_edit()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $id = $data["link_id"];

            $link_data = $this->model->get_id_data($id);
            if ($link_data["logo"]) {
                $logos = json_decode($link_data["logo"], true);
                $Uploader = new Uploader();
                foreach ($logos as $value) {
                    $Uploader->removeFile($value);
                }
            }
            $imgPaths = (new Uploader())->upload_img_files();
            $data["logo"] = $imgPaths;
            $bool = $this->model->update_link_model($data, $id);
            if ($bool) {
                return ['status' => 1, 'msg' => '更新成功'];
            } else {
                return ['status' => 0, 'msg' => '更新失败'];
            }
        }
    }

}
