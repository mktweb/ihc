<?php
$filename = "database.txt";
$handle = fopen($filename, "w");

$prestador = $_POST['prestador'];
if($_POST['service'] != "")
	$service = $_POST['service'];
else
	$new_service = $_POST['new_service'];
$username = $_POST['username'];
$password = $_POST['password'];
$link = $_POST['link'];
$owner = $_POST['owner'];

$data = $prestador.";".$service.";".$username.";".$password.";".$link.";".$owner;

fwrite($handle, $data);

fclose($handle);
