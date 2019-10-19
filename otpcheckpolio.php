<?php
include('config.php');
$otp=$_POST['otp'];
$query=mysqli_query($connect ,"SELECT *FROM polio WHERE otp='$otp'");
$result=mysqli_num_rows($query);

if($result){
    $query2=mysqli_query($connect,"update polio set status=1 where otp='$otp'");
    echo "Registrtion successfull...Please log in";
    ?>


    <script type="text/javascript">
    alert('registration successful..please log in');
    window.location.href='tablefive.php';
    </script>
    <?php
}
else{
    echo "invalid otp";
}
?>