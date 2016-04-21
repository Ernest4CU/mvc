<?php
	header("Content-type:text/html;charset=utf8");
	require_once('config.php');//引用配置
	require_once('framework/pc.php');//mvc功能函数引用
	PC::run($config);
?>