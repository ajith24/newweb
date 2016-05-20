<?php 

require 'dbconnect.php';

$response =array();
$responseJson = array();

$sql = "select * from tbl_bd where (DATE_FORMAT(bdate, '%m-%d') = DATE_FORMAT('".date('Y-m-d')."', '%m-%d')) ORDER BY updated_at ASC";

$result = $conn->query($sql);

$i = 0;
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$res = array();
		$res['name'] = $row['name'];
		$res['bdate'] = $row['bdate'];
		$res['adate'] = $row['adate'];
		$res['imgloc'] = $row['imgloc'];
		$res['createdBy'] = $row['created_by'];
		$responseJson ['res'.$i++] = $res; 
	}
} else {
	$responseJson['msg'] = "null";
}
print_r(json_encode($responseJson));