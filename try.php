<?php include "php/db.php"; ?>


<form id="form1" name="form1" action="action.php"
            method="post">
<?php

$sql = "SELECT distinct Prov_Name FROM data_pl GROUP BY Prov_Name;";

$result = mysql_query($sql)
        or die(mysql_error());
if ($result != 0) {
    echo '<label>Province:';
    echo '<select id = "prov" name="prov">';
    echo '<option value="">all</option>';

    $num_results = mysql_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysql_fetch_array($result);
        $name = $row['Prov_Name'];
        echo '<option value="' .$name. '">' .$name. '</option>';
    }
   $pr = $_GET["prov"];
   echo $pr;
    echo '</select>';
    echo '</label>';    
}
?>
<script src="javascripts/global_var.js"></script>
<script>
function test(){
 var x = "lovely";
 start(x);
}
</script>
<input type="submit" value="Submit Form Data" onClick="test()" />
</form>
<script src="jquery/dist/jquery.min.js"></script>
