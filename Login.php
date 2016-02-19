<?php
	session_start();
	include("file:///wamp/www/AKPsi-Attendance/extra/body_gen_functions.php");
	include("file:///wamp/www/AKPsi-Attendance/extra/data_grab.php");

	$message = login_start(); // Gets login procedure, and also returns value that comes out of login function
	head();
?>

<header class="bgimage">
	<div class="Header container-fluid">
		<h1> AKPsi-Attendance </h1>
	</div>
</header>

<?php nav_login(); ?>

<div class="container-fluid">
<div class="row">
	<div class="col-xs-3">
		<h1> Login </h1>
		<form id="Download1" action="Login.php" method="post">
			Username: <input id="Download_Code" type="text" name="username" value="">  </br></br>
			Password: <input id="Download_Code" type="password" name="password" value=""> </br></br>
			<input id="Download_File" type="submit" name="submit" value="Login">
		</form>
	</div>
	<div class="col-xs-3">
		<p></br><?php echo $message ?></p>
	</div>
</div>
</div>
		
<div class="row">
<div id="side" class="col-md-2">
</div>



</div>

<?php footer(); ?>

</body>
</html>


<!-- Thing used for bottom navigation bar 
<div class="navbar navbar-default navbar-fixed-bottom">
	<div class="container">
		<p class="navbar-text pull-left"> Site dadada </p> 
	</div>
</div>
-->
