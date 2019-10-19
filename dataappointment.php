<?php 
		session_start();
		if (!isset($_SESSION['email'])) { 
            header('location:login.php');
        }
        

        ?>
<?php

    include('config.php');
    $dname = $_POST['dname'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $email= $_POST['email'];
    $mob= $_POST['mob'];
    $date= $_POST['date'];
    $time=$_POST['time'];
    $otp=rand();


    $query = mysqli_query($connect,"INSERT INTO ticketone(dname,name,fname,age,address,gender,email,mob,date,time,otp)
VALUES('$dname','$name','$fname','$age','$address','$gender','$email','$mob','$date','$time','$otp')");
        if($query==true){
            include("actionticket.php");
        }
        else{
            echo"error found!!!";
        }
    ?>