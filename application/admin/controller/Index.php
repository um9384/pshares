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

class Index 
{

	function __construct(){
		
	}
	
	//后台首页
	public function index()
	{
		//return '后台努力开发中！！！';
		return view();
	}


	//===================头部菜单
	//编辑资料
	public function editprofile()
	{
		return view();
	}
	//账号设置
	public function accountsettings()
	{
		return view();
	}
	//帮助
	public function help()
	{
		return view();
	}

	//博客管理
	public function manageblog()
	{
		return view();
	}
	//查看消息
	public function messages()
	{
		return view();
	}
	//统计报表
	public function reports()
	{
		return view();
	}


	//左边菜单
	//========================表单提交
	//基础表单
	public function forms()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//表单验证
	public function wizard()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//编辑器
	public function editor()
	{
		//return '后台努力开发中！！！';
		return view();
	}

	//========================
	//网页元素
	public function elements()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//网页插件
	public function widgets()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//日历事件
	public function calendar()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//客户支持
	public function support()
	{
		//return '后台努力开发中！！！';
		return view();
	}//文字排版
	public function typography()
	{
		//return '后台努力开发中！！！';
		return view();
	}//数据表格
	public function tables()
	{
		//return '后台努力开发中！！！';
		return view();
	}//按钮 &amp; 图标
	public function buttons()
	{
		//return '后台努力开发中！！！';
		return view();
	}

	//========================错误页面
	//404错误页面
	public function notfound()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//403错误页面
	public function forbidden()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//500错误页面
	public function internal()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//503错误页面
	public function offline()
	{
		//return '后台努力开发中！！！';
		return view();
	}


	//========================其他页面
	//新闻订阅
	public function newsfeed()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//资料页面
	public function profile()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//产品列表
	public function productlist()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//图片视频分享
	public function photo()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//相册
	public function gallery()
	{
		//return '后台努力开发中！！！';
		return view();
	}
	//购物车
	public function invoice()
	{
		//return '后台努力开发中！！！';
		return view();
	}


}