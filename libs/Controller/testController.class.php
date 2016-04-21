<?php
	class testController{
		function show(){
			$model = M('test');
			$data = $model->get();
			$view = V('test');
			$view ->display($data);			
		}
	}
?>