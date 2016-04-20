<?php
/*************************************************************************
	第一步 浏览者		->		调用控制器，对他发出指令
	第二步 控制器		->		按指令选取一个合适的模型
	第三步 模型			->		按控制器指令去相应的数据
	第四步 控制器		->		按指令选取相应视图
	第五步 视图			->		把第三步取到的数据按用户想要的样子显示出来
*************************************************************************/

	require_once('testController.class.php');
	require_once('testModel.class.php');
	require_once('testView.class.php');
	$testController = new testController();
	$testController->show();
?>