<?php 
//including the database connection file 
include_once("connect.php"); 
  
//fetching data in descending order (lastest entry first) 
$ReadSql = "SELECT * FROM users"; 
$result = mysqli_query($connection, $ReadSql);  
?> 
  
<html> 
<head>     
    <title>View Customers</title> 
</head> 
	<h1>Customers registered</h1>
<body style="background-color:#d9d9d9;">
<!--
    <a href="addcustomers.html">Add Customers</a><br/><br/> 
  -->
    <table width='50%' border=0> 
        <tr bgcolor='#CCCCCC'> 
			<td>id</td> 
            <td>User name</td> 
            <td>Email</td> 
        </tr> 
        <?php  
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array  
        while($res = mysqli_fetch_array($result)) {          
            echo "<tr>"; 
            echo "<td>".$res['Id']."</td>"; 
            echo "<td>".$res['Username']."</td>"; 
            echo "<td>".$res['Email']."</td>";     
 echo "<td><a href=\"editddd.php?Id=$res[Id]\">Edit</a> | <a href=\"delete.php?id=$res[Id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";         
        } 
        ?> 
    </table> 
</body> 
</html> 