<?php
try {
	$DB = new PDO("sqlite:".__DIR__."/lanchat.db", null, null, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
	$res = $DB->query("select * from chat_log where post_time > '". $_POST["time"] ."' and name <> '".$_POST["name"] ."' order by post_time")->fetchAll();
	echo json_encode($res);
}
catch (Exception $e) {
	echo $e->getMessage() . "\n";
}
?>
