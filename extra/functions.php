<?php
	// Validation functions
	function filled_in($name) {
		return ((isset($name)) && ($name !== "") && (strlen($name) <30));
	}
	function Generate_Code() {
		$abc = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "V", "W", "X", "Y", "Z");
		$word = $abc[rand(0, 24)];
		for ($i = 1; $i <= 15; $i++) {
			$word .= $abc[rand(0, 24)];
		}
		return $word;
	}

	function login() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
					header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				$message = "You need to type in text for your username and password.";
			}
		} else {
			$message = "";
		}
		if (isset($_GET['success'])) {
			 if ($_GET['success'] == "no") {
				$message = "The username and password combination were invalid.";
			}
		}
		return $message;
	}
	
	function head() {
$text = <<<TEXT

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/
	bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
TEXT;
		echo $text;
//	<script src="http://localhost:8080/AKPsi-Attendance/extra/bootbox.min.js"></script>
		}
	function footer() {
$text = <<<TEXT
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://localhost:8080/AKPsi-Attendance/js/script.js"></script>
<script src="http://localhost:8080/AKPsi-Attendance/extra/bootbox.min.js"></script>
TEXT;
	echo $text;
	}


	function nav() {
$text = <<<TEXT
<nav style="margin: 0;" class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Committee Events <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AKPsi-Attendance/Committees/Professional-Development/Member.php">Professional Development</a></li>
            <li><a href="#">Brotherhood</a></li>
            <li><a href="#">Philanthropy</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Investment</a></li>
            <li><a href="#">Consulting</a></li>
            <li><a href="#">Sustainability</a></li>	
            <li><a href="#">Etc.</a></li>
          </ul>
        <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Committee Management <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AKPsi-Attendance/Committees/Fundraising/Committee-Head.php">Finance</a></li>
		  </ul>
		<li><a href="/AKPsi-Attendance/Events.php">General Events <span class="sr-only">(current)</span></a></li>
		<li><a href="/AKPsi-Attendance/Profile.php">Profile</a></li>
        <li><a href="/AKPsi-Attendance/Login.php">Logout</a></li>
		</li>
		</ul>
	  
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
TEXT;
echo $text;
	}

	function nav_login() {
$text = <<<TEXT

	<nav style="margin: 0;" class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-header" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
        <li><a href="/AKPsi-Attendance/Login.php">Login</a></li>
		</li>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
TEXT;
echo $text;
	}
?>