<?php include "php/db.php"; ?>


<form id="form1" name="form1" action="action2.php"
            method="post">
<?php

$sql = "SELECT distinct POPCTR_Name FROM data_pl WHERE Prov_Name = '$prov';";

$result = mysql_query($sql)
        or die(mysql_error());
if ($result != 0) {
    echo '<label>City:';
    echo '<input type="hidden" name="province" value=';
    echo $prov;
    echo'>';
    echo '<select id = "city" name="city">';
    echo '<option value="">all</option>';
   
    $num_results = mysql_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysql_fetch_array($result);
        $name = $row['POPCTR_Name'];
        echo '<option value="' .$name. '">' .$name. '</option>';
    }
   
    echo '</select>';
    echo '</label>';
}

?>


<?php

$sql = "SELECT distinct Topic FROM data_ff;";

$result = mysql_query($sql)
        or die(mysql_error());
if ($result != 0) {
    echo '<label>Topic:';
    echo '<select id = "Topic" name="Topic">';
    echo '<option value="">all</option>';
   
    $num_results = mysql_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysql_fetch_array($result);
        $name = $row['Topic'];
        echo '<option value="' .$name. '">' .$name. '</option>';
    }
   
    echo '</select>';
    echo '</label>';
}

?>


<input type="submit" value="Submit Form Data" />
</form>

