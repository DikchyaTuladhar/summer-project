<?php
//db detail
$dbhost = 'localhost';
$dbusername = 'root';
$dbname='partyvenue_book'

//connetion and select
$db = new mysqli($dbhost, $dbusername, $dbname);
if($db->connect_error){
	die("connection failed" , $db->connect_error)
}
?>
