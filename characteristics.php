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
