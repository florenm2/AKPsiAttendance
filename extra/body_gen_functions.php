<?php

// Functions meant to generate html text

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
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Committee Information <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AKPsi-Attendance/Committees/Investment.php">Investment</a></li>
            <li><a href="#">Professional Development</a></li>
            <li><a href="#">Brotherhood</a></li>
            <li><a href="#">Philanthropy</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Consulting</a></li>
            <li><a href="#">Sustainability</a></li>	
            <li><a href="#">Etc.</a></li>
          </ul>
        <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Committee Involvement <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AKPsi-Attendance/Committees/Professional-Development/Member.php">Professional Development</a></li>
            <li><a href-"#">Investment</a></li>
            <li><a href="#">Consulting</a></li>
            <li><a href="#">Fundraising</a></li>
          </ul>
        <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Committee Management <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AKPsi-Attendance/Committees/Fundraising/Committee-Head.php">Fundraising</a></li>
		  </ul>
		<li><a href="/AKPsi-Attendance/News.php"> News <span class="sr-only">(current)</span></a></li>
		<li><a href="/AKPsi-Attendance/Profile.php">Profile</a></li>
		<li><a href="/AKPsi-Attendance/Messages.php">Messages</a></li>
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

// Javascript Functions
// Specific Page Functions
	function investment_info() {
$text = <<<TEXT
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("crashCourseEvent")) {
				bootbox.alert("This is info about the stock crash course!");
			} else if (($(this)).hasClass("stockPitch")) {
				bootbox.alert("This is info about the stock pitch!");
			} else if (($(this)).hasClass("initialPitchRole")) {
				bootbox.alert("This is info about the initial stock pitch role!");
			} else if (($(this)).hasClass("sectorRole")) {
				bootbox.alert("This is info about the sector research role!");
			}
        });
TEXT;
echo $text;
	}

	function member_professional_info() {
$text = <<<TEXT
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("springIce")) {
				bootbox.alert("This is info about spring ice!");
			} else if (($(this)).hasClass("infoNight")) {
				bootbox.alert("This is info about Info Night!");
			} else if (($(this)).hasClass("anotherEventRole")) {
				bootbox.alert("This is info about the networking event coordinator role!");
			} else if (($(this)).hasClass("springIceRole")) {
				bootbox.alert("This is info about the spring ice role!");
			}
        });				
TEXT;
echo $text;
	}

	function head_fundraising_info() {
$text = <<<TEXT
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("requestHelp")) {
				bootbox.alert("The position has now been made public to apply for");
			}
        });
TEXT;
echo $text;
	}

	function news() {
$text = <<<TEXT
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("crashCourseEvent")) {
				bootbox.alert("This is info about the stock crash course!");
            } else if (($(this)).hasClass("springIce")) {
				bootbox.alert("This is info about spring ice!");
			} else if (($(this)).hasClass("anotherEvent")) {
				bootbox.alert("This is info about another event!");
			} else if (($(this)).hasClass("greenBeerDayRole")) {
				bootbox.alert("This is info about the green beer day shirt designer role!");
            } else if (($(this)).hasClass("businessIdea1")) {
				bootbox.alert("I need help building a business idea, send me a message if your interested!");
            } else if (($(this)).hasClass("requestSent")) {
				bootbox.alert("Your message has been sent!");
			}
        });
TEXT;
echo $text;
	}
	
//General Input Fucntions
	function show_subitem() {
$text = <<<TEXT
		$(document).ready(function () {
			var subitem = $(".subitem");
			$('.item').on("click", "li", function () {
				subitem.hide();
				$(".subitem", this).show();
			});
		});
TEXT;
echo $text;
	}
	
	function send_text($title, $alert, $class) {
$text = <<<TEXT
		$(document).on("click", $class, function(e) {
			bootbox.prompt({
				title: $title,
				value: "Type here",
				callback: function(result) {               
					if (result === null) {                    	  
					} else {
						bootbox.alert($alert);                          
					}
				}
			});
		});
TEXT;
echo $text;
	}
// Functions meant to run certain parts of websites

// Generates Code
 	function Generate_Code() {
		$abc = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "V", "W", "X", "Y", "Z");
		$word = $abc[rand(0, 24)];
		for ($i = 1; $i <= 15; $i++) {
			$word .= $abc[rand(0, 24)];
		}
		return $word;
	}

?>