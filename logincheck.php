<?php
session_start();
include('config.php');

if(!isset($_SESSION["email"]))
{
    
    echo $email=$_POST["email"];
    echo $password=$_POST['password'];

    $query1=mysqli_query($connect,"select * from project where email='$email' && password='$password' && status=1");
    $query2=mysqli_query($connect,"select * from admin where email='$email' && password='$password'");

    $rowcount1= mysqli_num_rows($query1);
    $rowcount2= mysqli_num_rows($query2);

    if($rowcount1==true)
    {
        
        ?>
        <script type="text/javascript">
        alert('User Login Successful');
        window.location.href='medicalcare.php';
        </script>
        <?php
       
        $_SESSION["email"]=$email;
    }
    else if($rowcount2==true)
    {
        ?>
        <script type="text/javascript">
        alert('Admin Login Successful');
        window.location.href='table.php';
        </script>
        <?php
       
        $_SESSION["email"]=$email;

    }
    else{
        ?>
        <script type="text/javascript">
        alert('Sorry wrong userid or password');
        window.location.href='login.php';
        </script>
        <?php}

    

    else{
        ?>
        <script type="text/javascript">
        alert('please logout');
        window.location.href='.php';
        </script>
        <?php
    }
}
    ?>
