<?php
 //displayDepartments.php
 $query = "SELECT * FROM data
 ORDER BY Prov_Name ";
 $category = mysql_query($query)
 or die(mysql_error());
 $numRecords = mysql_num_rows($category);
 $catCount = 0;
 $currentDepartment = "";
 echo "Here are the list of products that The Change Inc. offers for your pets. <br />Click on a specific product to get more details. <br /><br /><table><tr><td>";
 for ($i = 0; $i < $numRecords; $i++)
 {
 $row = mysql_fetch_array($category);
 if ($currentDepartment != $row["products_category"])
 {
 echo "<ol>";
 if ($currentDepartment != "") echo "</ol></li><br />";
 if ($catCount > $numRecords/2)
 {
 echo "</td><td valign='top'>";
 $catCount = 0;
 }
 $currentDepartment = $row["Prov_Name"];
 echo "$currentDepartment";
 }
 echo "<ul><a href=\"pages/category.php?cat='"
 .$row["Prov_Name"] . "'\">"
 .$row["Topic"]
 ."</a></ul>";
 $catCount++;
 }
 echo "</li></td></tr></table>";
 ?>