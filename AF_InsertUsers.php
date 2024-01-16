<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_InsertUsers.php (Original Program) 
--  ArcticFox Insert Users
--  LastUpDate: 10/22/21
--  Add new users to the site
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Add User Page</title>
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
            text-decoration: underline;
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
            font-size: 18px;
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
    <h2>Add New User</h2>
    <hr>

    <?php

	require "../connect_db.php";
	include "../ErrorHandler.php";
	
	$error_message = "";
    

    
    $error_message = "";
    echo $error_message;

    # ------ Initialize Variables --------

    //username
    if (isset($_POST["username"])){
        $username = $_POST["username"];
    } 
    else{
        $username = "";
    }
    
    //fname
    if (isset($_POST["fname"])){
        $fname = $_POST["fname"];
    } 
    else{
        $fname = "";
    }

    //lname
    if (isset($_POST["lname"])){
        $lname = $_POST["lname"];
    } 
    else{
        $lname = "";
        
    }

    //password
    if (isset($_POST['password'])){
        $password = $_POST['password'];
    } 
    else{
        $password = "";
    }

    //password Check
    if (isset($_POST['passwordCheck'])){
        $passwordCheck = $_POST['passwordCheck'];
    } 
    else{
        $passwordCheck = "";
    }

    //acctType
    if (isset($_POST['acctType'])){
        $acctType = $_POST['acctType'];
    } 
    else{
        $acctType = "";
    }

    //active
    if (isset($_POST['active'])){
        $active = $_POST['active'];
    } 
    else{
        $active = "";
    }

    //DOB  
    if (isset($_POST['DOB'])){
        $DOB = $_POST['DOB'];
    } 
    else{
        $DOB = "";
    }


    
    # ------ Input Validation  --------
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //username
        if (trim($username) == "") {
            $error_message="Enter your user name!";
        }
        elseif (ctype_alnum($username) == FALSE){
            $error_message="Your username must be alphnumeric only!";
        }

        //fname
        elseif (trim($fname) == "") {
            $error_message="Enter your first name!";
        }
        elseif (ctype_alpha($fname) == FALSE){
            $error_message="Your first name must be alphnumeric only!";
        }

        //lname
        elseif (trim($lname) == "") {
            $error_message="Enter your last name!";
        }
        elseif (ctype_alpha($lname) == FALSE){
            $error_message="Your last name must be alphnumeric only!";
        }

        //password
        elseif (trim($password) == "") {
            $error_message="Enter your password!";
        }
        elseif (strlen($password) <  8) {
            $error_message="Your password must be more then 8 characters long!";
        }
        elseif (ctype_graph($password) == FALSE){
            $error_message="Your password must be alphnumeric only!";
        }
        elseif (trim($password) != trim($passwordCheck)){
            $error_message="Your passwords must match!";
        }
        
        //acctType
        elseif (trim($acctType) == "") {
            $error_message="Enter your acctType!";
        }

        //active
        elseif (trim($active) == "") {
            $error_message="Enter if active is active!";
        }
        
        //DOB
        elseif (trim($DOB) == "") {
            $error_message="Enter your DOB!";
        }
    }

    //Check to see if username is already used
    if ($error_message == "" && $_SERVER['REQUEST_METHOD'] == "POST") { 
        $q = "Select username From T4_Users Where username = '$username'";
        $r = mysqli_query ( $dbc , $q );    # this runs commands,
        if (mysqli_num_rows($r) > 0) { 
            $error_message = "Username is already used!";
        }
            
    }
        
    //Add user
    if ($error_message == "" && $_SERVER['REQUEST_METHOD'] == "POST") { 
        $q = "insert into T4_Users (username, fname, lname, password, lastPassChange, acctType, active, DOB) values ( '$username', '$fname' , '$lname' , '$password' , current_timestamp(), '$acctType', '$active', '$DOB' )";
        $r = mysqli_query ( $dbc , $q );    # this runs commands, 

        if ($r){
            echo "The user $username was added!";
        }
        else {
            $error_message = "There was a problem please try again.";
            
        }
    }
    
    
 
    
    echo "<p style='color:red';>$error_message";

    # ------ Display Form --------
    
	    echo "<form action = '" . $_SERVER['SCRIPT_NAME'] ."' method = 'POST'>";
	    echo "<p> Enter Username* <br><input type = 'text' value = '" . $username ."' name = 'username' autofocus='autofocus'>";
        echo "<small> ex: Bob123</small>";
        echo '<br>';
        echo "<br> Enter Your First Name* <br> <input type = 'text' value = '" .$fname."' name = 'fname'>";
        echo "<small> ex: Bob</small>";
        echo '<br>';
        echo "<br> Enter Your Last Name* <br><input type = 'text' value = '" . $lname."' name = 'lname'>";	
        echo "<small> ex: Smith</small>";
        echo '<br>';
        echo "<br> Enter password*<br> <input type = 'password' name = 'password'>";
        echo "<small> Must be 8 characters long and no spaces!</small>";
        echo '<br>';
        echo "<br> Enter password Again* <br><input type = 'password' name = 'passwordCheck'>";
        echo '<br>';

        //
        echo "<br> Account Type* <select name='acctType'>";
            echo "  <option value='Shareholder'> Shareholder </option>"; 
            echo "  <option value='Employee'> Employee </option>";
            echo "  <option value='Admin'> Admin </option>";
        echo "</select>";
        echo '<br>';

        //
        echo "<br> Account active* <select name='active'>";
            echo "  <option value='Y'> Yes </option>";
            echo "  <option value='N'> No </option>";
        echo "</select>";
        echo '<br>';
        echo "<br> Enter DOB* <input type = 'date' name = 'DOB'>";
        echo '<br>';
	
	    echo "<br> <input type = 'submit' style='color:white; background-color:coral' value = 'Submit'>"; 
	    echo "</form>";
    

	echo "<br> <a href= 'AF_ShowUserTable.php' Style = 'text-decoration: underline;'> <--- Go Back </a>";

    ?>
 
 <hr>
	<!-- Logo that we are using for this website -->
    <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
    </main>

    <!-- Footer -->
    <?php
        define("FILE_AUTHOR","Ian Marsh");
        INCLUDE ("AF_Footer.php");
    ?>

</body>

</html>