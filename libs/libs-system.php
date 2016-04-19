<?php
$bak_conf["db_host"] = "localhost";
$bak_conf["db_name"] = "laydatabase";
$bak_conf["db_user"] = "root";
$bak_conf["db_password"] = "edit";
// 資料庫的預設值
include_once("libs/libs-db.php");
$db = new DB($bak_conf["db_host"],$bak_conf["db_name"],$bak_conf["db_user"],$bak_conf["db_password"]);
?>