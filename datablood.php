<?php 
		session_start();
		if (!isset($_SESSION['email'])) { 
            header('location:login.php');
        }
        

        ?>
<?php

    include('config.php');
    $name=$_POST['name'];
    $bloodtype=$_POST['bloodtype'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mob'];
    $email=$_POST['email'];
    $otp=rand();

    $querytwo = mysqli_query($connect,"INSERT INTO blood(name,blood_type,gender,mobile,email,otp)
VALUES('$name','$bloodtype','$gender','$mobile','$email','$otp')");
        if($querytwo==true){
            include('actionblood.php');
        }
        else{
            echo"error found!!!";
        }
    ?>