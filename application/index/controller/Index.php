<?php
namespace app\index\controller;

use think\facade\Config;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }

    public function welcome() {
        echo "欢迎页面";
    }
}
