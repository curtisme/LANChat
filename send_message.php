<?php
try {
	$DSN = "firebird:dbname=LANChat.fdb";
	$DB = new PDO($DSN, 'sysdba', 'masterke');
	$DB->query("insert into chat_log values('" .
		$_POST["name"] ."','".
		$_POST["message"] ."','".
		$_POST["time"] ."')");
}
catch (Exception $e) {
	echo $e->getMessage();
}
?>
