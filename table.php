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
$query=mysqli_query($connect,"select * from project ");
//$row2=mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>SHOW DATA</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <center>
        <!-- <h1>REGISTRATION DETAIL'S</h1><br> -->
        <div class="bg-primary text-center col-sm-12">
			<p class="lead text-white">REGISTRATION DETAILS</p>
		</div>
        <table border="2" class="table table-hover" >
            <tr style="background-color:grey;">
                <td style="color:white;" >ID</td>
                <td style="color:white;">FULL NAME</td>
                <td style="color:white;">MOBILE NO</td>
                <td style="color:white;">EMAIL</td>
                <td style="color:white;">PASSWORD</td>
                <td style="color:white;">PRESENT ADDRESS</td>
                <td style="color:white;">PERMANENT ADDRESS</td>
                <td style="color:white;">CITY</td>
                <td style="color:white;">STATE</td>
                <td style="color:white;">PIN</td>
                <td style="color:white;">DOB</td>
                <td style="color:white;">GENDER</td>
                <td style="color:white;">BLOOD GROUP</td>
                <td style="color:white;">IDENTITY PROOF</td>
                <td style="color:white;">NUMBER</td>
                <td style="color:white;">OTP</td>
</tr>
<?php
			$c=1;
			while($row=mysqli_fetch_assoc($query))
			{
                ?>
                <tr>
					<td><?php echo $c; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['mob']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo $row['praddr']; ?></td>
                    <td><?php echo $row['peaddr']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['pin']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['bloodgroup']; ?></td>
                    <td><?php echo $row['identity']; ?></td>
                    <td><?php echo $row['number']; ?></td>
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