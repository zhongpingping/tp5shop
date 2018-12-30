<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/30
 * Time: 12:03
 */

namespace app\index\controller;


use think\Model;

class User extends Base
{
    public function show() {
        $user = Model("User");
        $data = $user->select();
        $this->assign("list", $data);
        return $this->fetch();

    }

    public function add() {

    }

    public function update() {

    }

    public function del() {

    }
}