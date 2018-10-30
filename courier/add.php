<html>
<head>
    <title>Add Data</title>
</head>
  <!--		<td>couriername</td>
  <!--		<td>courieraddress</td>
  <!--		<td>courierdescr</td>
-->

<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $couriername = $_POST['couriername'];
    $courieraddress = $_POST['courieraddress'];
    $courierdescr = $_POST['courierdescr'];
        
    // checking empty fields
    if(empty($couriername) || empty($courieraddress) || empty($courierdescr)) {                
        if(empty($couriername)) {
            echo "<font color='red'>couriername field is empty.</font><br/>";
        }
        
        if(empty($courieraddress)) {
            echo "<font color='red'>courieraddress field is empty.</font><br/>";
        }
        
        if(empty($courierdescr)) {
            echo "<font color='red'>courierdescr field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO userss(couriername,courieraddress,courierdescr) VALUES('$couriername','$courieraddress','$courierdescr')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>