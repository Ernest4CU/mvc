<?php
	header("Content-type:text/html;charset=utf8");
	require_once('function.php');
	
	$view = ORG('Smarty/','Smarty',array('left_delimiter'=>'{','right_delimiter'=>
		'}','template_dir'=>'tpl','compile_dir'=>'template_c','cache_dir'=>'cache'));
	$view->assign('str','测试');
	$view->display('test.tpl');
?>