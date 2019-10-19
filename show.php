<?php
session_start();
include('config.php');
$email=$_SESSION['email'];
if(!isset($_SESSION["email"]))
{
    
}
    
    // echo $password=$_POST['password'];

$queryone=mysqli_query($connect,"select * from blood where email='$email'");
$querytwo=mysqli_query($connect,"select * from polio where email='$email'");
$querythree=mysqli_query($connect,"select * from ticketone where email='$email'");

//$row2=mysqli_fetch_assoc($query);

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>PROFILE DETAILS</title>
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
			while($row=mysqli_fetch_assoc($queryone))
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
        while($row=mysqli_fetch_assoc($querythree))
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
while($row=mysqli_fetch_assoc($querytwo)){
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