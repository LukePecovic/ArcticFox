<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_DBInfoCheck.php (Original Program)
--  ArcticFox DB Page
--  LastUpDate: 10/22/21
--  This will used to check if DB is working
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>DB Connection</title>
    <meta charset="UTF-8">
<head>

<body>

<?php
    define("FILE_AUTHOR","Antonio Lopez, Luke Pecovic, and Ian Marsh");
    echo "<h1> Ian Marsh is Testing Connection</h1>";
    echo "<ol>";
    echo "<li> Calling 'connect_db.php' to connect to the database!</l1>";

    require ("..\connect_db.php");

    if (mysqli_ping( $dbc)){
        echo "<li>Connected!</li>";
        echo "<li> MySQL Server". mysqli_get_server_info( $dbc).
            "connected on " . mysqli_get_host_info( $dbc).
            "</li?";}
        echo "<ol>";	   
         
?>
</body>
</html>