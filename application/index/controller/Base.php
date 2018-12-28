<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/28
 * Time: 15:43
 */

namespace app\index\controller;


use think\Controller;
use think\facade\Session;

class Base extends Controller
{
    protected $beforeActionList = [
      "isLogin",
    ];


    
    public function isLogin() {
        $user =Session::get("user");
        if(is_null($user)) {
            $this->error("没有登录，请登录!!", url("login/login"));
        }
    }
}