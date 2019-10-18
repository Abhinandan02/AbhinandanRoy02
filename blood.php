<?php 
		session_start();
		if (!isset($_SESSION['email'])) { 
            header('location:login.php');
        }
        

        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>DONATE BLOOD</title>
        <script type="text/javascript" src="jquerycdn.js"></script>
</head>
<body>
<?php 
 echo date('d-m-y');?>
 <button><a href="login.php">EXIT</a></button>
 <center>
    <h2 style="color:red;"><b><i>DONATE BLOOD!! SAVE LIFE</i></b></h2>
    <h4><b>SEARCH FOR THE BLOOD GROUP </b></h4>
    <form action="datathree.php" method="post" enctype="multipart/form-data">
NAME: <input type="text" name="name" required="" placeholder="Enter Your Name"><br><br>
BLOOD TYPE: <select name="bloodtype">
<option value="">select blood group</option>
<option value="a+">A+</option>
<option value="a-">A-</option>
<option value="b+">B+</option>
<option value="b-">B-</option>
<option value="o+">O+</option>
<option value="o-">O-</option>
<option value="ab+">AB+</option>
<option value="ab-">AB-</option>
</select><br><br>
GENDER: <input type="radio" name="gender" value="male">MALE
<input type="radio" name="gender" value="female">FEMALE
<input type="radio" name="gender" value="other">OTHER<br><br>
MOBILE NUMBER: <input type="text" name="mob" required="" placeholder="Enter Your Mobile/Phone Number"><br><br>
EMAIL: <input type="email" name="email" required="" placeholder="Enter Your Email Id"><br><br>

<input type="submit" name="submit">
</form>
</center>
</body>
    </html>
