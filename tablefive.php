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
$query=mysqli_query($connect,"select * from polio ");
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
        <!-- <h1>POLIO DETAIL'S</h1><br> -->
        <div class="bg-primary text-center col-sm-12">
			<p class="lead text-white">POLIO DETAILS</p>
		</div>
        <table border="2" class="table table-hover" >
            <tr style="background-color:grey;">
                <td style="color:white;">ID</td>
                <td style="color:white;">NAME</td>
                <td style="color:white;">FATHER'S NAME</td>
                <td style="color:white;">MOTHER'S NAME</td>
                <td style="color:white;">DATE OF BIRTH</td>
                <td style="color:white;">ADDRESS</td>
                <td style="color:white;">GENDER</td>
                <td style="color:white;">CITY</td>
                <td style="color:white;">STATE</td>
                <td style="color:white;">PIN</td>
                <td style="color:white;">EMAIL ID</td>
                <td style="color:white;">MOBILE NUMBER</td>
                <td style="color:white;">OTP</td>

</tr>
<?php

$c=1;
while($row=mysqli_fetch_assoc($query)){
    ?>
<tr>
<td><?php echo $c; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['mname']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['state']; ?></td>
<td><?php echo $row['pin']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mob']; ?></td>
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






