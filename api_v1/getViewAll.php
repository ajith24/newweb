<?php

require 'dbconnect.php';

$response =array();
$responseJson = array();
$method = $_SERVER['REQUEST_METHOD'];

//$response = getallheaders();
$today   = date("Y-m-d");
$sql = "select * from tbl_bd ORDER BY updated_at ASC";

$result = $conn->query($sql);



$i = 0;
if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {
		$res = array();
		$res['name'] = $row['name'];
		$res['bdate'] = $row['bdate'];
		$res['adate'] = $row['adate'];
		$res['createdBy'] = $row['created_by'];
		$responseJson ['res'.$i++] = $res; 
	}
} else {
	$responseJson['error'] = "0 results";
}
print_r(json_encode($responseJson));