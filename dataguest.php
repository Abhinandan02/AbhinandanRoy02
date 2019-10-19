<?php 
		session_start();
		if (!isset($_SESSION['email'])) { 
            header('location:login.php');
        }
        

        ?>
<?php
session_start();

    include('config.php');
    $name=$_POST['name'];
    $mobile=$_POST['number'];
    $password=$_POST['password'];

    $query = mysqli_query($connect,"INSERT INTO guest(name,phone,password)
VALUES('$name','$mobile','$password')");
        if($query==true){
           header('location:medicalcare.php');
           $_SESSION['email']='guest';
        }
        else{
            echo"error found!!!";
        }
    ?>