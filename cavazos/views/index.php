<!DOCTYPE html>
<html>
<head>
    <title>Cavazos Catering</title>
    <!-- Latest compiled and minified CSS -->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="img/fork.png"/>
    
</head>
<body>
<?php require_once 'navbar.php';?>
<?php require_once 'header.php';?>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
      height: 600px;
      border-style: solid;
  }
  body  {
    
    background-attachment: fixed;
  }
  </style>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
   <!--  <div class="item active">
      <img src="img/fam.jpg" alt="">
    </div> -->
    <div class="item active">
      <img src="img/party.jpg" alt="">
    </div>

    <div class="item">
      <img src="img/chicken.jpg" alt="">
    </div>

    <div class="item">
      <img src="img/cordon.jpg" alt="">
    </div>

    <div class="item">
      <img src="img/beef.jpg" alt="">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>



<?php require_once 'footer.php'; ?>
</body>


</html>


