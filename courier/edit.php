<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
 //   $Id = $_POST['Id'];    
    $Username=$_POST['Username'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];    
    
	

    // checking empty fields
    if(empty($Id) || empty($Username) || empty($Email) || empty ($Password)) {  	
        if(empty($Username)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($Username)) {
            echo "<font color='red'>Username field is empty.</font><br/>";
        }
        
        if(empty($Email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
        if(empty($Password)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE users SET name='$name',Username='$Username',Email='$Email',Password='$Password' WHERE Id=$Id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: indexx.html");
    }
}
?>
<?php
//getting id from url
 
//selecting data associated with this particular Id
$result = mysqli_query($mysqli, "SELECT * FROM users ");
 
while($res = mysqli_fetch_array($result))
{
   // $Username = $res['Username'];
  //  $Email = $res['Email'];
  //  $Password = $res['Password'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="../index.html">Home</a><br/>
    <br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Username</td>
                <td><input type="text" name="Username" value="<?php echo $Username;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="Email" value="<?php echo $Email;?>"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="Password" value="<?php echo $Password;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>