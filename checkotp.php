<?php

include('config.php');

$otp=$_POST['otp'];

$query=mysqli_query($connect,"SELECT * from project where otp='$otp'");
$result=mysqli_num_rows($query);

if($result){
    $query2=mysqli_query($con,"update userdata set status=1 where otp='$otp'");
    // echo "Registration Successful..Please log in";
    ?>
    <script type="text/javascript">
    alert('Registration successful!!');
    window.location.href='table.php';
    </script>

<?php
}


else{

    echo"invalid otp";
}
?>