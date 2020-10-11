<?php
session_start();
?>

<!-- <!DOCTYPE html>
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
  <li><a href="#contacts">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<center> -->
  <?php
    session_start();
    $con=mysqli_connect("localhost","root","","partyvenue_book");
    if(!$con){
      die("connection fail:".mysqli_connect_error());
    }
    $sql="SELECT * FROM customer where ";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
      echo "<div class='card'>";
      while($rows=mysqli_fetch_assoc($result)){
        echo " <div class='container'>
            <img src='logo.png' width='50px' height='50px' align='left' valign='top'>";
        echo "<h3>".$rows["title"]."</h3>".$rows["post_date"]."</br>";
        echo "<p align='left'>".$rows['note']."</p></br>";
        echo "<hr></div>";
      }
      echo "</div>";
    }
  ?>  
