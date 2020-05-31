<?php


namespace app\admin\controller;


use think\Controller;
use think\Db;
use think\helper\Time;

class User extends Controller
{
    /**
     * 查看用户列表信息
     * @return mixed|\think\response\Json
     *
     */
    public function user(){
        if ($this->request->post() || $this->request->isAjax()) {
            $start = ($_POST["page"]-1)*10;
            $length = $_POST["limit"];
            $data= model("Admin")->userList($start,$length);

            if (!$data)
            {
                return
                    json(["code" =>'1' ,"msg" =>'失败' , "count" =>$data['count'], "data" => []]);
            } else
            {

                return json(["code" =>'0' ,"msg" =>'成功' , "count" =>$data['count'] , "data" => $data['data']]);
            }
        }
        return $this->fetch();
    }

    /**
     * 查看用户详情信息
     * @param $id
     * @return mixed
     */
    public function view($id){
        $id1 =$id;
        $data = model('Admin')->userDetail($id1);
        $this->assign("user",$data);
        return $this->fetch();
    }

    /**
     * 新增用户
     * @return mixed|\think\response\Json
     *
     */
    public function add(){
        if(!empty($_POST)){
            $_POST['password']=md5($_POST['password']);
            $now = date('y-m-d h:i:s',time());
            $_POST['create_time'] = $now;
            $_POST['update_time'] = $now;;
            $res= Db::name("user")->insert($_POST);
            if($res){
                return json(["code"=>1,"msg"=>"添加成功"]);
            }
            else{
                return json(["code"=>-1,"msg"=>"添加失败"]);
            }
        }else{
            return $this->fetch();
        }
    }

    /**
     * 修改单条用户信息
     * @param $id
     * @return mixed|\think\response\Json
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function update($id){
        if(!empty($_GET)){
            $data=Db::name("user")->find($id);
            $this->assign("user",$data);
            return $this->fetch();
        }
        if(!empty($_POST)){
            $now = date('y-m-d h:i:s',time());
            $_POST['update_time'] = $now;;
            $res= Db::name("user")->update($_POST);
            if($res){
                return json(["code"=>1,"msg"=>"添加成功"]);
            }
            else{
                return json(["code"=>-1,"msg"=>"添加失败"]);
            }
        }else{
            return $this->fetch();
        }
    }

    /**
     * 删除用户
     * @return \think\response\Json
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function delete(){
        if (!empty($_POST)){
            $res = Db::name("user")->delete($_POST);
            if ($res){
                return json(["code"=>1,"msg"=>"删除成功"]);
            }else{
                return json(["code"=>-1,"msg"=>"删除失败"]);
            }
        }
    }

}