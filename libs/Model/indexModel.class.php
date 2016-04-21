<?php
	class indexModel{
		public function get()
		 {
			require_once('/libs/db/mysqliDb.class.php');
			eval('$obj = new mysqliDb();');
			$obj->err("mysqliDb");
		 	//return "前端界面显示";
		 } 
	}
?>