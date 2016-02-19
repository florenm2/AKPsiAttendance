<?php
	session_start();
	include("file:///wamp/www/AKPsi-Attendance/extra/body_gen_functions.php");
	include("file:///wamp/www/AKPsi-Attendance/extra/data_insert.php");
	head();
//	$_POST["password"]
?>
<body>

<header class="bgimage">
	<div class="Header container-fluid">
		<h1> Admin </h1>
	</div>
</header>

<div class="container-fluid">
<div class="row">
	<div class="col-xs-6">
		<h1> Add Committee Event1 </h1>
		<form id="Download1" action="Data_Processing.php" method="post">
			Table <input id="Download_Code" type="text" name="username" value="">  </br>
			Password: <input id="Download_Code" type="password" name="password" value=""> </br>
			<input id="Download_File" type="submit" name="submit" value="Add Data">
		</form>
	</br>
	</div>
	<div class="col-xs-6">
		<h1> Add Committee Event2 </h1>
		<form id="Download1" action="Data_Processing.php" method="post">
			Table <input id="Download_Code" type="text" name="username" value="">  </br>
			Password: <input id="Download_Code" type="password" name="password" value=""> </br>
			<input id="Download_File" type="submit" name="submit" value="Add Data">
		</form>
	</br>
	</div>
	<div class="col-xs-6">
		<h1> Add Committee Event3 </h1>
		<form id="Download1" action="Data_Processing.php" method="post">
			Table <input id="Download_Code" type="text" name="username" value="">  </br>
			Password: <input id="Download_Code" type="password" name="password" value=""> </br>
			<input id="Download_File" type="submit" name="submit" value="Add Data">
		</form>
	</br>
	</div>
</div>
</div>


<?php footer(); ?>
</body>
</html>



