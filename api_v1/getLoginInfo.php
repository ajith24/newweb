<?php

require 'dbconnect.php';

$responseJson = array();
$method = $_SERVER['REQUEST_METHOD'];

$username = $_GET['username'];
$password = $_GET['password'];
//$response = getallheaders();
$today   = date("Y-m-d");
$sql = "SELECT * FROM tbl_login WHERE username ='".$username."' AND password='".md5($password)."' LIMIT 1";
$res = $conn->query($sql);
if($res->num_rows >= 1 ) {
	$responseJson['desc'] = "true";
}
else{
	$responseJson['desc'] = "false";
}
echo json_encode($responseJson);