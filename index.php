<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">

  <title>Anasayfa</title>
</head>
<body>


<?php include 'index_header.php';?>

<div class="full-screen">
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="">
          <img src="img/ash.jpg" alt="Los Angeles" style="width:100%; "></a>
      </div>

      <div class="item">
        <a  href="">
          <img src="img/pikka.jpg" alt="Chicago" style="width:100%;"></a>
      </div>
    
      <div class="item">
        <a href="">
          <img src="img/pikachu.jpg" alt="New york" style="width:100%;"></a>
      </div>

      <div class="item">
        <a href="">
          <img src="img/pokeball.jpg" alt="sdsd" style="width:100%;"></a>
      </div>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<footer id="altfooter">
 <p>Copyright 2021 | Tüm haklar saklıdır.</p>
</footer>

</body>

</html>
