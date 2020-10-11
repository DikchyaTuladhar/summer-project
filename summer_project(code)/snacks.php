<?php
session_start();
$valid=0;

$phone=$_SESSION['phone'];
$buff=$_POST["buff"];
$chicken=$_POST["chicken"];
$fish=$_POST["fish"];
// $vge1=$_POST["veg"];
// $veg2=$_POST["veg"];
// $veg3=$_POST["veg"];
// $veg4=$_POST["veg"];
$mutton=$_POST["mutton"];
$pork=$_POST["pork"];
$cheese=$_POST["cheese"];
$paneer=$_POST["paneer"];
$soup=$_POST["soup"];

if($valid == 0){
	$con=mysqli_connect("localhost","root","","partyvenue_book");
    if(!$con){
        die("connection fail:".mysqli_connect_error);
    }
    // $insert="INSERT INTO snacks(buff,chicken,fish,veg_1,veg_2,veg_3,veg_4,mutton,pork,cheese,paneer,soup) values('$buff','$chicken','$fish','$veg1','$veg2','$veg3','$veg4','$mutton','$pork','$cheese','$paneer','$soup') where phone_s='$phone'";
    $sql="UPDATE snacks SET buff = '$buff' , chicken='$chicken' , fish='$fish' , mutton='$mutton' , pork='$pork' , cheese='$cheese' , paneer='$paneer' , soup='$soup' WHERE phone_s = '$phone'";
    if(mysqli_query($con, $sql)){
        echo "<script>alert('order Successful')</script>";
        header("location:dinner_order_form.php");
    }else{
         echo "<script>alert('order  Unsuccessful')</script>".mysqli_error($con);
        mysqli_close($con);
        }
}else{

    include("snack_order_form.php");
}

?>