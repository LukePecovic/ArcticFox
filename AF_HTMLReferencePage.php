<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_HTMLReferencePage.PHP (Original Program)
--  ArcticFox Reference Page
--  LastUpDate: 10/22/21
--  This will be our page for references
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox HTML Reference Page</title>
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
        table {
            background-color: green;
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

        h1 {
            color: red;
        }
        tr:nth-child(even) {background-color: silver;} 
    </style><!-- https://www.w3schools.com/html/html_links_colors.asp-->
    <!-- I went online to find out how to change the way links look -->
</head>

<body style="background-color:#00a84c;">
    
    <header style="background-color:#dfe7d3;">
        <a href= "Team4.php" ><h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1></a>  <!-- Set the ArcticFox Header -->
    </header>

    <nav>
        <?php
            include "../ErrorHandler.php";
		    include "AF_NavBar.php";
        ?>
    </nav>
    
    <main> <!-- Info on the wibsite -->
        
        <h2 style="text-align: center;">HTML Commands</h2>
        <hr style="color:#053386;">
        
        <!-- Start of table -->
        <table border=1>
            <tr> <!-- New Row -->
                <th> Item </th> <!-- New bold column -->
                <th> Description </th>
            </tr>

            <tr>
                <td> Head Tags </td>
                <td> &lt;title> - tag defines the title of the document and is shown in the browser's title bar <br>
                    &lt;meta charset="utf-8"> <br>
                    Also make sure &lt;html lang="en"> and &lt;!DOCTYPE html> are before the Head.
                </td>
            </tr>

            <tr>
                <td> Structural Elements </td>
                <td> &lt;header> &lt;body> &lt;nav> &lt;main> &lt;footer> </td>
            </tr>

            <tr>
                <td> HyperText </td>
                <td> The &lt;a> href="example.com"> Example - is how we link a website. <br></td>
            </tr>
            
            <tr>
                <td> Formatting </td>
                <td> The &lt;b> tag is used to bold text. <br>
                    The &lt;strong> tag is used to define text with strong importance.<br>
                    The &lt;i> tag is used to make text italicized.<br>
                    The &lt;em> tag is used to define emphasized text. <br>
                    The &lt;hr> tag is used to make a break in an HTML page. <br>
                </td>
            </tr>

            <tr>
                <td> Headers </td>
                <td> The &lt;h1> thru &lt;h6> tags create a used to define HTML headings with &lt;h1> being most
                    important to &lt;h6>
                    being least. <br></td>
            </tr>
            <tr>
                <td> Images </td>
                <td> &lt;img src="" width="" height=""> <br></td>
            </tr>
            

        </table>

        <h2 style="text-align: center;">CSS Commands</h2>
        <hr style="color:#053386;">

        <!-- Start of CSS table -->
        <table border=1>
            <tr>
                <th> Style </th>
                <th> Description </th>
            </tr>
            <tr>
                <td> back-ground-color; </td>
                <td> </td>
            </tr>
            <tr>
                <td> color </td>
                <td> Used to change text color <br></td>
            </tr>
            <tr>
                <td> border-collapse: collapse; </td>
                <td> Used to make single line border <br></td>
            </tr>
            <tr>
                <td> border: ?px; </td>
                <td> The border weight in pixels <br></td>
            </tr>
            <tr>
                <td> font:family </td>
                <td> Change text font <br></td>
            </tr>
            <tr>
                <td> font-size:?px </td>
                <td> Font size in pixels <br></td>
            </tr>
            <tr>
                <td> font-weight: </td>
                <td> Can be normal or bold <br></td>
            </tr>
            <tr>
                <td> margin-right: auto; margin-left: auto; </td>
                <td> Centers table in the browser <br></td>
            </tr>
            <tr>
                <td> padding-left: ?px; padding-right: ?px; </td>
                <td> Creates spaces in table cells <br></td>
            </tr>
            <tr>
                <td> In-Line CSS Example </td>
                <td> &lt;h2 style="text-align: center;">CSS Commands&lt;/h2> <br></td>
            </tr>
            <tr>
                <td> Alternate Color in Table </td>
                <td> tr:nth-child(even) {background-color: silver;} <br></td>
            </tr>

        </table>

        <h2 style="text-align: center;">Website Design Best Practices</h2>
        <hr style="color:#053386;">
        
        <!-- Start of table -->
        <table style= "background-color: white;
        color: black;
        border-collapse: collapse;
        border: 1px;
        font-family: Arial;
        font-weight: normal;
        margin-right: auto;
        margin-left: auto;" 
        border = 1>

            <tr> <!-- New Row -->
                <td> Optimize your design for mobile devices </td>
            </tr>

            <tr>
                <td> Reinforce actions with familiarity </td>
            </tr>

            <tr>
                <td> Simplify the navigation </td>
            </tr>

            <tr>
                <td> Try shorter paragraphs </td>
            </tr>

            <tr>
                <td> Monitor your page loading speed </td>
            </tr>

        </table>

        <h2 style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;Links</h2>
        <hr style="color:#053386;">

        <ul style="background-color:#dfe7d3;">
            <li style="text-align: center;"><a href="https://www.w3schools.com/html/html_lists.asp">Lists</a></li>
            <li style="text-align: center;"><a href="https://www.w3schools.com/html/html_tables.asp">Tables</a></li>
            <li style="text-align: center;"><a href="https://validator.w3.org/">HTML Validator</a></li>
            <li style="text-align: center;"><a href="https://www.w3schools.com/html/html5_semantic_elements.asp">Structural Elements</a></li>
        </ul>
        <hr style="color:#053386;">
        <br>
        <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
        <br> <!--img = cool-->

    </main>

    <?php
    define("FILE_AUTHOR","Antonio Lopez, Luke Pecovic, and Ian Marsh");
    INCLUDE ("AF_Footer.php");
    ?>

</body>

</html>
