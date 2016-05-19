<?php

//[inputEmail] => [inputBdyear] 


require 'dbconnect.php';

$fullName = $_POST['inputFirstName']." ".$_POST['inputLastName'];

$dob = $_POST['inputBdyear']."-".$_POST['inputBdMonth']."-".$_POST['inputBdDay'];

$doa = $_POST['inputAdYear']."-".$_POST['inputAdMonth']."-".$_POST['inputAdDay'];

/* $from = new DateTime($dob);
$to   = new DateTime('today');
$age = $from->diff($to)->y; */
if(isset($_FILES['fileToUpload'])){
	$errors= array();
	$file_name = $_FILES['fileToUpload']['name'];
	$file_size =$_FILES['fileToUpload']['size'];
	$file_tmp =$_FILES['fileToUpload']['tmp_name'];
	$file_type=$_FILES['fileToUpload']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));

	$expensions= array("jpeg","jpg","png");

	if(in_array($file_ext,$expensions)=== false){
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
	}

	if($file_size > 6097152){
		$errors[]='File size must be excately 2 MB';
	}
	$file_name = rand(1000,10000).$file_name;
	if(empty($errors) == true){
		move_uploaded_file($file_tmp,"images/profilePic/".$file_name);
		$imgpath = $file_name;
	}else{
		print_r($errors);
	}
}

$sql = "INSERT INTO tbl_bd (name,email_id,bdate,adate,imgloc,created_by)
VALUES ('".$fullName ."','". $_POST['inputEmail']."','". $dob."','".$doa."','". $imgpath."',1)";

if ($conn->query($sql) === TRUE) {
	$msg = "New record created successfully";
	header('Location: index.php');
} else {
	$msg = "Error: ". $conn->error;
}

$conn->close();