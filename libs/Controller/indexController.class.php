<?php
	class indexController{
		//控制器中实现所有功能的调度，主要是调用模型（Model）和视图（View）
		//模型用来处理或提取数据
		//视图用来做界面显示
		function index(){
			//创建一个模型用来读取数据
			$model = M('index');
			$data = $model->get();
			$view = V('index');
			$view->show($data);			
		}
	}
?>