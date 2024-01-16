<!DOCTYPE HTML>
<!-- 2021/10/16 AF Original Program -->
<html lang="en">
<head><meta charset="UTF-8">
	<title>DB Connection</title>
</head>
<body>
	
<?php
	echo "<h1> Andrew Tokash is Testing Connections </h1>";
	echo "<ol>";
	echo "<li> Calling 'connect_db.php' to connect to the database";
	
	/* this will connect to db; $dbc is a link indentifier to database */
	require ("..\connect_db.php");
	
	if (mysqli_ping($dbc)) # good connection 
	{ echo "<li>Connected </li>";
	echo "<li> MySQL Server" .mysqli_get_server_info($dbc).
		" connected on " .mysqli_get_host_info($dbc).
		"</li>"; }
	echo "</ol>"
?>

</body>
</html>