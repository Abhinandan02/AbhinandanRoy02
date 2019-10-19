
<?php
// session_start();
include('config.php');
//$email=$_SESSION['email'];
$query=mysqli_query($connect,"select * from guest");
//$row2=mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>GUEST DETAILS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <center>
        <div class="bg-primary text-center col-sm-12">
			<p class="lead text-white">GUEST LOGIN DETAILS</p>
		</div>
        <table border="2" class="table table-hover">
            <tr style="background-color:grey;">
                <td style="color:white;">ID</td>
                <td style="color:white;">NAME</td>
                <td style="color:white;">MOBILE NUMBER</td>
                <td style="color:white;">PASSWORD</td>
                
               
            </tr>
<?php
			$c=1;
			while($row=mysqli_fetch_assoc($query))
			{
                ?>
                <tr>
					<td><?php echo $c; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['password']; ?></td>
					

					
            </tr>
            <?php
$c++;	
}
?>
</table><br>
<button><a href="login.php">LOG OUT</a></button>
</center>
</body>
</html>