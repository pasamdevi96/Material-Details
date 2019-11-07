<?php  
$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password);  
	   
	   $id = $_POST['id'];
	   $name = $_POST['name'];
	   $bname = $_POST['bname'];
	   $date = $_POST['date'];
   $sql = "INSERT INTO connection (id, name, bname, date) 
  			  VALUES('$id', '$name', '$bname', $'date')";   
$result = mysql_query($conn,$sql);  
while($row = mysqli_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->id;?>  	
        </td>  
        <td>  
            <?php echo $row->name;?>  
        </td>  
        <td>  
            <?php echo $row->bname;?>  
        </td>  
        <td>  
            <?php echo $row->lname;?>  
        </td>  
        <td>  
            <?php echo $row->date;?>  
        </td>  
       <?php echo done ?>  
        </a> </td>  
        </tr>  
  <?php } ?> 