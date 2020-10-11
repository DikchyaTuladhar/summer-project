<?php
session_start();

$vaild=0;

$phone=$_SESSION['phone'];


	$con=mysqli_connect("localhost","root","","partyvenue_book");
    if(!$con){
        die("connection fail:".mysqli_connect_error);
    }
    // $sql="INSERT INTO booking(hall) values('$hall') WHERE phone_b='$phone'";
    $sql="UPDATE booking SET hall = '2' WHERE phone_b = '$phone'";
    if(mysqli_query($con, $sql)){
        echo "<script>alert('Register Successful')</script>";
        header("location:snack_order_form.php");
    }else{
         echo "<script>alert('Register Unsuccessful')</script>".mysqli_error($con);
        mysqli_close($con);
        // header("front_page.html");
        }

?>