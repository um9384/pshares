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

class Manageblog extends Controller
{

	function __construct(){
		
	}
	
	//manageblog
	public function index()
	{
		return view();
	}
	//newpost
	public function newpost()
	{
		return view();
	}
	//Comments
	public function Comments()
	{
		return view();
	}
	//Categories
	public function Categories()
	{
		return view();
	}


}