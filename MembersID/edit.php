<?php
	include('conn.php');
	session_start();

	$id=$_GET['id'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	$conn->query("update member set firstname='$firstname', lastname='$lastname' where memberid='$id'");
	$_SESSION['msg']="Member Updated Succesfully";
	header('location:index.php');

?>