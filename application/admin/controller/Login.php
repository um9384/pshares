<?php
namespace app\admin\controller;
use think\Controller;
use think\Loader;
use think\Session;
use think\Db;
use think\Config;
use think\Exception;
use think\View;
use think\Request;

class Login extends Controller
{

	function __construct(){
		
	}
	
	//=============登陆页面
	public function index()
	{
		return view();
	}
	//=============登陆行为
	public function login()
	{
		//跳转后台首页
		$this->redirect('admin/index/index');
		//return view();
	}
}