<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
		return "Hello World";
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
