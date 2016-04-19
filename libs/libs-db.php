<?php
class DB{
	var $db_contact;
	var $query_result;
	function DB($db_host,$db_name,$db_user,$db_password){
		$this->db_contact = mysql_connect($db_host,$db_user,$db_password);
		$this->db_link_miss($this->db_contact);
		mysql_query("SET NAMES 'utf8'");
		$this->db_select_db($db_name);
	}

	function db_link_miss($check_error){
		if(!($check_error)){
			die("連結失敗");
		}
	}
	
	function db_select_db($db_name){
		if(!$db_name){
			$this->close();
		}else{
			mysql_query("SET NAMES 'utf8'");
			return $db_select = @mysql_select_db($db_name);
		}
	}

	function query($query){
		$this->query_result = @mysql_query($query, $this->db_contact);
		return $this->query_result;
	}

	function close(){	
		@mysql_close($this->db_contact);
	}
}
?>