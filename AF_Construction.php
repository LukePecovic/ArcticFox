<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_Construction.PHP (Original Program)
--  ArcticFox Construction Page
--  LastUpDate: 10/22/21
--  This will show when a link is not yet working
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Construction Page</title>
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
    
    <!-- IMG MEME -->
    <main> 
        <br>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhW-AatPfOpXJKuKDEP1efVHm-vYT3PBROEQ&usqp=CAU" width="408" height="279"></a>
        <br> 
    </main>

    <!-- Footer -->
    <?php
        include "../ErrorHandler.php";
        define("FILE_AUTHOR","Antonio Lopez, Luke Pecovic, and Ian Marsh");
        INCLUDE ("AF_Footer.php");
    ?>

</body>

</html>
