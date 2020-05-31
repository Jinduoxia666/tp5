<?php


namespace app\admin\controller;


use app\admin\model\Admin;
use think\Controller;

class Login extends Controller
{
    /**
     * 登录 缓存cookie
     *
     */
    public function login(){
        if(!empty($_POST))
        {
            $uname=$_POST["uname"];
            $password=$_POST["password"];
            $adminarr= Admin::name("user")->where(["username"=>$uname,"password"=>md5($password)])->find();

            if(!empty($adminarr))
            {
                $arr=  $adminarr->toArray();
                cookie("admins",$arr);   //存入cookie
                $this->redirect("index/index");
            }
            else
            {
                echo "<script> alert('账号或密码错误')</script>";
                return  $this->fetch();
            }
        }
        else
        {
            // 如果没有post参数，则跳转到登录页面，加载对应的模板
            return  $this->fetch();
        }
    }


    public function destruction(){
        cookie("admins",null);
        $this->redirect("login/login");
    }
}