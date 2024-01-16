<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_UserDelete.PHP (Original Program)
--  ArcticFox User Delete page
--  LastUpDate: 11/1/21
--  Will remove a user
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Items Table</title>
    <meta charset="UTF-8">

    <!-- CSS Code -->
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

        table {
            background-color: rgb(223,231,211);
            color: black;
            border-collapse: collapse;
            border: 1px;
            font-family: Arial;
            font-weight: normal;
            margin-right: auto;
            margin-left: auto;
            
        }
        

        th {
            background-color: gray;
            font-size: 17px;
            font-weight: bold;
        }

        td {
            font-size: 15px;
            padding-left: 5px;
            padding-right: 5px;
        }
        
        tr:nth-child(even) {background-color: silver;} 

        h3 {
            color: black;
            text-align: center;
            font-size: 25px;
            background-color:#df5b52;
        }
        form{
			text-align:center;
		}
    </style>
</head>

<body style="background-color:#00a84c;">

    <header style="background-color:#dfe7d3;">
        <a href="Team4.php">
            <h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1> <!-- Set the ArcticFox Header -->
        </a> 
    </header>

    <nav>
        <?php
		    include "AF_NavBar.php";
        ?>
    </nav>


    <main>

    <?php
	require "../connect_db.php";
	include "../ErrorHandler.php";

	if (isset($_GET["id"])){
		$id = $_GET["id"];
		//echo "<br>Successful sub";
	}else{
		echo "<br> No ID specified";
		die;
	}
    if (isset($_GET["name"])){
		$name = $_GET["name"];
	}
    else{
		echo "<br> No name specified";
		die;
	}

	
	if (isset($_GET["active"])){
		$active = $_GET["active"];
		//echo "<br>Successful sub";
	}else{
		echo "<br> No Active specified";
		die;
	}
	
	$q = "UPDATE T4_Users SET active = '" . $active . "' WHERE UserID = $id";
	
	
	$r = mysqli_query ( $dbc , $q );
	
	if ( $r ) {
		echo "<h3> The user $name was deleted<br> <a href= 'AF_ShowUserTable.php'> Go Back </a> </H3>";
	}else{
		echo "<br>" . mysqli_error( $dbc ) . "</br>" ;
	}

	?>

	</main>
    <hr style="color:#053386;">
        <br>
        <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
        <br> <!--img = cool-->

    <!--- This calls the footer file --->
    <?php
    	define("FILE_AUTHOR","Ian Marsh");
    	INCLUDE ("AF_Footer.php");
    ?>


 

</body>

</html>