<?php
/**
 * @ [a web admin based ThinkPHP5]
 *
 * @author    @
 * @link      @
 * @copyright @
 * @license   @
 */

use \think\Request;

$basename = Request::instance()->root();
if (pathinfo($basename, PATHINFO_EXTENSION) == 'php') {
    $basename = dirname($basename);
	$basename='';
}

return [
    // 模板参数替换
    'view_replace_str' => [
        '__ROOT__'   => $basename,
        '__padmin__' => $basename . '/public/admin',


    ],

    
];
