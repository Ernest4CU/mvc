<?php
	function C($name,$method){//第一个是控制器的名字，第二个是方法
		/*
		1.先引入文件
		2.实例化
		3.调用方法
		*/
		require_once('/libs/Controller/'.$name.'Controller.class.php');
		//$testController = new testController();
		//$testController->show();
		eval('$obj = new '.$name.'Controller();$obj->'.$method.'();');
		//eval是php中将字符串转换为可执行的php语句
		/*
		eval()函数调用简单但是不安全
		eval('$obj = new '.$name.'Controller();$testController->'.$method.'();')；
		可用下面代码代替：*/
		/*
		$controller=$name.'controller';//因为变量可达到将变量中的字符串直接参与PHP编译
		$obj=new $controller();//??字符串可用来直接声明对象？
		$obj->$method();
		*/
	}
	
	function M($name){
		require_once('/libs/Model/'.$name.'Model.class.php');
		eval('$obj = new '.$name.'Model();');
		return $obj;
		//eval是php中将字符串转换为可执行的php语句
		/*
		eval()函数调用简单但是不安全
		eval('$obj = new '.$name.'Controller();$testController->'.$method.'();')；
		可用下面代码代替：*/
		/*
		$Model = $name.'Model';
		$obj=new $Model();
		*/
	}
	
	function V($name){
		require_once('/libs/View/'.$name.'View.class.php');
		eval('$obj = new '.$name.'View();');
		return $obj;
		/*
		$View = $name.'View';
		$obj = new $View();
		return $obj;
		*/		
	}
	
	function daddslashes($str){
		return (!get_magic_quotes_gpc())?addslashes($str):$str;
	}
?>