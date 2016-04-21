<?php
	class testController{
		//控制器中实现所有功能的调度，主要是调用模型（Model）和视图（View）
		//模型用来处理或提取数据
		//视图用来做界面显示
		function show(){
			$model = M('test');
			$data = $model->get();
			$view = V('test');
			$view ->display($data);			
		}
	}
?>