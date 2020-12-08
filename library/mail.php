<?php
require_once 'config.php';
require_once 'database.php';
function send_email($data) {
	$to 	= $data['to'];
	$sub 	= $data['sub'];
	$msg 	= $data['msg'];
	$retval = mail ($to,$sub,$msg);
}
?>