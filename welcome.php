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
  <script src="javascripts/global_var.js"></script>

<style>
      html, body, #map-canvas {
        height: 100%;
        margin-top: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    

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
?>







<script>
// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.
// The maximum width of the info window is set to 200 pixels.
var myLatlng;
function initialize() {



var NovaLat = 45.000150;   
var ScotiaLon = -62.998653;
myLatlng = new google.maps.LatLng(NovaLat, ScotiaLon);
console.log("Success3");

   
  var mapOptions = {
    zoom: 4,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  
  var str1 = "Total people with Topic ";
  var str2 = '<?php echo $topic; ?>';
  var str3 = " of ";
  var str4 = '<?php echo $char; ?>';
  var str5 = " in province ";
  var str6 = '<?php echo $prov; ?>';
  var str7 = " in city ";
  var str8 = '<?php echo $cit; ?>';
  var str9 = " are ";
  var str10 = '<?php echo $name; ?>';
  
  var contentString = str1.concat(str2,str3,str4,str5,str6,str7,str8,str9,str10);

  var infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 200
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Uluru (Ayers Rock)'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>



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

<?php
include("php/db.php");
?>


     <div id="map-canvas"></div>

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