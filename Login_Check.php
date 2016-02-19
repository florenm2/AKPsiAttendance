<?php
	session_start();
	include("file:///wamp/www/AKPsi-Attendance/extra/body_gen_functions.php");
	include("file:///wamp/www/AKPsi-Attendance/extra/data_grab.php");

	$connection = connect();
	login_grab($connection); 	
	close($connection);
?>