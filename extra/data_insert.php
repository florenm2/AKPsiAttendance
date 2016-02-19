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

	
	// Server Insert Functions'
	// Add Table
	function table_add_server($connection) {
	$query = "DELETE FROM passwords ";
	$query .= "WHERE key_code = '{$password}' ";
	$query .= "LIMIT 1";
	
	
	$result = mysqli_query($connection, $query);
	
	// Tests if anything was found && if something was successfully changed with connection 
	if ($result && mysqli_affected_rows($connection) == 1) {
		session_start();
		$_SESSION['Download'] = "yes";
		header("Location: http://localhost:8080/Upgraid/Download.php?success=yes");
	} else {
		header("Location: http://localhost:8080/Upgraid/Download.php?success=no");
	}
	
		// Old Stuff
		$array = array($_POST['tableName'], $_POST);
		$_SESSION['table_add'] = $array[1];

	/* Test code for creating a table
			CREATE TABLE table_name (
			column_name1 definition,
			column_name2 definition,
			column_name3 definition,
			options
		);
			Definition (Examples): id INT(11) NOT NULL AUTO_INCREMENT, menu_name VARCHAR(30) NOT NULL, visible TINYINT(1), PRIMARY KEY (id)
	*/

	}

	
	// Client-Side Functions
	// Add Table
	function table_add() {
		if (isset($_POST['table'])) {
			if ((filled_in($_POST["tableName"])) && (filled_in($_POST["field1"])) || (filled_in($_POST["field2"])) || (filled_in($_POST["field3"])) || (filled_in($_POST["field4"])) || (filled_in($_POST["field5"])) || (filled_in($_POST["field6"])) || (filled_in($_POST["field7"])) || (filled_in($_POST["field8"])) || (filled_in($_POST["field9"]))) {
				$_SESSION['table_add'] = "Table conditions were read worked";
				$connect = connect();
				table_add_server($connect);
				close();
			} else {
				$_SESSION['table_add'] = "This didn't work";
				return "Add was unsuccessful";
			}	
		}
	}

	
	// Add User
	function user_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}


	//  Add User Participation
	function user_participation_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}


	// Member Committee Involvement
	function user_committee_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}	

	
	// Current Event Details/Involvement (One Record for each held event)
	function event_record_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}


	// Past Event Details/Involvement (One Record for each held event)
		// Multiple functions separated by table call, or dropdown menu allowing selection of different types of menus, brought up within function call
	function event_record_transfer() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}

	
	// General Event Advice/Information (One Record for each type of event)
		// Multiple functions separated by tables for committees, or dropdown menu allowing selection of different types of menus, brought up within function call
	function event_general_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}

	
	// Committee Position Resonsibilities
		// Multiple functions separated by tables for committees, or dropdown menu allowing selection of different types of menus, brought up within function call
	function committee_position_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}
	
	
	// Committee Head Resonsibilities (All in one table)
	function committee_head_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}




	// Extra Function
	// String Validation Function
	function filled_in($name) {
		return ((isset($name)) && ($name !== "") && (strlen($name) <30));
	}
	
?>