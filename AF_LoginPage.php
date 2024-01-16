<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_LoginPage.PHP (Original Program)
--  ArcticFox Login Page
--  LastUpDate: 11/21/21
--  Login to the site
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Login Page</title>
    <meta charset="UTF-8">

    <!-- CSS -->
    <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        h2 {
            color: #dfe7d3;
            text-align: center;
            font-size: 30px;
        }

        a:link {
            color: black;
            background-color: transparent;
            text-decoration: none;
            font-size: 18px;
        }

        a:visited {
            color: black;
            background-color: transparent;
            text-decoration: none;
            font-size: 18px;
        }

        a:hover {
            color: black;
            background-color: transparent;
            text-decoration: underline;
            font-size: 18px;
        }

        a:active {
            color: black;
            background-color: transparent;
            text-decoration: underline;
            font-size: 18px;
        }
		p{
            font-size: 14px;
            font-family: Arial;
        }
    </style>
</head>

<body style="background-color:#00a84c;">

    <!-- Header -->
    <header style="background-color:#dfe7d3;">
        <a href= "Team4.php" ><h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1></a>  <!-- Set the ArcticFox Header -->
    </header>

    <!-- NAV -->
    <nav>
        <?php
		    include "AF_NavBar.php";
        ?>
    </nav>

    <main>
    <h2>Employee Login</h2>
    <hr>

<?php
	session_start();

	require "../connect_db.php";	// Connects to the DB
	//	include "ErrorHandler.php";	// Tells me what and where errors are 
	
	$error_message = "";
	// Input Initialization block of code
	if (isset($_POST['username'])){	
		$username = $_POST['username'];
	}else{
		$username = "";
	}
	
	if (isset($_POST['password'])){	
		$password = $_POST['password'];
	}else{
		$password = "";
	}
	
	// Input Validation block of code
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if ( trim($username) == "") {		// Checks if the username/password was set and is alphonumeric
			$error_message=" <p style='color:red';> Enter your user name! </p>";
		}
		elseif ( trim($password) == ""  ) {
			$error_message=" <p style='color:red';> Enter your password! </p>";
		}
		elseif ( ctype_alnum($password) == FALSE ) {
			$error_message=" <p style='color:red';>Your password must be alphnumeric only!</p>";
		}
		
		if ($error_message == "") {		// Checks if the username/password matches the one in the database
			$q = "SELECT * FROM T4_Users WHERE username='$username' AND password='$password' AND active = 'Y'";
			$r = mysqli_query ( $dbc , $q );  
			
			if ($r){
				if (mysqli_num_rows($r) == 0) { 
					$error_message = "<p style='color:red';> Invalid user name/password combination. </p><small>Note: Acct must be active</small>";
				}
			}
			else {
				$error_message = "<p style='color:red';>Invalid user name/password combination.</p><br><small>Note: Acct must be active</small>";
			}
		}
	}

	

	
	
	// Action Handler: All Validations Passed
	if ($_SERVER['REQUEST_METHOD'] == "POST" & $error_message == "") {


		$q = "SELECT acctType FROM T4_Users WHERE username='$username' AND password='$password'";
		$r = mysqli_query ( $dbc , $q );   
		
		
		if ($r){
			while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)){
				if ($row[0] == 'Admin') {
					$_SESSION['login_status'] = "LOGGED IN";
					$_SESSION['acct_type'] = 'Admin';
				}

				elseif ($row[0] == 'Employee' || $row[0] == 'Shareholder'){
					$_SESSION['login_status'] = "LOGGED IN";
					$_SESSION['acct_type'] = 'Employee';
				}
			}
		}

		echo "<br> User $username successfully logged in as a " . $_SESSION['acct_type'] . "!";


	}
	
	// Session login if-statements
	if (isset($_SESSION['login_status'])){
		$login_status = $_SESSION['login_status'];
	}else{
		$login_status = "NOT LOGGED IN";
	}
	//echo "<br> " . $login_status;
	
	if ($_SERVER['REQUEST_METHOD'] == 'GET' || $error_message != "") {	// Tests to see if it's the first time loading the page. If not, does not load
		echo "<form action = '" . $_SERVER['SCRIPT_NAME'] ."' method = 'POST'>";
		echo "<p> Username <br><input type = 'text' name = 'username' autofocus='autofocus'>";		// Enter username and password here
		echo "<br>";
		echo "<br> Password <br><input type = 'password' name = 'password'>";
		echo "<br><br> <input type = 'submit' style='color:white; background-color:coral' value = 'Submit'>"; // Button to submit and refresh the page
		echo "</form>";
		
		echo "<p>" . $error_message . "</p>";	// Tells the user if there is an error with their input
	}else{
		echo "<form action = 'Team4.php' method = 'POST'>";
		echo "<br> <input type = 'submit' style='color:white; background-color:coral' value = 'Go Back'>"; // Button to go back to the home page
		echo "</form>";
	} 
	
	
	include "footer.php";

?>
<hr style="color:#053386;">
        <br>
        <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
        <br> <!--img = cool-->


</main>

    <!--- This calls the footer file --->
    <?php
    	define("FILE_AUTHOR","Ian Marsh");
    	INCLUDE ("../html/AF_Footer.php");
    ?>




</body>

</html>