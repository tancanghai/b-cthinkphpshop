<?php
//图片上传
namespace app\admin\common;

use app\admin\model\CommonModel;

class Uploader
{
    function __construct()
    {
        $model = new CommonModel;
        $this->model = $model;
    }

    //定义一个方法名upload_img，和view/TestImage文件夹下面的upload_img同名，提交信息时匹配文件
    public function upload_img($tableName, $imgFieldName, $idFieldName)
    {
        if (request()->isPost()) {

            $data = input('post.');//获取js中uploadBeforeSend传来的参数
            $key_id = $data['key_id'];//主键id
            $file = request()->file('file');//获取图片文件
            if ($file) {
                $info = $file->rule('date')->move(ROOT_PATH . 'public' . DS . 'uploads');// 移动到框架应用根目录/public/uploads/ 目录下
                if ($info) {
                    // 成功上传后 获取上传信息
                    $imgPath = "/uploads/" . $info->getSaveName();
                    $id_Data = $this->model->get_id_data($tableName, $key_id, $idFieldName);
                    $brand_img = $id_Data[$imgFieldName];
                    if (!empty($brand_img)) {
                        $brand_img = preg_replace_callback('!s:(\d+):"(.*?)";!s', function ($r) {
                            return 's:' . strlen($r[2]) . ':"' . $r[2] . '";';
                        }, $brand_img);
                        $arrImg = unserialize($brand_img);
                        array_push($arrImg, $imgPath);
                    } else {
                        $arrImg = [$imgPath];
                    }
                    $res = $this->model->update_id_data($tableName, [$imgFieldName => serialize($arrImg), $idFieldName => $key_id]);
                    if ($res) {
                        return true;
                    } else {
                        unset($info); //一定要unset之后才能进行删除操作，否则请求会被拒绝
                        $this->removeFile($imgPath); //删除上传失败文件
                        return false;
                    }
                } else {
                    // 上传失败获取错误信息
                    return false;
//                  echo $file->getError();
                }
            }
        }
    }

    /**
     * 保存ueditor上传的图片地址到对应的数据表json字段中 单图片上传 修改的时候
     * @param $tableName 表名
     * @param $imgFieldName 图片字段名
     * @param $idFieldName id字段名
     * @param $idFieldValue id值
     * @param $file_url  图片地址
     * @return bool
     */
    public function save_ueditor_upload_img($tableName, $imgFieldName, $idFieldName, $idFieldValue, $file_url)
    {
        $id_Data = $this->model->get_id_data($tableName, $idFieldValue, $idFieldName);
        $brand_img = $id_Data[$imgFieldName];
        if (!empty($brand_img)) {
            $arrImg = json_decode($brand_img, true);
            array_push($arrImg, $file_url);
        } else {
            $arrImg = [$file_url];
        }
        $res = $this->model->update_id_data($tableName, [$imgFieldName => json_encode($arrImg), $idFieldName => $idFieldValue]);
        if ($res) {
            return true;
        } else {
            unset($info); //一定要unset之后才能进行删除操作，否则请求会被拒绝
            $this->removeFile($file_url); //删除上传失败文件
            return false;
        }
    }

    //卑微小谭自定义封装多图上传后台处理函数；
    public function upload_img_files(){
        $imgPaths = array();
        $files = request()->file('image');
        foreach($files as $file){
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                $imgPaths[] = "/uploads/" . $info->getSaveName();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        return json_encode($imgPaths);
    }

    //删除文件
    public function removeFile($path)
    {
        unlink('.' . $path);
    }


}
