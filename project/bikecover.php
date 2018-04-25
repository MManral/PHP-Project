<?php
$connect = mysqli_connect("localhost", "root", "", "autokart"); 
?>
<html>
<head>
<style>
ul {
  list-style-type: none;
}


   </style>
</head>
<body>
<ul>
<li>

<img src="../project/bike/b7a.jpeg" width="300" height="300" "></li>
<li><input type="hidden" name="amount" value="120"><h2>&#8377;120</h2></li>
</ul>

<br />  
           <div class="container" style="width:300px;">  
                <br />  
                <?php  
                $query = "SELECT * FROM tbl_product where id=22 ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">&#8377; <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div> 
<?php  
                     }  
                }  
                ?>  				
           </body>  
 </html>  
</body>
</html>
<?php
?>