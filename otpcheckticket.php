<?php
include('config.php');
$otp=$_POST['otp'];
$query=mysqli_query($connect ,"SELECT *FROM ticketone WHERE otp='$otp'");
$result=mysqli_num_rows($query);

if($result){
    $query2=mysqli_query($connect,"update ticketone set status=1 where otp='$otp'");
    echo "Appointment successful";
    ?>


    <script type="text/javascript">
    alert('appointment successful..');
    window.location.href='tableone.php';
    </script>
    <?php
}
else{
    echo "invalid otp";
}
?>