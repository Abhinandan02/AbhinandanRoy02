<?php
$connect=mysqli_connect('localhost','root','','medical');

if($connect==true){
    echo"CONNECTION DONE";
}
else{
    echo"OOPS!! CONNECTION ERROR";
}
?>