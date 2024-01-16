<!-----------------------------------------------------------------------------------------------------------------
--  AF_NavBar.PHP (Original Program)
--  ArcticFox NAV
--  LastUpDate: 11/21/21
--  Will show if user is NOT loged in
------------------------------------------------------------------------------------------------------------------>

<?php

session_start();
if (isset($_SESSION['login_status'])) {
    $login_status = $_SESSION['login_status'];
    $acct = $_SESSION['acct_type'];

    if ($login_status == "LOGGED IN" && $acct == 'Admin') {
        include "AF_NavBarLoggedA.php";
    }else if ($login_status == "LOGGED IN" && $acct == 'Employee'){
		include "AF_NavBarLoggedE.php";
	}else {

        echo '<table border = 1; 
        style= "width:100%;
        background-color: #036933;
        color: black;
        border-collapse: collapse;
        border: 1px;
        font-family: serif;
        font-weight: normal;
        margin-right: auto;
        margin-left: auto;"
        >';

        echo    '<col style="width:25%">';
        echo     '<col style="width:25%">';
        echo    '<col style="width:25%">';
        echo    '<col style="width:25%">';

        //		<!-- Info on the website -->
        echo        '<tr>';
        echo        '<th style = "background-color:#036933";><a href="AF_ShowItemsTable.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Items</a></th>';
        echo        '<th style = "background-color:#036933";><a href="AF_ShowSuppliersTable.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Suppliers</a></th>';
        echo        '<th style = "background-color:#036933";><a href="AF_LoginPage.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Employee Login</a></th>';
        echo        '<th style = "background-color:#036933";><div class="topnav" text-align: center;><input type="text" placeholder="Search.."></div></th>';
        echo    '</tr>';

        echo '</table>';
    }
}
else {

    echo '<table border = 1; 
    style= "width:100%;
    background-color: #036933;
    color: black;
    border-collapse: collapse;
    border: 1px;
    font-family: serif;
    font-weight: normal;
    margin-right: auto;
    margin-left: auto;"
    >';

    echo    '<col style="width:25%">';
    echo     '<col style="width:25%">';
    echo    '<col style="width:25%">';
    echo    '<col style="width:25%">';

    //		<!-- Info on the website -->
    echo        '<tr>';
    echo        '<th style = "background-color:#036933";><a href="AF_ShowItemsTable.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Items</a></th>';
    echo        '<th style = "background-color:#036933";><a href="AF_ShowSuppliersTable.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Suppliers</a></th>';
    echo        '<th style = "background-color:#036933";><a href="AF_LoginPage.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Employee Login</a></th>';
    echo        '<th style = "background-color:#036933";><div class="topnav" text-align: center;><input type="text" placeholder="Search.."></div></th>';
    echo    '</tr>';

    echo '</table>';
}
