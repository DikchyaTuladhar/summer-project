<?php
	session_start();
	session_destroy();

	header("location:front_page.html");
	exit();
?>