
  <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon"> 
<?php
if(!@fsockopen("www.google.com", 80))
{
?>
  <link rel="stylesheet" type="text/css" href="vendors/fontawesome-5.13.0/css/all.css">
  <link rel="stylesheet" href="vendors/bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.min.css">
  <script src="vendors/bootstrap-4.3.1/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
  <script src="vendors/jquery-1.12.4.min.js"></script>
  <link href="vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
  <script src="vendors/jGrowl/jquery.jgrowl.js"></script>
<?php
  }
  else{
?>
  <!--Online Scripts-->
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.7/jquery.jgrowl.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.7/jquery.jgrowl.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php
  }
?>
