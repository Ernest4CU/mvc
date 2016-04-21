<?php
	class mysqliDb{
		/**
		报错函数(开发时使用，上线后可注释掉)
		*
		@param string $error
		**/
		function err($error){
			die("对不起，您的操作有误，错误原因为：".$error);
			//die有两种作用 输出和终止 相当于echo和exit的组合
		}
			
		/**
		连接数据库，选择数据库，设置字符集
		*
		@param string $config 配置数组 array($dbhost,$dbpsw,$dbname,$dbcharset)
		**/
		function connect($config){
			extract($config);
			if(!($con = mysqli_connect($dbhost,$dbuser,$dbpsw))){//mysqli_connect连接数据库
				$this->err(mysqli_error($con));
			}
			return $con;
		}
		
		
		/**
		*选择数据库，设置数据库编码
		**/
		function select($con,$config){
			if(!(mysqli_select_db($con,$dbname))){//mysqli_select_db选择数据库
			$this->err(mysqli_error($con));
			}
			mysqli_query($con,$dbcharset);
		}
		/**
		*执行sql语句
		*
		*@param string $sql
		*@return bool 返回执行成功、资源或执行失败
		**/
		function query($con,$sql){
			if(!($query = mysqli_query($con,$sql))){
				$this->err($sql."<br />".mysql_err());
			}else{
				return $query;
			}
		}
		
		/**
		*列表
		*
		*@param soruce $query sql语句通过mysql_query执行出来的资源
		*@return array 返回列表数组
		**/
		function findAll($query){
			while($rs=mysqli_fetch_assoc($query){
				$list[] = $rs;
			}
			return isset($list)?$list:"";
		}
		
		/**
		*单条
		*
		*@param soruce $query sql语句通过mysql_query执行出来的资源
		*@return array 返回单条信息数组
		**/
		function findOne($query){
			$rs=mysqli_fetch_assoc($query);			
			return $rs;
		}
		
		/**
		*指定行的制定字段的值
		*
		*@param soruce $query sql语句通过mysql_query执行出来的资源
		*@return array 返回指定行的指定字段的值
		**/
		function findResult($query,$row=0,$field=0){
			$rs=mysqli_result($query,$row,$field);			
			return $rs;
		}
		
		/**
		*添加
		*
		*@param string $table 表名 
		*@param array $arr 添加数组（包含字段和值的一维数组）
		*
		**/
		function insert($con,$table,$arr){
			//$sql = "insert into 表名(多个字段,逗号隔开) values(多个值,逗号隔开)";
			foreach($arr as $key=>$value){//foreach循环数组
				$value = mysqli_real_escape_string($con,$value);
				$keyArr[]="`".$key."`";//把$arr数组当中的键名保存在$keyArr当中
				$valueArr[]="'".$value."'";//把$arr数组当中的键值保存在$valueArr当中,因为值多位字符串，而sql语句里面insert当中如果值是字符串的话要加单引号，所以这个地方要加上单引号
			}
			$keys = implode(",",$keyArr);//implode函数是把数组组合成字符串 implode(分隔符,数组)；
			$values = implode(",",$valueArr);
			$sql = "insert into ".$table."(".$keys.") values(".$values.")";
			$this->query($sql);
			return mysqli_insert_id($con);
		}
		
		/**
		*修改
		*
		*@param string $table 表名
		*@param array $arr 修改数组（包含字段和值的一维数组）
		*@param string $where 条件
		**/
		function update($con,$table,$arr,$where){
			//update 表名 set 字段=字段值 where ……
			foreach($arr as $key=>$value){
				$value = mysqli_real_escape_string($con,$value);
				$keyAndvalueArr[]="`".$key."`='".$value."'";//把$arr数组当中的键名保存在$keyArr当中
			}
			$keyAndvalueArr = implode(",",$keyAndvalueArr);
			$sql = "update ".$table." set ".$keyAndvalueArr." where ".$where;
			$this->query($con,$sql);
		}
		
		/**
		*删除
		*
		*@param string $table 表名
		*@param string $where 条件
		**/
		function del($table,$where){
			$sql = "delete from ".$table." where ".$where;
			$this->query($sql);
		}
	}
?>