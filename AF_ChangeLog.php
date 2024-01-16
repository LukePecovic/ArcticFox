<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_ChangeLog.PHP  (Original Program)
--  ArcticFox Change Log Page
--  LastUpDate: 10/22/21
--  Show change logs
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Change Log</title>
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

        h3 {
            color: #dfe7d3;
            text-align: center;
            font-size: 24px;
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
        <a href="Team4.php">
            <h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1>
        </a> 
    </header>

    <!-- NAV -->
    <nav>
        <?php
        include "AF_NavBar.php";
        ?>
    </nav>

    <!-- MAIN -->
    <main>
        <!-- The change log -->
        <h2 style="color:#dfe7d3;text-align: center;"> Change Log </h2>

        <hr style="color:#053386;">

        <!-- V1.3.0 -->
        <h3 style="color:#dfe7d3;text-align: left;"><strong>Version 1.3.0 - 12/6/2021 - AWS</strong></h3>

        <ul style="font-size: 18px;">

            <li>Made admin page visible only to administrators</li>
            <li>Allow spaces in items & supplier names</li>
            <li>Moved to AWS</li>

        </ul>

        <br>

        <!-- V1.2.0 -->
        <h3 style="color:#dfe7d3;text-align: left;"><strong>Version 1.2.0 - 11/21/2021 - Tables</strong></h3>

        <ul style="font-size: 18px;">

            <li>Display active records</li>
            <li>Sort buttons</li>
            <li>Add a new entry</li>
            <li>Login/ Logout</li>

        </ul>

        <br>

        <!-- V1.1.0 -->
        <h3 style="color:#dfe7d3;text-align: left;"><strong>Version 1.1.0 - 11/2/2021 - First Update</strong></h3>

        <ul style="font-size: 18px;">

            <li>Created Pages that display users/products/suppliers tables</li>
            <li>Added FILE_AUTHOR</li>
            <li>Migrated to PHP</li>

        </ul>

        <br>

        <!-- V1.0.0 -->
        <h3 style="color:#dfe7d3;text-align: left;"><strong>Version 1.0.0 - 10/12/2021 - Original web pages released</strong></h3>

        <ul style="font-size: 18px;">

            <li>Created Home Page</li>
            <li>Created Disclaimer Page</li>
            <li>Created Version/Change log</li>
            <li>Created an Admin Page</li>

        </ul>

        <!-- logo -->
        <br>
        <hr style="color:#053386;">
            <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
        <br>

    </main>

    <!-- Footer -->
    <?php
        include "../ErrorHandler.php";
        define("FILE_AUTHOR", " Antonio Lopez, Luke Pecovic, and Ian Marsh");
        include("AF_Footer.php");
    ?>

</body>

</html>