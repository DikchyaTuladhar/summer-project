<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css_doc\button.css">
<link rel="stylesheet" href="css_doc\card.css">
<link rel="stylesheet" href="css_doc\navigation_bar.css">
<link rel="stylesheet" href="css_doc\font.css">
<link rel="stylesheet" href="css_doc\padding.css">
<link rel="stylesheet" href="css_doc\three_column_layout.css">

<style>
/*icon*/
#home {
  width: 25px;
  height: 25px;
  background: url(images\home_icon) 0 0;
}
#fb {
  width: 25px;
  height: 25px;
  background: url(images\fb_icon) 0 0;
}
#insta {
  width: 25px;
  height: 25px;
  background: url(images\insta_icon) 0 0;
}
</style>
</head>
<body background="images\back_2.jpg">
<ul>
  <li><a class="active" href="front_page.html"><img id="home" src="images\home_icon.png" width="1" height="1"></a></li>
  <li><a href="logout.php">Log out</a></li>
  
</ul>
</body>
</html>
<?php
session_start();

$phone= $_SESSION['phone'];

$con=mysqli_connect("localhost","root","","partyvenue_book");
    if(!$con){
      die("connection fail:".mysqli_connect_error());
    }
    else{
    	echo "<h3>Information</h3>";
    	$sql="SELECT * FROM customer where phone='$phone'";
    	$result=mysqli_query($con,$sql);
    	if(mysqli_num_rows($result)>0){
      		echo "<table>";
      		while($rows=mysqli_fetch_assoc($result)){
        	echo " <tr> <td> First Name:</td>";
        	echo "<td>".$rows["first_name"]."</td></tr>";
        	echo "<tr><td>Last Name:</td><td>".$rows["last_name"]."</td></tr>";
        	echo "<tr><td> Address:</td><td>".$rows["address"]."</td></tr>";
        	echo "<tr><td> Email:</td><td>".$rows["email"]."</td></tr>";
        	echo "<tr><td>Phone no:</td><td>".$rows["phone"]."</td></tr>";
        	echo "</table>";
      		}
      	}
      	echo "<br><br>";
      	// $sql1="SELECT * FROM booking WHERE phone_b='$phone'";
      	// $result1=mysqli_query($con,$sql1);
      	// if(mysqli_num_rows($result1)>0){
      	// 	echo "<table>";
      	// while($rows=mysqli_fetch_assoc($result)){
      	// 	echo "<tr><td>Hall:</td><td>".$rows["hall"]."</td></tr>";
      	// 	echo "<tr><td>Booking date:</td><td>".$rows["date"]."</td></tr>";
      	// 	echo "</table>"
      	// }
      	echo "<h3>Snacks Menu</h3>";
      	$sql2="SELECT * From snacks WHERE phone_s='$phone'";
      	$result2=mysqli_query($con,$sql2);
    	if(mysqli_num_rows($result2)>0){
      		echo "<table>";
      		while($rows=mysqli_fetch_assoc($result2)){
      			echo "<tr><td>Buff:</td><td>".$rows["buff"]."</td></tr>";
      			echo "<tr><td>Chicken:</td><td>".$rows["chicken"]."</td></tr>";
      			echo "<tr><td>Fish:</td><td>".$rows["fish"]."</td></tr>";
      			echo "<tr><td>Mutton:</td><td>".$rows["pork"]."</td></tr>";
      			echo "<tr><td>Cheese:</td><td>".$rows["cheese"]."</td></tr>";
      			echo "<tr><td>Paneer:</td><td>".$rows["paneer"]."</td></tr>";
      			echo "<tr><td>Soup:</td>".$rows["soup"]."</td></tr>";
      		}
      		echo "</table>";
      	}
      	echo "<br><br>";
      	echo "<h3>Dinner Menu</h3>";
      	$sql3="SELECT * From dinner WHERE phone_d='$phone'";
      	$result3=mysqli_query($con,$sql3);
    	if(mysqli_num_rows($result3)>0){
      		echo "<table>";
      		while($rows=mysqli_fetch_assoc($result3)){
      			echo "<tr><td>Rice:</td><td>".$rows["rice"]."</td></tr>";
      			echo "<tr><td>Dal:</td><td>".$rows["dal"]."</td></tr>";
      			echo "<tr><td>Noddles or Bread:</td><td>".$rows["noddles_bread"]."</td></tr>";
      			echo "<tr><td>Mutton:</td><td>".$rows["mutton"]."</td></tr>";
      			echo "<tr><td>Prawn Fish:</td><td>".$rows["prawn_fish"]."</td></tr>";
      			echo"<tr><td>Chicken:</td><td>".$rows["chicken"]."</td></tr>";
      			echo "<tr><td>Fish:</td><td>".$rows["fish"]."</td></tr>";
      			echo "<tr><td>Vegetables:</td><td>".$rows["veg_1"]."</td></tr>";
      			echo "<tr><td>Pork:</td><td>".$rows["pork"]."</td></tr>";
      			echo "<tr><td>Paneer:</td><td>".$rows["paniree"]."</td></tr>";
      			echo "<tr><td>Pickle:</td><td>".$rows["pickle_1"]."</td></tr>";
      			echo "<tr><td>Salad:</td><td>".$rows["salad"]."</td></tr>";
      			echo "<tr><td>Dessert:</td><td>".$rows["dessert_1"]."</td></tr>";
      		}
      	echo "</table>";
      	}
    }
?>