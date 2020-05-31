<?php


namespace app\admin\controller;


use think\Controller;
use think\Db;
use think\Request;

class Index extends Controller
{
    public function index(){
        $admins=cookie("admins");
        $this->assign("nick_name",$admins['nickname']);
        return $this->fetch();
    }

    /**
     * 获取输入参数
     * @param Request $request
     * @param $name
     */
    public function hello(Request $request){
//        echo "name:".$this->request->param('name','world','strtolower');
//        echo '<br> test:'.$this->request->param('test','thinkphp','strtoupper');
//        echo 'GET参数：';
//        dump($request->get());
//        echo 'GET参数：name';
//        dump($request->get('name'));
//        echo 'POST参数：name';
//        dump($request->post('name'));
//        echo 'cookie参数：name';
//        dump($request->cookie('name'));
//        echo '上传文件信息：image';
//        dump($request->file('image'));
//        echo '路由信息：';
//        dump($request->routeInfo());
//        echo '调度信息：';
//        dump($request->dispatch());
//        echo '请求方法：'.$request->method().'<br>';
////        echo '参数：'.$name.' '.$age.'<br>';
//        echo '资源类型：'.$request->type().'<br>';
//        echo '访问ip：'.$request->ip().'<br>';
//        echo '是否Ajax请求：'.var_export($request->isAjax(),true).'<br>';
//        echo '当前url地址：'.$request->url().'<br>';
//        echo '当前入口文件：'.$request->baseFile().'<br>';
//        echo '当前基本地址：'.$request->baseUrl().'<br>';
//        echo '模块：'.$request->module();
//        echo '<br/>控制器：'.$request->controller();
//        echo '<br/>操作：'.$request->action();
//        $result = Db::name('user')
//            ->where([
//                'id'=>['between','1,10'],
//                'username'=>['like','%admin%']
//            ])
//            ->select();
        $result = Db::view('user','id,username,nickname,email')
            ->where('id','<=','3')
            ->select();
        dump($result);

    }
}