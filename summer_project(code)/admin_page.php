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

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
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
// session_start();

// $phone= $_SESSION['phone'];

$con=mysqli_connect("localhost","root","","partyvenue_book");
    if(!$con){
      die("connection fail:".mysqli_connect_error());
    }
    else{
    	echo "<h3>Information</h3>";
      $sql_3="SELECT * FROM customer where phone='4545669'";
      $result_3=mysqli_query($con,$sql_3);
      if(mysqli_num_rows($result_3)>0){
        echo"<div class='card'>";
          echo "<table>";
          while($rows=mysqli_fetch_assoc($result_3)){
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
        $sql1_3="SELECT * FROM booking WHERE phone_b='4545669'";
        $result1_3=mysqli_query($con,$sql1_3);
        if(mysqli_num_rows($result1_3)>0){
          echo "<table>";
        while($rows=mysqli_fetch_assoc($result1_3)){
          echo "<tr><td>Hall:</td><td>".$rows["hall"]."</td></tr>";
          echo "<tr><td>Booking date:</td><td>".$rows["booking_date"]."</td></tr>";
          echo "</table>";
        }}
        echo"<br><br>";
        echo "<h3>Snacks Menu</h3>";
        $sql2_3="SELECT * From snacks WHERE phone_s='4545669'";
        $result2_3=mysqli_query($con,$sql2_3);
      if(mysqli_num_rows($result2_3)>0){
          echo "<table>";
          while($rows=mysqli_fetch_assoc($result2_3)){
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
        $sql3_3="SELECT * From dinner where phone_d='4545669'";
        $result3_3=mysqli_query($con,$sql3_3);
      if(mysqli_num_rows($result3_3)>0){
          echo "<table>";
          while($rows=mysqli_fetch_assoc($result3_3)){
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
        echo "</table> </div>";
        }
      //another
    	$sql="SELECT * FROM customer where phone='4214456'";
    	$result=mysqli_query($con,$sql);
    	if(mysqli_num_rows($result)>0){
        echo"<div class='card'>";
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
      	$sql1="SELECT * FROM booking WHERE phone_b='4214456'";
      	$result1=mysqli_query($con,$sql1);
      	if(mysqli_num_rows($result1)>0){
      		echo "<table>";
      	while($rows=mysqli_fetch_assoc($result1)){
      		echo "<tr><td>Hall:</td><td>".$rows["hall"]."</td></tr>";
      		echo "<tr><td>Booking date:</td><td>".$rows["booking_date"]."</td></tr>";
      		echo "</table>";
      	}}
        echo"<br><br>";
      	echo "<h3>Snacks Menu</h3>";
        $sql2="SELECT * From snacks WHERE phone_s='4214456'";
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
      	$sql3="SELECT * From dinner where phone_d='4214456'";
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
      	echo "</table> </div>";
      	}
        //another
        $sql_2="SELECT * FROM customer where phone='4455687'";
      $result_2=mysqli_query($con,$sql_2);
      if(mysqli_num_rows($result_2)>0){
        echo"<div class='card'>";
          echo "<table>";
          while($rows=mysqli_fetch_assoc($result_2)){
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
        // $sql1_2="SELECT * FROM booking WHERE phone_b='4455687'";
        // $result1_2=mysqli_query($con,$sql1_2);
        // if(mysqli_num_rows($result1_2)>0){
        //   echo "<table>";
        // while($rows=mysqli_fetch_assoc($result1_2)){
        //   echo "<tr><td>Hall:</td><td>".$rows["hall"]."</td></tr>";
        //   echo "<tr><td>Booking date:</td><td>".$rows["date"]."</td></tr>";
        //   echo "</table>"
        // }
        echo "<h3>Snacks Menu</h3>";
        $sql2_2="SELECT * From snacks WHERE phone_s='4455687'";
        $result2_2=mysqli_query($con,$sql2_2);
      if(mysqli_num_rows($result2_2)>0){
          echo "<table>";
          while($rows=mysqli_fetch_assoc($result2_2)){
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
        $sql3_2="SELECT * From dinner where phone_d='4455687'";
        $result3_2=mysqli_query($con,$sql3);
      if(mysqli_num_rows($result3_2)>0){
          echo "<table>";
          while($rows=mysqli_fetch_assoc($result3_2)){
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
        echo "</table> </div>";
        }
    }
?>