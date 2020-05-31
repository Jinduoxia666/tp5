<?php


namespace app\admin\model;


use think\Db;
use think\db\exception\DataNotFoundException;
use think\db\exception\ModelNotFoundException;
use think\exception\DbException;
use think\Model;

class Admin extends Model
{

    /**
     * 查询用户列表
     * @param $start
     * @param $length
     * @return array
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function  userList($start,$length){
        $where="1=1";
        $data=  Db::name("user")->alias("a")->field("a.id,a.username,a.nickname,a.email,a.update_time,a.create_time")
            ->where($where)
            ->limit($start,$length)->select();
        $count= Db::name("user")->where($where)->count();
        return ["data"=>$data,"count"=>$count];
    }

    /**
     * 查询详情
     * @param $id
     * @return array|bool|false|\PDOStatement|string|Model|null
     */
    public function userDetail($id){
        try {
            $where = "1=1 and id=".$id;
            $data = Db::name("user")->alias('a')->field("*")
                ->where($where)
                ->find();
            return $data;
        } catch (DataNotFoundException $e) {
        } catch (ModelNotFoundException $e) {
        } catch (DbException $e) {
        }

    }



}