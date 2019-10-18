<?php 
		session_start();
		if (!isset($_SESSION['email'])) { 
            header('location:login.php');
        }
        

        ?>
<!DOCTYPE html>
<html>
<head>
<title>APPOINTMENT</title>
<script type="text/javascript" src="jquerycdn.js"></script>
</head>
<body>
<?php 
 echo date('d-m-y');?>

<button><a href="login.php">EXIT</a></button>
<center>

<h3><b> APPOINTMENT </b></h3>
<form action="dataone.php" method="post" enctype="multipart/form-data">
DEPARTMENT NAME: <input type="text" name="dname" required="" placeholder="Enter Department Name"><br><br>
NAME: <input type="text" name="name" required="" placeholder="Enter Patient Name"><br><br>
FATHERS NAME: <input type="text" name="fname" placeholder="Enter Fathers Name"><br><br>
AGE: <input type="text" name="age" placeholder="Enter Your Age"><br><br>
ADDRESS: <input type="text" name="address" placeholder="Enter Patients Address"><br><br>
GENDER: <input type="radio" name="gender" value="male" checked="">MALE
<input type="radio" name="gender" value="female">FEMALE
<input type="radio" name="gender" value="other">OTHER<br><br>
EMAIL ID:<input type="email" name="email" required="" placeholder="Enter Your Email Id"><br><br>
MOBILE NUMBER: <input type="text" name="mob" required="" placeholder="Enter Your Mobile/Phone Number"><br><br>
DATE OF ISSUE: <input type="date" name="date"><br><br>
ISSUE TIME: <input type="text" name="time"><br><br>
<input type="submit" name="submit">
</form>
</center>
</body>
</html>