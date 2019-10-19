<?php
 include('config.php');
 $otp=$_POST['otp'];

 $query=mysqli_query($con,"SELECT * FROM blood WHERE otp='$otp'");
 $result=mysqli_num_rows($query);

 if($result){
     $query2=mysqli_query($con,"update blood set status=1 where otp='$otp'");
     //echo "Registration successfull..please log in";
 
 ?>
    <script type="text/javascript">
    alert('Registration successfull..please log in');
    window.location.href='blood.php';
    </script>
<?php
 }
  else{
      echo 'invalid otp';
  }
 ?>