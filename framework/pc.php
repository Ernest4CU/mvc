<?php
	$currentdir = dirname(__FILE__);
	include_once($currentdir.'/include.list.php');
	foreach($paths as $path){
		include_once($currentdir.'/'.$path);
	}
	class PC{
		public static $controllerAllow=array('index');
		public static $methodAllow=array('index');
		public static $controller;
		public static $method;
		private static $config;
		private static function init_db(){
			DB::init('mysqliDb', self::$config['dbconfig']);
		}
		private static function init_view(){
			VIEW::init('Smarty', self::$config['viewconfig']);
		}
		private static function init_controllor(){
			
			self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):'index';
			self::$controller = in_array(self::$controller,self::$controllerAllow)?self::$controller:'index';				
		}
		private static function init_method(){
			self::$method = isset($_GET['method'])?daddslashes($_GET['method']):'index';
			self::$method = in_array(self::$method,self::$methodAllow)?self::$method:'index';	
		}
		public static function run($config){
			self::$config = $config;
			self::init_db();//数据库初始化
			self::init_view();//视图引擎初始化
			self::init_controllor();//控制器初始化
			self::init_method();//方法初始化
			C(self::$controller, self::$method);//启动引擎
		}
	}
?>