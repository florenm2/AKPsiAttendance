<?php

	// Server Open Functions (Basic)
	function connect() {
		$dbhost = "localhost";
		$dbuser = "akpsiperson1";
		$dbpass = "akpsiiscool";
		$dbname = "akpsi_database";
		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		// Testing connection success/failure
		if(mysqli_connect_errno()) {
			die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"); 
		}
		return $connection;
	}

	function close($connection) {
		mysqli_close($connection);
	}

	
	// Server -> Client Information Transfer Functions (data storage for a client session)
	// For login process 
	function login_grab($connection) {
		$table = "users";
		$username = $_GET['user'];
		$password = $_GET['pass'];
		$query = "SELECT * FROM {$table} WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";

		$result = mysqli_query($connection, $query); // True or false if query works and finds record
		if ($result && mysqli_affected_rows($connection) == 1) { 	// Tests if anything was found && if something was successfully changed with connection 
			session_start();
			$array = mysqli_fetch_array($result); // Gets all values needed from specific query according to name

			$_SESSION['logged'] = "Yes";
			$_SESSION['username'] = $array['username'];
			$_SESSION['hours'] = $array['hours'];
			header("Location: http://localhost:8080/AKPsi-Attendance/Profile.php");
		} else {
			header("Location: http://localhost:8080/AKPsi-Attendance/Login.php?success=no");
		}	
	}

	// Login Process
	
	
	
	
	// Member Participation
	
	
	
	
	// Member Committee Involvement

	
	
	
	//
	
	function grab($connection, $query) {
		
		$result = mysqli_query($connection, $query); // True or false if query works and finds record
		if ($result && mysqli_affected_rows($connection) == 1) { 	// Tests if anything was found && if something was successfully changed with connection 
			$array = mysqli_fetch_array($result); // Gets all values needed from specific query according to name

			$_SESSION['logged'] = "Yes";
			$_SESSION['hours'] = $array['hours'];
		}
	}
	
	// Client-Side Functions
	// Login Sign-up
	function login_start() {
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

	// Login Verification
	function login_check() {
		if (($_SESSION['logged']) != "Yes")  {
			header("Location: http://localhost:8080/AKPsi-Attendance/Login.php?");
		}
	}
	
	// Member Participation
	



	// Member Committee Involvement
	


	
	// Current Event Details/Involvement (One Record for each held event)




	// Past Event Details/Involvement (One Record for each held event)
		// Multiple functions separated by table call, or dropdown menu allowing selection of different types of menus, brought up within function call

	
	
	// General Event Advice/Information (One Record for each type of event)
		// Multiple functions separated by tables for committees, or dropdown menu allowing selection of different types of menus, brought up within function call

	
	
	// Committee Position Resonsibilities
		// Multiple functions separated by tables for committees, or dropdown menu allowing selection of different types of menus, brought up within function call


	
	// Committee Head Resonsibilities (All in one table)




	// Basic Functions
	// String Validation Function
	function filled_in($name) {
		return ((isset($name)) && ($name !== "") && (strlen($name) <30));
	}

	
?>