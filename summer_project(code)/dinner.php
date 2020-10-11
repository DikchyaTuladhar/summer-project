<?php
session_start();
$vaild=0;

$phone=$_SESSION['phone'];
$rice=$_POST["rice"];
$dal=$_POST["dal"];
$chow=$_POST["chow"];
$mutton=$_POST["mutton"];
$prawn=$_POST["prawn"];
$chicken=$_POST["chicken"];
$fish=$_POST["fish"];
$veg1=$_POST["veg"];
$pork=$_POST["pork"];
$paneer=$_POST["paneer"];
$p1=$_POST["pickle"];
$salad=$_POST["salad"];
$d1=$_POST["dessert"];




	$con=mysqli_connect("localhost","root","","partyvenue_book");
    if(!$con){
        die("connection fail:".mysqli_connect_error);
    }
    // $insert="INSERT INTO dinner(rice,dal,noddles_bread,mutton,prawn_fish,chicken,fish,veg_1,pork,paniree,pickle_1,salad,dessert_1) values('$rice','$dal','$chow','$mutton','$prawn','$chicken','$fish','$veg1','$pork','$paneer','$p1','$salad','$d1') where phone_d='$phone'";
    $sql="UPDATE dinner SET rice = '$rice' , dal='$dal' , noddles_bread='$chow' , mutton='$mutton' , prawn_fish='$prawn' , chicken='$chicken' , fish='$fish' , veg_1='$veg1' , pork='$pork' , paniree='$paneer' , pickle_1='$p1' , salad='$salad' , dessert_1='$d1' WHERE phone_d = '$phone'";
    if(mysqli_query($con, $sql)){
        echo "<script>alert('Register Successful')</script>";
        header("location:front_page.html");
    }else{
         echo "<script>alert('Register Unsuccessful')</script>".mysqli_error($con);
        mysqli_close($con);
        // header("front_page.html");
        }
?>