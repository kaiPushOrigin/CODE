<?php include "php/db.php"; ?>

<script src="javascripts/global_var.js"></script>
<script>
function go(){
var sr=final();
console.log(sr);
}
</script>
<form id="form1" name="form1" action="welcome.php"
            method="post">
<?php

$sql = "SELECT distinct Characteristics FROM data_pl WHERE Topic = '$Topic';";

$result = mysql_query($sql)
        or die(mysql_error());
if ($result != 0) {
    echo '<label>Characteristics:';
    echo '<input type="hidden" name="cit" value=';
    echo $city;
    echo'>';
    echo '<select id = "char" name="char">';
    echo '<option value="">all</option>';
   
    $num_results = mysql_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysql_fetch_array($result);
        $name = $row['Characteristics'];
        echo '<option value="' .$name. '">' .$name. '</option>';
    }
   
    echo '</select>';
    echo '</label>';
}
echo '<input type="hidden" name="top" value=';
echo $Topic;
echo'>';
?>






<input type="submit" value="Submit Form Data" onClick="go()"/>
</form>

