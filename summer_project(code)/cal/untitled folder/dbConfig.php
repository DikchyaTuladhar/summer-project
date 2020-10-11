<?php
//db details
function createConnection(){
return mysqli_connect('localhost','root', '', 'partyvenue_book');

// $dbHost = 'localhost';
// $dbUsername = 'root';
// $dbPassword = '';
// $dbName = 'partyvenue_book';

// //Connect and select the database
// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if ($db->connect_error) {
//     die("Connection failed: " . $db->connect_error);
// }
}
?>