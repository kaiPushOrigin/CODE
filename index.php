
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

  <title>SMUNav</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap-jasny/dist/css/bootstrap.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->

      <!-- Custom styles for this template -->
      <link href="stylesheets/carousel.css" rel="stylesheet">
      <link href="stylesheets/signin.css" rel="stylesheet">
    </head>
<!-- NAVBAR
  ================================================== -->
 

<?php include "php/db.php"; ?>
   <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">SELECT YOUR PROVINCE</a>
        </div>
          <ul class="nav navbar-nav">
<form id="form1" name="form1" action="province.php"
            method="post">

<?php

$sql = "SELECT distinct Prov_Name FROM data_pl GROUP BY Prov_Name;";

$result = mysql_query($sql)
        or die(mysql_error());
if ($result != 0) {
    
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
<input type="submit" value="Submit!" onClick="test()" />
</form>


        </ul>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/t2.jpg" alt="First slide" class = "img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <h1>CANDIFICATION</h1>
              <p>The app displays census information for your favorite province or city. <br />
                 Our goal is to make this information accessible to general public, govt. and big corporation.<br/>
			
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/t1.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>What is CANDIFICATION</h1>
              <p>To get started, select your favorite province to start with :<br />

			Select your favorite city.<br />

			Select what you want to know about.<br />

			See the result on an interactive map.</p></p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">VISIT APP</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="img/test.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>What Else?</h1>
                <p>One World. One Data. Yours.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">VISIT APP</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- /.carousel -->
      </div> <!-- /container -->

 <script>
          function visitApp()
          {
          window.open("welcome.html", "_self");
          }
            </script>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


    <!-- /END THE FEATURETTES -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="bootstrap-jasny/dist/js/bootstrap.min.js"></script>

    <script src="javascript/holder.js"></script>

  </body>
  </html>
