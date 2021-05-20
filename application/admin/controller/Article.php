<?php

namespace app\admin\controller;

use think\Controller;
use think\Config;
use app\admin\model\ArticleModel;
use app\admin\model\CateModel;
use app\admin\common\Uploader;

class Article extends Controller
{
    public function _initialize()
    {//
        $model = new ArticleModel;
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
            $counts = $this->model->get_content_count($data["param_data"]);
            return $this->fetch("content", [
                "datas" => $datas,
                "count" => $counts[0]["count"]
            ]);
        }
    }

    public function add()
    {
//        $this->view->engine->layout('common/layout');
        Config::set('default_ajax_return', 'html');
        $model = new CateModel;
        $datas = $model->get_content("");
        return $this->fetch("add", [
            "cate_data" => $datas
        ]);
    }

    public function save_article_add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $bool = $this->model->save_article_model($data);
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
        $model = new CateModel;
        $datas = $model->get_content("");
        $article_data = $this->model->get_id_data($id);
        $article_data["content"] = str_replace('"', "'", $article_data["content"]);
        $article_data["content"] = htmlspecialchars($article_data["content"]);
        return $this->fetch("edit", [
            "cate_datas" => $datas,
            "article_data" => $article_data
        ]);
    }

    public function delete()
    {
        if (request()->isPost()) {
            $id = input('post.id');
            $article_data = $this->model->get_id_data($id);
            if (!empty($article_data["content_img"]) && json_decode($article_data["content_img"], true)) {
                foreach (json_decode($article_data["content_img"], true) as $k => $y) {
                    $Uploader = new Uploader();
                    $Uploader->removeFile($y);
                }
            }
            $rs = $this->model->where('article_id', $id)->delete();
            if ($rs) {
                return ['status' => 1, 'msg' => '删除成功'];
            } else {
                return ['status' => 0, 'msg' => '删除失败'];
            }
        }
    }


    public function save_article_edit()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $id = $data["id"];
            $data = $data["data"];
            $bool = $this->model->update_article_model($data, $id);
            if ($bool) {
                return ['status' => 1, 'msg' => '更新成功'];
            } else {
                return ['status' => 0, 'msg' => '更新失败'];
            }
        }
    }

}
