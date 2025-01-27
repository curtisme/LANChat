<?php
try {
    $DB = new PDO("sqlite:".__DIR__."/lanchat.db");
	$DB->query("insert into chat_log values('" .
		$_POST["name"] ."','".
		$_POST["message"] ."','".
		$_POST["time"] ."')");
}
catch (Exception $e) {
	echo $e->getMessage();
}
?>
