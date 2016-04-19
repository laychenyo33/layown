<?php
include_once("libs/libs-system.php");
$new_content = new CONTENT;
class CONTENT{

	function CONTENT(){
		$this->content_list();
	}

	function content_list(){
		global $db;
		$sql = "select * from demo_mailbox where ma_id > 0";
		$result = $db->query($sql);
		$row = @mysql_fetch_array($result);
	}
}

?>