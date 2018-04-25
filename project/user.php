
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="http://localhost/project/bootstrap/css/bootstrap.min.css">
  <script src="http://localhost/project/bootstrap/js1/jquery.min.js"></script>
  <script src="http://localhost/project/bootstrap/js/bootstrap.min.js"></script>
<link rel="icon" href="tango.PNG" type="image/png" size="16x16">
</head>
<style>
.float_img{
float:left;
width:15%;
border:1px solid;
}
.right{
position:absolute;
right:10px;
width:300px;
top:0px;
  }
</style>

<body>
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
<li><a href="exterior.php">exterior</a>
<li><a href="spare.php">spare parts</a></ul>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="">bikes
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="accessories.php">accessories</a></ul>

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
</nav>
<img src="../project/extraimg/1.jpg" width="100%" >
</body>
</html>
<?php
if(isset($_REQUEST['lgout'])){

				
		
				session_unset(); 
				session_destroy(); 
				
			}
		
?>