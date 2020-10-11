<?php
session_start();

$phone=$_SESSION['phone'];

$con=mysqli_connect("localhost","root","","partyvenue_book");
    if(!$con){
        die("connection fail:".mysqli_connect_error);
    }
    // $sql="INSERT INTO booking(hall) values('$hall') WHERE phone_b='$phone'";
    $sql="UPDATE booking SET booking_date = '2019-12-08' WHERE phone_b = '$phone'";
    if(mysqli_query($con, $sql)){
        echo "<script>alert('Register Successful')</script>";
        header("location:halls.html");
    }else{
         echo "<script>alert('Register Unsuccessful')</script>".mysqli_error($con);
        mysqli_close($con);
         // header("halls.html");
        }

?>