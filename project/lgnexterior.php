<html>
<head>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/project/bootstrap/css/bootstrap.min.css">
  <script src="http://localhost/project/bootstrap/js1/jquery.min.js"></script>
  <script src="http://localhost/project/bootstrap/js/bootstrap.min.js"></script>
<link rel="icon" href="tango.PNG" type="image/png" size="16x16">
</head>
<style>
ul.float_img li{
display:inline-block;
vertical-align: top;
*display: inline;
*zoom: 2;
height:300px;
width: 300px;
border:0px solid white;
}
.right{
position:absolute;
right:10px;
width:300px;
top:0px;
  }
</style>

<body bgcolor="#000f"  >
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">Buy</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="index.php">home</a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="">cars
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="lgninterior.php">interior</a>
<li><a href="lgnexterior.php">exterior</a>
<li><a href="lgnspare.php">spare parts</a></ul>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="">bikes
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="lgnaccessories.php">accessories</a></ul>
</ul>


<div class="right">
<ul class="nav navbar-nav">

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="">Account
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="accessories.php">edit details</a>
<li><a href="index.php"><button type="button" value="logout" name="lgout"><span class="glyphicon glyphicon-off"></span></a></button>
</ul>


<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>cart</a></li>
</ul>
</div>    
</nav><br><br><br><br><br>
<ul class="float_img"><li>
<a href="mudgaurds.php"><img src="../project/exterior/ex1.jpeg" width="200" height="200" ></a><h4>mud gaurds</h4></li><li>
<a href="doorgaurd.php"><img src="../project/exterior/ex2.jpeg" width="200" height="200" ></a><h4>door gaurds</h4></li><li>
<a href="wheellock.php"><img src="../project/exterior/ex3a.jpeg" width="200" height="200"onmouseover="this.src='../project/exterior/ex3b.jpeg';"onmouseout="this.src='../project/exterior/ex3a.jpeg';" ></a><h4>wheel lock</h4></li>
</ul>
</body>
</html>
<?php
?>