<?php
	class testController{
		//控制器中实现所有功能的调度，主要是调用模型（Model）和视图（View）
		//模型用来处理或提取数据
		//视图用来做界面显示
		function show(){
			require('config.php');//配置文件引用
			$model = M('test');
			$data = $model->get();		
			$view = ORG('Smarty/','Smarty',$viewconfig);
			$view->assign('str',$data);
			$view->display('main.tpl');
					
		}
	}
?>