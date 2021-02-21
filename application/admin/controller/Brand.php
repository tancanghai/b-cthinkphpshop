<?php

namespace app\admin\controller;

use think\Controller;
use think\Config;
use app\admin\model\BrandModel;
use app\admin\model\CommonModel;

class Brand extends Controller
{
    public function _initialize()
    {
        $model = new BrandModel;
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
            foreach ($datas as $k=>$v){
                if(!empty($v["brand_img"])){
                    $brand_img = preg_replace_callback( '!s:(\d+):"(.*?)";!s', function($r){ return 's:'.strlen($r[2]).':"'.$r[2].'";'; }, $v["brand_img"] );
                    $arrImg = unserialize($brand_img);
                }else{
                    $arrImg=[];
                }
                $datas[$k]["brand_img"]=$arrImg;
            }
            $counts = $this->model->get_content_count($data["param_data"]);
            return $this->fetch("content",[
                "datas"=>$datas,
                "count"=>$counts[0]["count"]
            ]);
        }
    }

    public function delete(){
        $uploader=new \app\admin\common\Uploader();
        if (request()->isPost()) {
            $id = input('post.id');
            $datas = $this->model->get_content(["brand_id"=>$id]);
            if(!empty($datas[0]["brand_img"])){
                $brand_img = preg_replace_callback( '!s:(\d+):"(.*?)";!s', function($r){ return 's:'.strlen($r[2]).':"'.$r[2].'";'; }, $datas[0]["brand_img"] );
                $arrImg = unserialize($brand_img);
                foreach ($arrImg as $k=>$v){
                    $uploader->removeFile($v);
                }
            }
            $rs=$this->model->where('brand_id',$id)->delete();
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

    public function save_brand_add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $bool = $this->model->save_brand_model($data);
            if ($bool) {
                return ['status' => 1, 'msg' => '保存成功'];
            } else {
                return ['status' => 0, 'msg' => '保存失败'];
            }
        }
    }

    public function edit($id)
    {
//        $this->view->engine->layout('common/layout');
        Config::set('default_ajax_return', 'html');
        $datas = $this->model->get_content(["brand_id"=>$id]);
        if(!empty($datas[0]["brand_img"])){
            $brand_img = preg_replace_callback( '!s:(\d+):"(.*?)";!s', function($r){ return 's:'.strlen($r[2]).':"'.$r[2].'";'; }, $datas[0]["brand_img"] );
            $arrImg = unserialize($brand_img);
            $imgSum=count($arrImg);
        }else{
            $arrImg="";
            $imgSum=0;
        }
        return $this->fetch("edit",[
            "datas"=>$datas[0],
            "arrImg"=>$arrImg,
            "imgSum"=>$imgSum
        ]);
    }

    public function save_brand_edit()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $id=$data["id"];
            $data=$data["data"];
            $bool = $this->model->update_brand_model($data,$id);
            if ($bool) {
                return ['status' => 1, 'msg' => '更新成功'];
            } else {
                return ['status' => 0, 'msg' => '更新失败'];
            }
        }
    }

    public function webUploader()
    {
        Config::set('default_ajax_return', 'html');
        $key_id=input("get.id");
        $imgSum=input("get.imgSum");
        return $this->fetch("web-uploader",[
            "key_id"=>$key_id,
            "imgSum"=>$imgSum
        ]);
    }

    public function brand_edit_upload_img()
    {
        $uploader=new \app\admin\common\Uploader();
        $data = input('post.');
        $bool=$uploader->upload_img("tps_brand", "brand_img", "brand_id");
        if($bool){
            return json(['status' => 1, 'msg' => '保存成功']);
        }else{
            return json(['status' => 0, 'msg' => '保存失败']);
        }
    }

    public  function deleteImg()
    {
        if (request()->isPost()) {
            $model = new CommonModel;
            $uploader=new \app\admin\common\Uploader();
            $data = input("post.");
            $key_id = $data["id"];
            $imgPath = $data["imgPath"];
            $id_Data = $model->get_id_data("tps_brand", $key_id, "brand_id");
            $brand_img = $id_Data["brand_img"];
            if (!empty($brand_img)) {
                $brand_img = preg_replace_callback('!s:(\d+):"(.*?)";!s', function ($r) {
                    return 's:' . strlen($r[2]) . ':"' . $r[2] . '";';
                }, $brand_img);
                $arrImg = unserialize($brand_img);
                unset($arrImg[array_search($imgPath,$arrImg)]);
                $uploader->removeFile($imgPath);
            } else {
                $arrImg = [];
            }
            $res = $model->update_id_data("tps_brand", ["brand_img" => serialize($arrImg), "brand_id" => $key_id]);
            if ($res) {
                return json(['status' => 1, 'msg' => '删除成功']);
            } else {
                return json(['status' => 0, 'msg' => '删除失败']);
            }
        }
    }
}
