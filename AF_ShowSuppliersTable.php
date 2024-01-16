<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_SuppliersTable.PHP (Original Program)
--  ArcticFox suppliers Page
--  LastUpDate: 11/1/21
--  This will show our Suppliers table 
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Suppliers Table</title>
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
        table {
            background-color: rgb(11, 80, 11);
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
		
		form{
			text-align:center;
		}
    </style>
</head>

<body style="background-color:#00a84c;">

    <header style="background-color:#dfe7d3;">
        <a href= "Team4.php" ><h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1></a>  <!-- Set the ArcticFox Header -->
    </header>

	
    <nav>
        <?php
		    include "AF_NavBar.php";
        ?>
    </nav>
    
    
    <main> 
    <h2>Suppliers</h2>
    <hr>
        
    <?php
    include "../errorHandler.php";
    REQUIRE ("../connect_db.php"); // Connects to our database (actual file found in parent folder)

	if(isset($_POST['sort'])){
		$sort_type = "ORDER BY " . $_POST['sort']  . " " . $_POST['direct'];
	}else{
		$sort_type = "";
	}

    $q = "SELECT * FROM T4_Suppliers WHERE active='Y' $sort_type"; // Calls to return the T4_Suppliers values from the table 
    $r = mysqli_query ( $dbc , $q );   // Checks to see if the command worked or not

    // Form to process different sort options
    echo "<br>";


    echo "<form action ='". $_SERVER['SCRIPT_NAME'] ."' method = 'POST'>";

    

    echo " Sort <select name='sort'>";
            echo "  <option value='supplierID'> ID </option>";  
            echo "  <option value='supplierName'> Name </option>";  
            echo "  <option value='supplierEmail'> Email </option>";  
    echo "</select>";

    echo " By <select name='direct'>";
            echo "  <option value='ASC'> Ascending </option>";
            echo "  <option value='DESC'> Descending </option>";
    echo "</select>";

    echo "  <input type = 'submit' value = 'Sort It!' Style = 'color: white; background-color: coral;'>";

    echo "</form>";

    echo "<Table border=2 style = 'background-color: #dfe7d3 '>";

    echo "<tr>"; // This is the table header, tells us the column names for the SQL table
    echo "<th>Supplier ID</th>";
    echo "<th>Supplier Name</th>";
    echo "<th>Email</th>";
    echo "<th>Phone #</th>";
	if (isset($_SESSION['acct_type'])) {		// Only displays delete if employee is logged in
		$acct = $_SESSION['acct_type'];
		if ($acct == 'Employee'){
			echo "<th>Delete</th>";
		}
	}

	// Echos out table content if the SELECT * FROM command ran, otherwise it gives an error
    if ($r) {
        while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)){
            echo "<tr>"; 
            echo "<td> " . $row[0] ."</td>";
            echo "<td> " . $row[1] ."</td>";
            echo "<td> " . $row[2] ."</td>";
            echo "<td> " . $row[3] ."</td>";
			
			if (isset($_SESSION['acct_type'])) {		// Only displays delete if employee is logged in
				$acct = $_SESSION['acct_type'];
				if ($acct == 'Employee'){
					echo "<td> <a href = 'AF_SupplierDelete.php?id=$row[0]&active=N&name=$row[1]'> Delete </a></td>";
				}
			}
			echo "</tr>"; 
        }
    }
    else { 
        echo "<li>" . mysqli_error( $dbc ) . "</li>" ; // Error message
    }
    echo "</tr>";
    echo "</Table>";
	
	if (isset($_SESSION['acct_type'])) {
        $acct = $_SESSION['acct_type'];
        if ($acct == 'Employee'){
            echo "<p style = 'color: black; text-align: center;'> <a href= 'AF_InsertSupplier.php'> Want to Add a Company? Click Here </a>";
        }
    }
	
	
    
    ?>
    <br>

    <hr>
	<!-- Logo that we are using for this website -->
    <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
    
    </main> 

    <!--- This calls the footer file --->
    <?php
        define("FILE_AUTHOR","Antonio Lopez");
        INCLUDE ("AF_Footer.php");
    ?>
    

    

</body>

</html>
