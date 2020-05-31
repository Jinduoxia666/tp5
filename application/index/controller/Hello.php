<?php


namespace app\index\controller;


use think\Controller;

class Hello extends Controller
{
    public function hello(){
        echo phpinfo();
    }
}