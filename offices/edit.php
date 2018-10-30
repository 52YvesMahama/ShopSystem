<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
 //   $id = $_POST['id'];    
    $officefuncion=$_POST['officefuncion'];
    $officename=$_POST['officename'];
  //  $Password=$_POST['Password'];    
    
	

    // checking empty fields
    if(empty($id) || empty($officefuncion) || empty($officename){ 	
        if(empty($officefuncion)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
               
        if(empty($officename)) {
            echo "<font color='red'>officename field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE users SET name='$name',officefuncion='$officefuncion',officename='$officename' WHERE id=$id");
        
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