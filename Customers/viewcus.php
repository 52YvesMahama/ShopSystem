<?php
//including the database connection file
include_once("configg.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Customers</title>
</head>
 
<body>
    <a href="#">View Customers</a><br/><br/>
	<body style="background-color:#d9d9d9;">

 
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Id</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['Id']."</td>";
            echo "<td>".$res['Username']."</td>";
            echo "<td>".$res['Email']."</td>";    
            echo "<td>".$res['Password']."</td>";    
            echo "<td><a href=\"edit.php?Id=$res[Id]\">Edit</a> | <a href=\"delete.php?Id=$res[Id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>