<?php
  $f_name=$_POST['f_name'];
  $m_name=$_POST['m_name'];
  $l_name=$_POST['l_name'];
  //$gender=$_POST['gender'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $con=mysqli_connect("localhost","root","","partyvenue_book");
  if(!$con){
    die("connection fail:".mysqli_connect_error());
  }
  $sql= "INSERT INTO customer (first_name,middle_name,last_name,phone_no,email,address) VALUES('$f_name','$m_name','$l_name','$'phone','$email','$address')";
    if(mysqli_query($con,$sql)){
      header("locaton:front_page.html");
    }
    else{
      echo "error on insert record:".mysqli_error($con);
    }
?>