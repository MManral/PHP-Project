
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
.center {
    margin: auto;
    width: 40%;
    border: 3px solid grey;
    padding: 20px;
}
</style>

<body>
<form>
<form action="user.php" method="post">
<div class="container">
<div class="form-group">
<div class="center">
     <label for="Name">User name:</label>
      <input type="text" class="form-control" id="Name" placeholder="User name" style="width:30%" name="u_name" value="">
    </div>
<div class="form-group">
<div class="center">
     <label for="Name">password:</label>
      <input type="password" class="form-control" id="Name" placeholder="Password" style="width:30%" name="pass" value="">
    </div>
<div class="center">
   <button type="submit" class="btn btn-default" name="sub" >Submit</button>
</div>
</form>

<?php
if(isset($_REQUEST['sub'])){
session_start();
					$con=mysql_connect("localhost","root","") or die(" can not created");
					$db=mysql_select_db("autokart",$con);
					$query="select * from signup ";
					$data=mysql_query($query);
					$row=mysql_fetch_array($data);
					if($_REQUEST['u_name']==admin and $_REQUEST['pass']==admin){
					$direct="Location:".admin.".php";
					echo header($direct);}
					if($_REQUEST['u_name']==$row['u_name'] and $_REQUEST['pass']==$row['password'])
					{
					session_start();
					$_SESSION['value']=$_REQUEST['u_name'];
					$direct="Location:".user.".php";
					echo header($direct);
					}
					
				
				}
				
				
				
					?>
			</body>
</html>