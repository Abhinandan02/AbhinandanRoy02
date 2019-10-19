<?php 
		session_start();
		if (!isset($_SESSION['email'])) { 
            header('location:login.php');
        }
        

        ?>
<?php
// session_start();
include('config.php');
//$email=$_SESSION['email'];
$querytwo=mysqli_query($connect,"select * from blood");
//$row2=mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>BLOOD DETAILS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <center>
        <div class="bg-primary text-center col-sm-12">
			<p class="lead text-white">BLOOD SEARCH DETAILS</p>
		</div>
        <table border="2" class="table table-hover">
            <tr style="background-color:grey;">
                <td style="color:white;">ID</td>
                <td style="color:white;">NAME</td>
                <td style="color:white;">BLOOD TYPE</td>
                <td style="color:white;">GENDER</td>
                <td style="color:white;">MOBILE</td>
                <td style="color:white;">EMAIL</td>
                <td style="color:white;">OTP</td>
               
            </tr>
<?php
			$c=1;
			while($row=mysqli_fetch_assoc($querytwo))
			{
                ?>
                <tr>
					<td><?php echo $c; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['blood_type']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['otp']; ?></td>
					

					
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