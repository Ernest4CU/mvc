<?php
	header("Content-type:text/html;charset=utf8");
	require_once('function.php');//mvc功能函数引用
	//控制器允许数组和控制器方法允许
	$controllerAllow=array('test','index');
	$methodAllow=array('show','index');
	//统一的Url格式  index.php?controller=控制器名&method=方法名
	$controller=in_array($_GET['controller'],$controllerAllow)?daddslashes($_GET['controller']):'index';	
	$method=in_array($_GET['method'],$methodAllow)?daddslashes($_GET['method']):'index';
	C($controller,$method);
?>