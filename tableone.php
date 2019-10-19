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
$query=mysqli_query($connect,"select * from ticketone ");
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
	
    <div class="bg-primary text-center col-sm-12">
        <p class="lead text-white">APPOINTMENT DETAIL'S</p>
    </div>
    <table border="2" class="table table-hover">
    <tr style="background-color:grey;">
    <td style="color:white;">ID</td>
    <td style="color:white;">DEPARTMENT NAME</td>
    <td style="color:white;">PATIENT NAME</td>
    <td style="color:white;">FATHER'S NAME</td>
    <td style="color:white;">AGE</td>
    <td style="color:white;">ADDRESS</td>
    <td style="color:white;">GENDER</td>
    <td style="color:white;">EMAIL ID</td>
    <td style="color:white;">MOBILE NUMBER</td>
    <td style="color:white;">DATE OF ISSUE</td>
    <td style="color:white;">ISSUE TIME</td>
    <td style="color:white;">OTP</td>
    </tr>

    <?php
        $c=1;
        while($row=mysqli_fetch_assoc($query))
        {
            ?>
    
    <tr>
    <td><?php echo $c; ?></td>
    <td><?php echo $row['dname']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['mob']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['time']; ?></td>
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






