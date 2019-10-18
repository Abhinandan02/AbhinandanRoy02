<?php 
		session_start();
		if (!isset($_SESSION['email'])) { 
            header('location:login.php');
        }
        

        ?>
<!DOCTYPE html>
<html>
<head>
<title>WARD TICKET</title>
<script type="text/javascript" src="jquerycdn.js"></script>
</head>
<body>
<?php 
 echo date('d-m-y');?>

<button><a href="login.php">EXIT</a></button>
<center>

<h3><b> WARD TICKET</b></h3>
<form action="datatwo.php" method="post" enctype="multipart/form-data">
WARD NAME: <input type="text" name="dname" required="" placeholder="Enter Department Name"><br><br>
PATIENT NAME: <input type="text" name="pname" required="" placeholder="Enter Patient Name"><br><br>
AGE: <input type="text" name="age" placeholder="Enter Your Age"><br><br>
ADDRESS: <input type="text" name="address" placeholder="Enter Patients Address"><br><br>
CITY: <input type="text" name="city" required="" placeholder="ENTER YOUR CITY NAME"><br><br>
STATE: <input type="text" name="state" required="" placeholder="ENTER YOUR STATE NAME"><br><br>
PIN CODE: <input type="text" name="pin" required="" placeholder="ENTER YOUR PIN CODE"><br><br>
GENDER: <input type="radio" name="gender" value="male" checked="">MALE
<input type="radio" name="gender" value="female">FEMALE
<input type="radio" name="gender" value="other">OTHER<br><br>
MOBILE NUMBER: <input type="text" name="mob" required="" placeholder="Enter Your Mobile/Phone Number"><br><br>
DATE OF ISSUE: <input type="date" name="doi"><br><br>

<input type="submit" name="submit">
</form>
</center>
</body>
</html>