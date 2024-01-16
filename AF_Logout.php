<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_Logout.PHP (Original Program)
--  ArcticFox Logout page
--  LastUpDate: 11/21/21
--  This will log users out
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Logout Page</title>
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
    <h2>Employee Logout</h2>
    <hr>

<?php
	session_start();
	

	$_SESSION['login_status'] = "LOGGED OUT";	//Resets the session variable echo        
	$_SESSION['acct_type'] = "";
    echo "<br>User successfully logged out.";
	
	echo "<form action = 'Team4.php' method = 'POST'>";
	echo "<br> <input type = 'submit' style='color:white; background-color:coral' value = 'Go Back'>"; // Button to go back to the home page
	echo "</form>";

?>
<hr style="color:#053386;">
        <br>
        <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
        <br> <!--img = cool-->

</main>

    <!--- This calls the footer file --->
    <?php
    	define("FILE_AUTHOR","Ian Marsh");
    	INCLUDE ("AF_Footer.php");
    ?>




</body>

</html>

