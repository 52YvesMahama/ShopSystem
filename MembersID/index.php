<?php 
	include('conn.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP - OOP CRUD Operation</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="stylee.css">

</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin-left:auto; margin-right:auto; padding:auto; width:70%;">
		<span style="font-size:25px; color:blue"><strong>Members ID </strong></span>	
		<span class="pull-right"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:15px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				$query=$conn->query("select * from `member`");
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td>
							<a href="#edit<?php echo $row['memberid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['memberid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
		<?php
			if(isset($_SESSION['msg'])){
				?>
					<div class="alert alert-success">
						<center><?php echo $_SESSION['msg']; ?></center>
					</div>
				<?php
				unset($_SESSION['msg']);
			}
		?>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>