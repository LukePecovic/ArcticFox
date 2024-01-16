<!-----------------------------------------------------------------------------------------------------------------
--  AF_NavBarLogged.PHP (Original Program)
--  ArcticFox Nav
--  LastUpDate: 12/21/21
--  Will show if user is ARE loged in
------------------------------------------------------------------------------------------------------------------>

<?php
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
	
echo	'<col style="width:18%">';
echo 	'<col style="width:18%">';
echo	'<col style="width:18%">';
echo	'<col style="width:18%">';
echo	'<col style="width:28%">';
	
			//		<!-- Info on the website -->
echo		'<tr>';
echo        '<th style = "background-color:#036933";><a href="AF_ShowItemsTable.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Items</a></th>';
echo        '<th style = "background-color:#036933";><a href="AF_ShowSuppliersTable.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Suppliers</a></th>';
echo        '<th style = "background-color:#036933";><a href="AF_Logout.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Logout</a></th>';
echo        '<th style = "background-color:#036933";><a href="AF_AdminPage.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Admin Page</a></th>';
echo        '<th style = "background-color:#036933";><div class="topnav" text-align: center;><input type="text" placeholder="Search.."></div></th>';
echo	'</tr>';
		
echo '</table>';
	
?>