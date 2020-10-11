<?php
session_start();

	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$con=mysqli_connect("localhost","root","","partyvenue_book");
	if(!$con){
		die("connection fail:".mysqli_connect_error);
	}
	$sqluser="SELECT * FROM customer WHERE email='".$email."' AND phone='".$phone."'";
	$resultuser=mysqli_query($con,$sqluser);
	if(mysqli_num_rows($resultuser)!=0){
		// $_SESSION['email']=$email;
		$_SESSION['phone']=$phone;
		header("location:customer_page.php");
		exit();
	}
	$sqladmin="SELECT * FROM admin WHERE user_id='".$email."' AND password='".$phone."'";
	$resultadmin=mysqli_query($con,$sqladmin);
	if(mysqli_num_rows($resultadmin)!=0){
		// $_SESSION['email']=$email;
		// $_SESSION['phone']=$phone;
		header("location:admin_page.php");
		exit();
	}
?>