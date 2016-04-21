<?php
	class indexView{
		//视图引擎的调用
		public function show($data)
		 {
		 	VIEW::$view->assign('str',"Smart测试");
			VIEW::$view->display('test.tpl');
		 } 
	}
?>