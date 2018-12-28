<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/28
 * Time: 15:42
 */

namespace app\index\controller;


use think\Controller;

class User extends Base
{
    public function show() {
        return $this->fetch("profile");
    }

    public function changePassword() {


        return  $this->fetch();
    }
}