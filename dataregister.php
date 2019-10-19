
<?php

    include('config.php');
    $name = $_POST['name'];
    $mob= $_POST['mob'];
    $email= $_POST['email'];
    $pwd = $_POST['password'];
    $padd= $_POST['praddr'];
    $paddr= $_POST['peaddr'];
    $city= $_POST['city'];
    $state= $_POST['state'];
    $pin= $_POST['pin'];
    $dob= $_POST['dob'];
    $gender = $_POST['gender'];
    $bloodg=$_POST['bloodgroup'];
    $iproof=$_POST['identity'];
    $number= $_POST['text'];
    $otp=rand();


    $query = mysqli_query($connect,"INSERT INTO project(name,mob,email,password,praddr,peaddr,city,state,pin,dob,gender,bloodgroup,identity,number,otp)
VALUES('$name','$mob','$email','$pwd','$padd','$paddr','$city','$state','$pin','$dob','$gender','$bloodg','$iproof','$number','$otp')");
        if($query==true){
            include('actionregistration.php');
        }
        else{
            echo"error found!!!";
        }
    ?>