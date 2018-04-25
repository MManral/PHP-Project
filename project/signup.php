<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://localhost/project/bootstrap/css/bootstrap.min.css">
  <script src="http://localhost/project/bootstrap/js1/jquery.min.js"></script>
  <script src="http://localhost/project/bootstrap/js/bootstrap.min.js"></script>
</head>
<style>
.right{
position:absolute;
right:100px;
width:600px;
top:70px;
</style>
<body>
<form action="signup.php" method="post">

<div class="container">
 <h2 align="center">Sign Up</h2>
 
    <div class="form-group">
     <label for="Name">Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="FIRST NAME" style="width:30%" name="t1">
    </div>
    <div class="form-group">
      <label for="lstname">Lastname:</label>
      <input type="text" class="form-control" id="lstname" placeholder="LAST NAME" style="width:30%" name ="t2">
    </div>
<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="lstname" placeholder="EMAIL" style="width:30%" name="t3">
    </div>
<div class="form-group">
      <label for="pwd">password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="PASSWORD" style="width:30%" name="t4">
    </div>
<div class="form-group">
      <label for="mobile">Mobile:</label>
      <input pattern=".{10,}" class="form-control" id="mobile" maxlength="10" placeholder="MOBILE" style="width:30%" name="t5">
    </div>

    
    <button type="submit" class="btn btn-default" name="subt">Submit</button>

  
</div>
<div class="right">
<img src="../project/extraimg/line.jpg" width="100" height="500"  >
</div>

<?php
if(isset($_REQUEST['subt'])){

				$con=mysql_connect("localhost","root","") or die(" can not created");
				$db=mysql_select_db("autokart",$con);
				 $query="insert into signup (u_name,lastname,email,password,mobile) 		
				values('$_REQUEST[t1]','$_REQUEST[t2]','$_REQUEST[t3]','$_REQUEST[t4]','$_REQUEST[t5]')";
				$data=mysql_query($query);
				$direct="Location:".index.".php";
				echo header($direct);
				
			}
		
?>
</form>
</body>
</html>


