<?php
	class DB{
		public static $db;//用来保存实例化之后的对象的
		
		public static function init($dbtype,$config){
			self::$db = new $dbtype;
			self::$db->connect($config);//返回connect句柄
		}
		
		public static function query($sql){
			return self::$db->query($sql);
		}
		
		public static function findAll($sql){
			$query = self::$db->query($sql);
			return self::$db->findAll($query);
		}
		
		public static function findOne($sql){
			$query = self::$db->query($sql);
			return self::$db->findOne($query);
		}
		/*暂时还不能用
		public static function findResult($sql,$row = 0,$filed = 0){
			$query = self::$db->query($sql);
			return self::$db->findAll($query,$row,$filed);
		}*/
		
		public static function insert($table,$arr){			
			return self::$db->insert($table,$arr);
		}
		
		public static function update($table,$arr,$where){			
			return self::$db->update($table,$arr,$where);
		}
		
		public static function del($table,$where){			
			return self::$db->del($table,$where);
		}
	}
?>