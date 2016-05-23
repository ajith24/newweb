<?php
session_start();
function getUserName($id){
	
	require 'dbconnect.php';
	
	$sql = "select * from tbl_login where slno = ".$id;
	
	$result = $conn->query($sql);
	
	
	$i = 0;
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$name = $row['name'];
	}else{
		$name = "Null";
	}
	$conn->close();
	return $name;
}

function getBdData(){
	require 'dbconnect.php';

	if($_SESSION["type"] == 1)
		$sql = "select * from tbl_bd ORDER BY updated_at ASC";
	else
		$sql = "select * from tbl_bd where created_by = ".$_SESSION["id"]." ORDER BY updated_at ASC";
	$result = $conn->query($sql);
	$i = 0;
	$res = array();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$i++;
			$res[$i] = $row;
		}
	}
	$conn->close();
	return $res;
}


function getUserData(){
	require 'dbconnect.php';
	
	$sql = "select * from tbl_login ORDER BY update_at ASC";
	$result = $conn->query($sql);
	$res = array();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$res[] = $row;
		}
	}
	$conn->close();
	return $res;
}