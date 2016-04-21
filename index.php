<?php
	header("Content-type:text/html;charset=utf8");
	require_once('function.php');//mvc功能函数引用
	require_once('config.php');//配置文件引用
	$view = ORG('Smarty/','Smarty',$viewconfig);
	$view->assign('str','测试');
	$view->display('test.tpl');
?>