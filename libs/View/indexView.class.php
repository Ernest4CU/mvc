<?php
	class indexView{
		//视图引擎的调用
		public function show($data)
		 {
		 	VIEW::$view->assign('str',$data);
			VIEW::$view->display('test.tpl');
		 } 
	}
?>