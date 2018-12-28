<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/28
 * Time: 15:55
 */

namespace app\index\controller;


use think\Controller;
use think\facade\Session;


class Login extends Controller
{
    public function login() {
        $user = [
          "user_id" => "8901",
          "user_name" => "钟平平",
          "user_role_id" => "1" ,
        ];

        Session::set("user", $user);
    }
}