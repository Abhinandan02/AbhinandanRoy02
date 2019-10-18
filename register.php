
<!DOCTYPE html>

<html>
<head>
<title>REGISTRATION PAGE</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="jquerycdn.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
  
body{
  background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
}







</style>
</head>

<body>
<?php 
 echo date('d-m-y');?>
 <p id="time"></p>
<script>

setInterval(function() {
    var currentTime = new Date ( );    
    var currentHours = currentTime.getHours ( );   
    var currentMinutes = currentTime.getMinutes ( );   
    var currentSeconds = currentTime.getSeconds ( );
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
    document.getElementById("time").innerHTML = currentTimeString;
     document.getElementById("date").innerHTML = new Date();
}, 1000);
</script>
<button><a href="login.php">LOGOUT</a></button>
<center>

<?php
//include('config.php');

$connect=mysqli_connect('localhost','root','','medical');

  if ($connect==true) {
    if(isset($_POST['submit'])){

$name = trim($_POST['name']);
$mob= trim($_POST['mob']);
$moblength=strlen($mob);
$email= trim($_POST['email']);
$pwd = trim($_POST['password']);
$cpwd= trim($_POST['cpassword']);
$ok=strlen($password);
$padd=trim($_POST['praddr']);
$paddr=trim($_POST['peaddr']);
$city=trim($_POSt['city']);
$state=trim($_POST['state']);
$pin=trim($_POST['pin']);
$dob= $_POST['dob'];
$gender = $_POST['gender'];
$bloodg=$_POST['bloodgroup'];
$iproof=$_POST['identity'];
$number=trim($_POST['text']);

$otp=rand();

$query = mysqli_query($connect,"INSERT INTO project(name,mob,email,password,praddr,peaddr,city,state,pin,dob,gender,bloodgroup,identity,number)
VALUES('$name','$mob','$email','$pwd','$padd','$paddr','$city','$state','$pin','$dob','$gender','$bloodg','$iproof','$number')");
$row=mysqlI_fetch_assoc($query);

if (!empty($name)) {
    if (preg_match("/^[a-zA-Z ]+$/", $name)) {
      if (!empty($mob)) {
        if ($moblength==10){
         if (preg_match("/^[0-9]+$/", $mob)){
          if($ok>4){
           if(preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z!@#$%]{8,12}+$/', $pwd)){
            if ($pwd===$cpwd) {
             if ($email!==$row['email']) {
              //include('table.php');
              //include('action.php');
            }
            else{ $erroremail="email already exits";   }
          }
          else{ $errorcpwd="password mismatched";   }
        }else {$errorpwd="password wrongformat";}
      }
      else{ $errorpwd="please enter password more than 4 ";   }
    }
    else{$errormob="please enter mobile num only digit"; }
  }
  else { $errormob="please enter mobile num only 10 digit";}
}
else
  { $errormob="please enter mobile num";}
}
else
{ $errorname="wrong format";}
}
else { $errorname="please enter name";}
}
}
?>


<h3><b>WELCOME TO REGISTRATION PAGE</b></h3>
<form action="dataregister.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="UserName">NAME</label>
    <input type="text" class="form-control" id="name" name="name" required="" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="MobileNumber">MOBILE NUMBER</label>
  <input type="text" class="form-control" name="mob" required="" placeholder="ENTER YOUR MOBILE NUMBER">
</div>
<div class="form-group">
    <label for="Email">EMAIL</label>
<input type="email" class="form-control" name="email" required="" placeholder="ENTER YOUR EMAIL">
</div>
<div class="form-group">
    <label for="Password">PASSWORD</label>
<input type="password" class="form-control" name="password" required="" placeholder="ENTER YOUR PASSWORD">
</div>
<div class="form-group">
    <label for="CPassword">CONFIRM PASSWORD</label>
<input type="password" class="form-control" name="cpassword" required="" placeholder="CONFIRM YOUR PASSWORD">
</div>
<div class="form-group">
    <label for="PresentAddress">PRESENT ADDRESS</label> 
<input type="text" class="form-control" name="praddr" required="" placeholder="ENTER YOUR PRESENT ADDRESS">
</div>

<div class="form-group">
  <label for="PermanentAddress">PERMANENT ADDRESS</label>
  <input type="text" class="form-control" name="peaddr" required="" placeholder="ENTER YOUR PERMANENT ADDRESS">
</div>
<div class="form-group">
    <label for="City">CITY</label>
<input type="text" class="form-control" name="city" required="" placeholder="ENTER YOUR CITY NAME">
<label for="State">STATE</label>
<input type="text" class="form-control" name="state" required="" placeholder="ENTER YOUR STATE NAME">
<label for="Pincode">PIN CODE</label>
<input type="text" class="form-control" name="pin" required="" placeholder="ENTER YOUR PIN CODE">
</div>
<div class="form-group">
    <label for="DOB">DATE OF BIRTH</label>
<input type="date" class="form-control" name="dob" required="">
</div>
<div class="form-group">
    <label for="Gender">GENDER</label>
    </div>
    <div class="form-group">    
<input type="radio"   name="gender" value="male">MALE
<input type="radio"  name="gender" value="female">FEMALE
<input type="radio"  name="gender" value="other">OTHER
</div>
<div class="form-group">
    <label for="BloodGroup">BLOOD GROUP</label>
    </div>
    <div class="form-group">
<select name="bloodgroup">
<option value="">enter blood group</option>
<option value="a+">A+</option>
<option value="a-">A-</option>
<option value="b+">B+</option>
<option value="b-">B-</option>
<option value="o+">O+</option>
<option value="o-">O-</option>
<option value="ab+">AB+</option>
<option value="ab-">AB-</option>
</select>
</div>
<div class="form-group">
    <label for="Identity">IDENTITY</label>
    </div>
    <div class="form-group">
<select name="identity">
<option value="">please select</option>
<option value="aadharcard">AADHARCARD</option>
<option value="pancard">PANCARD</option>
</select>
<input type="text" class="form-control" name="text" placeholder="ENTER YOUR CARD NUMBER">
</div>

<button type="submit" class="btn btn-default btn-lg">Submit</button>
<a href="login.php" class="pull-right btn btn-block btn-danger" > Already Register ?   </a>

</form>


</center>
</body>
</html>