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
$queryone=mysqli_query($connect,"select * from ward");
//$row2=mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>DETAILS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <center>
        

<div class="row border border-default">
	
		<div class="bg-primary text-center col-sm-12">
			<p class="lead text-white">WARD TICKET DETAIL'S</p>
		</div>
	
	
		<div class="bg-secondary text-white col-sm-1 text-center d-block d-sm-block">
			<p>ID</p>
		</div>
		<div class="bg-secondary text-white col-sm-1 text-center d-block d-sm- ">
			<p>WARD NAME</p>
		</div>
		<div class="bg-secondary text-white col-sm-1 text-center d- d-sm-block">
			<p>PATIENT NAME</p>
		</div>
		<div class="bg-secondary text-white col-sm-1 text-center d-block d-sm-block ">
			<p>AGE</p>
		</div>
		<div class="bg-secondary text-white col-sm-1 text-center d- d-sm-block">
			<p>ADDRESS</p>
		</div>
		<div class="bg-secondary text-white col-sm-1 text-center d-block d-sm-block ">
			<p>CITY</p>
		</div>
		<div class="bg-secondary text-white col-sm-1 text-center d-block d-sm-block">
			<p>STATE</p>
		</div>
		<div class="bg-secondary text-white col-sm-1 text-center d-block d-sm-block ">
			<p>PIN CODE</p>
		</div>
        <div class="bg-secondary text-white col-sm-1 text-center d-block d-sm-block ">
			<p>GENDER</p>
		</div>
        <div class="bg-secondary text-white col-sm-1 text-center d-block d-sm-block ">
			<p>MOBILE</p>
		</div>
        <div class="bg-secondary text-white col-sm-1 text-center d-block d-sm-block ">
			<p>DATE_ISSUE</p>
		</div>
        <div class="bg-secondary text-white col-sm-1 text-center d-block d-sm-block ">
			<p>ISSUE_TIME</p>
		</div>
        

        
        <?php
			$c=1;
			while($row=mysqli_fetch_assoc($queryone))
			{
                ?>
	
		<div class="col-sm-1 text-center d-block d-sm-block ">
        <?php echo $c; ?>
		</div>
		<div class="col-sm-1 text-center d-block d-sm-block ">
        <?php echo $row['Department_name']; ?>
		</div>
		<div class="col-sm-1 text-center d-block d-sm-block ">
		<?php echo $row['Patient_name']; ?>
		</div>
		<div class="col-sm-1 text-center d-block d-sm-block ">
        <?php echo $row['Age']; ?>
		</div>
		<div class="col-sm-1 text-center d-block d-sm-block ">
        <?php echo $row['Address']; ?>
		</div>
	

		<div class="col-sm-1 text-center d-block d-sm-block ">
        <?php echo $row['City']; ?>
		</div>
		<div class="col-sm-1 text-center d-block d-sm-block ">
        <?php echo $row['State']; ?>
		</div>
		<div class="col-sm-1 text-center d-block d-sm-block ">
        <?php echo $row['Pin']; ?>
		</div>
		<div class="col-sm-1 text-center d-block d-sm-block ">
        <?php echo $row['Gender']; ?>
		</div>
		<div class="col-sm-1 text-center d-block d-sm-block ">
        <?php echo $row['Mobile_no']; ?>
		</div>
	
	
		<div class="col-sm-1 text-center d-block d-sm-block ">
        <?php echo $row['Date_of_issue']; ?>
		</div>
		<div class="col-sm-1 text-center d-block d-sm-block ">
        <?php echo $row['Issue_time']; ?>
		</div>
		

</div>
<?php
$c++;	
}
?>
<button><a href="login.php">LOGOUT</a></button>
</body>
</html>