<?php
session_start();

$f_name =$_POST["f_name"];
// $m_name =$_POST["m_name"];
$l_name =$_POST["l_name"];
$email =$_POST["email"];
$phone =$_POST["phone"];
$address =$_POST["address"];

$valid=0;

$run="/^[a-z A-Z]{0,20}$/";
$run1="/^[a-z A-Z]{3,20}$/";
$run2="/^[0-9]{7,10}$/";
$run3="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/";
$run5="/^[0-9]{5,10}$/";
$run6="/^[#.0-9a-zA-Z\s,-]{6,25}$/";
$run7="/(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{6,16})$/";

if(!preg_match($run1, $f_name)){
    $valid==1;
    echo"<haed><script type='text/javascript'>alert('Name was invalid while data processin. Enter a vaild First name')</script></head>";
    include("form.html");
    exit();
}
// if(!preg_match($run, $m_name)){
//     $valid==1;
//     echo"<haed><script type='text/javascript'>alert('Name was invalid while data processin. Enter a valid Middle name')</script></head>";
//     include("form.html");
//     exit();
// }
if(!preg_match($run1, $l_name)){
    $valid==1;
    echo"<haed><script type='text/javascript'>alert('Name was invalid while data processin. Enter a vaild Last name')</script></head>";
    include("form.html");
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //$emailErr = "Invalid email format";
        echo"<haed><script type='text/javascript'>alert('Enter valid Email')</script></head>";
        include("form.html");
        exit();
    }

if (!preg_match($run6, $address)) {
    $valid==1;
    echo"<haed><script type='text/javascript'>alert('Address was invalid while data processin')</script></head>";
    include("form.html");
    exit();
}
if (!preg_match($run2, $phone)) {
    $valid==1;
    echo"<haed><script type='text/javascript'>alert('Phone no was invalid while data processin')</script></head>";
    include("form.html");
    exit();
}

if ($valid==0) {
    $con=mysqli_connect("localhost","root","","partyvenue_book");
    if(!$con){
        die("connection fail:".mysqli_connect_error);
    }
   
    $insert="INSERT INTO customer(first_name,last_name,address,phone,email) values('$f_name','$l_name','$address','$phone','$email')";
    $insert1="INSERT INTO booking(phone_b) values('$phone')";
    $insert2="INSERT INTO dinner(phone_d) values('$phone')";
    $insert3="INSERT INTO snacks(phone_s) values('$phone')";
    $insert4="INSERT INTO veg_snacks(phone_no) values('$phone')";
    if(mysqli_query($con, $insert)&&mysqli_query($con, $insert1)&&mysqli_query($con,$insert2)&&mysqli_query($con,$insert3)&&mysqli_query($con, $insert4)){
        echo "<script>alert('Register Successful')</script>";
        header("snack_order_form");
        // $_SESSION['email']=$email;
        $_SESSION['phone']=$phone;
        header("location:cal_aug.html");
    }else{
         echo "<script>alert('Register Unsuccessful')</script>".mysqli_error($con);
        mysqli_close($con);
    }
}else{

    include("form.html");
 }
?>