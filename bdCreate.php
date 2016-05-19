<?php

require 'dbconnect.php';

$response =array();
$responseJson = array();
$method = $_SERVER['REQUEST_METHOD'];

$response = getallheaders();

$from = new DateTime($response['bdate']);
$to   = new DateTime('today');
$age = $from->diff($to)->y;

$sql = "INSERT INTO tbl_bd (name,bdate,age,created_by)
VALUES ('".$response['name'] ."','". $response['bdate']."',$age,'".$response['created_by']."')";

if ($conn->query($sql) === TRUE) {
	$responseJson['msg'] = "New record created successfully";
} else {
	$responseJson['msg'] = "Error: ". $conn->error;
}

$conn->close(); 
print_r($responseJson);