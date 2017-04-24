<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
	public function _initialize(){
		// echo 'init</br>';
	}
	//beforeAction   controller前置操作
	// protected $beforeActionList=[
	// 	'f1'=>['except'=>'index'],
	// 	'f2' =>['only'=>'index'],
	// 	'f3',

	// ];

	// protected function f1(){
	// 	echo 'f1</br>';
	// }

	// protected function f2(){
	// 	echo 'f2</br>';
	// }

	// protected function f3(){
	// 	echo 'f3</br>';
	// }
	 // public function th2()
    // {
    // 	echo "this2";
    // }

    // public function _empty(){
    // 	return '当前没有改操作';
    // }

    public function index()
    {
    	return view(); //输出模板
        //return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }
    public function about(){
    	return view();
    }
    public function contact(){
    	return view();
    }
    public function folio(){
    	return view();
    }
    public function services(){
    	return view();
    }

    //=============================进入后台
    public function admin(){
        $this->redirect('admin/index/index');
        //return view();
    }
   
}
