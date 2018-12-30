<?php
/**
 * Created by PhpStorm.
 * Admin: Administrator
 * Date: 2018/12/28
 * Time: 15:42
 */

namespace app\index\controller;


use think\Controller;

class Admin extends Base
{
    public function show() {
        return $this->fetch("profile");
    }

    public function changePassword() {
        if($this->request->isPost()) {
            //通过post方式进行修改当前用户的密码

            return $this->success("修改密码成功", url("index/index"));

        }
        return  $this->fetch();
    }
}