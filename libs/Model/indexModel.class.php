<?php
	class indexModel{
		public function get()
		 {		 
			$result = DB::$db->query("SELECT * FROM temperature");
			$data = DB::$db->findAll($result);			
			return $data['0']['temperature'];
		 } 
	}
?>