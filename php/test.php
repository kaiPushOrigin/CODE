<?php
 
                 //dataBase.php
                 $db_location = "localhost";
                 $db_username = "cs4477223";
                 $db_password = "sid";
                 $db_database = "cs4477223";
                 $db_connection = mysql_connect($db_location,$db_username,$db_password)
                 or die ("Error - Could not connect to MySQL Server");
                 $db = mysql_select_db($db_database,$db_connection)
                  or die ("Error - Could not open database"); 
 //displayDepartments.php
 $query = '"SELECT * FROM data "';
 $category = mysql_query($query)
 or die(mysql_error());
 $numRecords = mysql_num_rows($category);
 $catCount = 0;
 $currentDepartment = "";
 echo "Here are the list of products that The Change Inc. offers for your pets. <br />Click on a specific product to get more details. <br /><br /><table><tr><td>";
echo "$category";


?> 
