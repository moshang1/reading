<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function demo()
    {
		return random(1,3);
    	//return 222;

    }
   
}
