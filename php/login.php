<?php
$user = $_GET['user'];
$pass = $_GET['pass'];
$toRet = array(
	"stat" => "OK",
	"user" => "$user"
);
echo json_encode($toRet);
?>