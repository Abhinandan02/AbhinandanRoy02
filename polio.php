<?php 
		session_start();
		if (!isset($_SESSION['email'])) { 
            header('location:login.php');
        }
        

        ?>
<!DOCTYPE html>
<html>
<head>
<title>POLIO AGENCY</title>
<script type="text/javascript" src="jquerycdn.js"></script>
</head>
<body>
<?php 
 echo date('d-m-y');?>
 <br>

<button><a href="login.php" style="float:left;">EXIT</a></button>
 <center>

 <h2><b>GO GO POLIO..</b></h2>
 <h4>REGISTER FOR POLIO</h4>
 <form data="datafour.php" method="post" enctype="multipart/form-data">
 NAME: <input type="text" name="name" required="" placeholder="Enter Childs Name"><br><br>
 FATHERS NAME: <input type="text" name="fname"  placeholder="Enter Fathers Name"><br><br>
 MOTHERS NAME: <input type="text" name="mname"  placeholder="Enter Mothers Name"><br><br>
 DATE OF BIRTH: <input type="date" name="dob"><br><br>
 GENDER: <input type="radio" name="gender" value="male">MALE
 <input type="radio" name="gender" value="female">FEMALE
 <input type="radio" name="gender" value="other">OTHER<br><br>
 ADDRESS: <input type="text" name="address"  placeholder="Enter Your Address"><br><br>
 CITY: <input type="text" name="city"  placeholder="Enter Your City">
 STATE: <input type="text" name="state"  placeholder="Enter Your State">
 PIN: <input type="text" name="pin"  placeholder="Enter your Pin Code"><br><br>
 EMAILID: <input type="email" name="email" placeholder="Enter Your Email Id"><br><br>
 MOBILE NUMBER: <input type="text" name="mob"  placeholder="Enter Your Mobile/Phone Number"><br><br>
<input type="submit" name="submit">
</form>
 </center>
</body>
</html>