<?php
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
	
	$sql = "select * from tbl_bd ORDER BY updated_at ASC";
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

