<?php include "php/db.php"; ?>



<?php

$sql = "SELECT Total FROM data_ff WHERE Characteristics = '$char' AND POPCTR_Name = '$cit';";

$result = mysql_query($sql)
        or die(mysql_error());

    if ($result != 0) {
$num_results = mysql_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysql_fetch_array($result);
        $name = $row['Total'];

}

  } 
echo $name;
?>
