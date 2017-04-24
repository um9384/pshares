<?php
namespace app\index\controller;

use think\Request;

class Error extends Request
{
	public function _empty(){
		echo '该链接还没有被开放';

		$request = Request::instance();
		// 获取当前域名
		echo 'domain: ' . $request->domain() . '<br/>';
		// 获取当前入口文件
		echo 'file: ' . $request->baseFile() . '<br/>';
		// 获取当前URL地址 不含域名
		echo 'url: ' . $request->url() . '<br/>';
		// 获取包含域名的完整URL地址
		echo 'url with domain: ' . $request->url(true) . '<br/>';
		// 获取当前URL地址 不含QUERY_STRING
		echo 'url without query: ' . $request->baseUrl() . '<br/>';
		// 获取URL访问的ROOT地址
		echo 'root:' . $request->root() . '<br/>';
		// 获取URL访问的ROOT地址
		echo 'root with domain: ' . $request->root(true) . '<br/>';
		// 获取URL地址中的PATH_INFO信息
		echo 'pathinfo: ' . $request->pathinfo() . '<br/>';
		// 获取URL地址中的PATH_INFO信息 不含后缀
		echo 'pathinfo: ' . $request->path() . '<br/>';
		// 获取URL地址中的后缀信息
		echo 'ext: ' . $request->ext() . '<br/>';

		echo "当前模块名称是" . $request->module();
		echo "当前控制器名称是" . $request->controller();
		echo "当前操作名称是" . $request->action();

		// 是否为手机访问
		if (Request::instance()->isMobile()) echo "================当前为手机访问";
	}
}
