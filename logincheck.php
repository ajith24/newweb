<?php
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login'] == 1)
		header('Location: index.php');
}
require 'dbconnect.php';
if(isset($_POST['submit'])) {
	
	$username = $_POST['txtmail'];
	$password = $_POST['txtpass'];
	$sql = "SELECT * FROM tbl_login WHERE username ='".$username."' AND password='".md5($password)."' LIMIT 1";
	$res = $conn->query($sql);
	if($res->num_rows == 1 ) {
		$_SESSION["id"] = 1;
		$_SESSION["login"] = 1;
		header('Location: index.php');
	} else {
		$_SESSION["login"] = 0;
		$msg = "Invalid login information.";
	}
} 