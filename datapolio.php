<?php 
		session_start();
		if (!isset($_SESSION['email'])) { 
            header('location:login.php');
        }
        

        ?>
<?php

    include('config.php');
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $email= $_POST['email'];
    $mob= $_POST['mob'];
    $otp=rand();
    



    $query = mysqli_query($connect,"INSERT INTO polio(name,fname,mname,dob,gender,address,city,state,pin,email,mob,otp)
VALUES('$name','$fname','$mname','$dob','$gender','$address','$city','$state','$pin','$email','$mob','$otp')");
        if($query==true){
        include("actionpolio.php");
        }
        else{
            echo"error found!!!";
        }
    ?>