<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        echo phpinfo();

    }


    public function db(){
        // 插入数据
        $result = Db::name("data")->insertGetId(['data'=>'问问']);
        return dump($result);
    }

    public function hello(){
        // 查询数据
        $res = Db::name("data")->select();
//        dump($res);
        $this->assign('result', $res);
        return $this->fetch();
    }
}
