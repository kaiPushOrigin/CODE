<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

  <title>Welcome</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap-jasny/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-jasny/dist/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="bootstrap-jasny/examples/navmenu-push/navmenu-push.css" rel="stylesheet">
  <link href="stylesheets/dashboard.css" rel="stylesheet">



  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
      .btn-sm{
        padding-top:16px;
      }
      </style>
    </head>

    <body>

     <div class="container-fluid">
      <div class="row">
<?php include "php/db.php"; ?>


<form id="form1" name="form1" action="characteristics.php"
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

</div>
</div>




          <!-- /END THE FEATURETTES -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/dist/jquery.min.js"></script>
    <script src="bootstrap-jasny/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-jasny/js/offcanvas.js"></script>
    <!-- <script src="javascript/docs.min.js"></script> -->
  </body>
  </html>