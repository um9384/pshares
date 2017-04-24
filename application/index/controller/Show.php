<?php
namespace app\index\controller;

use app\index\model\User;
use think\config;
use think\Controller;

/**
* 
*/
class Show extends Controller
{
	
	function index()
	{
		echo 'app_namespace='.config('app_namespace').'    ';
		echo 'default_return_type='.Config::get('default_return_type').'    ';
		//Config::set('default_return_type','json');
		echo 'database='.Config::get('database.hostname').'    ';
		//$user=new \app\index\controller\Index();
		$user=new User();
		//return $user->index();
		$test=$_REQUEST['test'];
		if($test){
			$this->success('欢迎tp5','index/index/index');
			//$this->redirect('index/index/index');//重定向
		}else{
			$this->error('没有test');
		}
	}
}