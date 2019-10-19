<?php 
		session_start();
		if (!isset($_SESSION['email'])) { 
            header('location:login.php');
        }
        

        ?>
<?php

    include('config.php');
    $dname = $_POST['dname'];
    $pname= $_POST['pname'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $city= $_POST['city'];
    $state= $_POST['state'];
    $pin= $_POST['pin'];
    $gender = $_POST['gender'];
    $mob= $_POST['mob'];
    $doi=$_POST['doi'];
    $issuetime=$_POST['time'];

    $queryone = mysqli_query($connect,"INSERT INTO ward(Department_name,Patient_name,Age,Address,City,State,Pin,Gender,Mobile_no,Date_of_issue,Issue_time)
VALUES('$dname','$pname','$age','$address','$city','$state','$pin','$gender','$mob','$doi','$issuetime')");
        if($queryone==true){
            header('location:tabletwo.php');
        }
        else{
            echo"error found!!!";
        }
    ?>