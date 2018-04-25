<?php
$connect = mysqli_connect("localhost", "root", "", "autokart"); 
?>
<html>
<head>
<body>
<?php  
                $query = "SELECT  u_name FROM signup"; 
		 $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
				
                 <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">U_name</th>  
                               <th width="10%">email</th>  
                               <th width="20%">mobile</th>  
                                 
                          </tr> 
<tr>  
                               <td><?php echo $row["U_name"]; ?></td> </tr>						  
                           
                            
                           
                          
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  