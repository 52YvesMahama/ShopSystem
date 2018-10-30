<?php
	include('conn.php');
	session_start();
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	$conn->query("insert into member (firstname, lastname) values ('$firstname', '$lastname')");
	$_SESSION['msg']="Member Added Succesfully";
	header('location:index.php');

?>