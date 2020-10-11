<?php
include 'dbConfig.php';

function getBooking(){
	$connection = createConnection();
	$data = array();
	$query = " SELECT booking_date from booking ";
	$result = mysqli_query($connection, $query);
	$i = 0;
	if($result){
		while($row = mysqli_fetch_array($result)){
			$date = $row['booking_date'];
		}
		$data = json_encode(array("response"=>"success", "booking"=>$date));
	}
	echo $data;

	mysqli_close($connection);
}