<?php
	session_start();
	include("file:///wamp/www/AKPsi-Attendance/extra/body_gen_functions.php");
	include("file:///wamp/www/AKPsi-Attendance/extra/data_insert.php");
	
	head();

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
		<h1> Make Table </h1>
		<form id="Download1" onsubmit=<?php $apples = table_add(); ?> method="post">
			Table Name <input type="text" name="tableName" value="">  </br>
			Field1 <input type="text" name="field1" value=""> </br>
			Field2 <input type="text" name="field2" value=""> </br>
			Field3 <input type="text" name="field3" value=""> </br>
			Field4 <input type="text" name="field4" value=""> </br>
			Field5 <input type="text" name="field5" value=""> </br>
			Field6 <input type="text" name="field6" value=""> </br>
			Field7 <input type="text" name="field7" value=""> </br>
			Field8 <input type="text" name="field8" value=""> </br>
			Field9 <input type="text" name="field9" value=""> </br>
			<br>
			<input id="Download_File" type="submit" name="table" value="Add Data"> <?php if (isset($_SESSION['table_add'])) { echo $_SESSION['table_add']; } ?>
		</form>
	</br>
	</div>
	<div class="col-xs-6">
		<h1> Add General Event </h1>
		<form id="Download1" action="Data_Processing.php" method="post">
			Event Name <input type="text" name="eventName" value=""> </br>
			Event Date <input type="text" name="eventDate" value=""> </br>
			Event Description <textarea class="submissionfield"  name="eventDescription"> Write your description here! </textarea> </br>
			<br>
			<input id="Download_File" type="submit" name="generalEvent" value="Add Data">
		</form>
	</br>
	</div>
	<div class="col-xs-6">
		<h1> Add User </h1>
		<form id="Download1" action="Data_Processing.php" method="post">
			Username <input type="text" name="username" value="">  </br>
			Password <input type="text" name="password" value=""> </br>
			<br>
			<input id="Download_File" type="submit" name="submit" value="Add Data">
		</form>
	</br>
	</div>
	<div class="col-xs-6">
		<h1> Update User Information </h1>
		<button> Add Required Event </button>
		<button> Add Extra Credit Event </button>
		<form id="Download1" action="Data_Processing.php" method="post">
			<br>
			Philanthropy Hours <input type="text" name="philanthropyHours" value="">  </br>
			Info Night <input type="text" name="infoNight" value=""> </br>
			First Round <input type="text" name="firstRound" value="">  </br>
			Voting Chapter <input type="text" name="votingChapter" value=""> </br>
			Induction Ceremony <input type="text" name="induction" value="">  </br>
			Mid Court <input type="text" name="midCourt" value=""> </br>
			Honor Court <input type="text" name="honorCourt" value="">  </br>
			<br>
			<input id="Download_File" type="submit" name="submit" value="Add Data">
		</form>
		</br>
	</div>
	</br>
</div>
</div>


<?php footer(); ?>
</body>
</html>



