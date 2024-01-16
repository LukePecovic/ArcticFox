<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_DisclaimerPage.PHP (Original Program)
--  ArcticFox Disclaimer Page
--  LastUpDate: 10/22/21
--  This will show all of AF disclaimers
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Disclaimer Page</title>
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
        <a href="Team4.php">
            <h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1>
        </a> <!-- Set the ArcticFox Header -->
    </header>

    <!-- NAV -->
    <nav>
        <?php
        include "AF_NavBar.php";
        ?>
    </nav>

    <!-- MAIN -->
    <main>
        <hr style="color:#053386;">
        <h2>Disclaimer</h2>
        <p>Arctic Fox is not responsible for errors or omissions in the contents on the site.</p>
        <p>In no event shall Arctic Fox be liable for any negligent damages in any way. </p>
        <p>Arctic Fox reserves the right to make additions, deletions, or modifications to the contents on the site.</p>

        <hr style="color:#053386;">

        <h2>Children Disclaimer</h2>
        <p>Arctic Fox will not rent or sell equipment to children under the age of 18 if not accompanied
            by an adult over the age of 18.</p>

        <hr style="color:#053386;">

        <h2>Cookie Disclaimer</h2>
        <p>This site will use cookies for functionality.</p>

        <hr style="color:#053386;">

        <h2>Account Disclaimer</h2>
        <p>Arctic Fox has the right to terminate your account at any time.</p>

        <hr style="color:#053386;">

        <h2>External Links Disclaimer</h2>
        <p>The site may contain links to external websites that are not provided or maintained by or in any way affiliated
            with Arctic Fox.</p>
        <p>Please note that Arctic Fox does not guarantee any information on external websites.</p>
        <p>Arctic Fox has no control over linked sites and must be accessed at your own risk.</p>

        <hr style="color:#053386;">

        <h2>Errors and Omissions Disclaimer</h2>
        <p>The information given by Arctic Fox on the site takes every step to ensure that the content of information is both
            current and accurate; errors can still occur.</p>
        <p>Arctic Fox is not responsible for any errors or the results obtained from the use of this information.</p>

        <hr style="color:#053386;">

        <h2>Views Expressed Disclaimer</h2>
        <p>Comments Published by users are their responsibility. Arctic Fox is not liable for any comment published by users
            and reserves the right to delete any comment.</p>

        <hr style="color:#053386;">

        <h2>No Responsibility Disclaimer</h2>
        <p>In no event shall Arctic Fox or its suppliers be liable for any indirect damages.</p>

        <hr style="color:#053386;">

        <h2>&quot;Use at Your Own Risk&quot; Disclaimer</h2>
        <p>All information on the site is provided &quot;as is,&quot; with no guarantee of completeness, accuracy, timeliness.
            The results obtained from the use of this information, and without warranty of any kind,
            will fall on the customer.</p>
        <p>Arctic Fox will not be liable for any decision made or action taken on the information given by the Arctic
            Fox site.</p>

        <hr style="color:#053386;">

        <h2>Contact Us</h2>
        <p>If you have any questions about this Disclaimer, you can contact Us: <a herf=<a href="mailto:Ian.Marsh1@marist.edu, Luke.Pecovic1@marist.edu, antonio.lopez2@marist.edu">ArcticFox Support Team</a></p>
        <p>Last updated: Oct 12, 2021</p>
        <hr style="color:#053386;">
        <br>
        <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
        <br>
        <!--img = cool-->
    </main>

    <?php
        include "../ErrorHandler.php";
        define("FILE_AUTHOR", "Antonio Lopez, Luke Pecovic, and Ian Marsh");
        include("AF_Footer.php");
    ?>

</body>

</html>