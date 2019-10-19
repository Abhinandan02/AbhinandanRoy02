<!DOCTYPE html>
<html>
<head>
<title>Verify Otp</title>
<script type="text/javascript" src="jquerycdn.js"></script>
</head>
<body>
<center>
<p id="tim"></p>
<script>
        var setlimit=new Date().getTime() + 60000;
        var x=setInterval(function(){
            var currenttime=new Date().getTime();
            var distance= setlimit - currenttime;
            var days=Math.floor(distance /(1000*60*60*24));
            var hours=Math.floor((distance %(1000*60*60*24))/(1000*60*60));
            var minutes=Math.floor((distance %(1000*60*60))/(1000*60));
            var seconds=Math.floor((distance %(1000*60))/1000);

            $("#tim").html(days+"d"+hours+"h"+minutes+"m"+seconds+"s");

            if(distance<0){
                clearInterval(x);
                $("#ok").html("TIMEOUT");

                $("#ok1").submit();
                window.alert("Your session has expired");
                window.location="medicalcare.php"
            }
        },1000)

        // function SubmitForm(){
        //     $("#ok1").submit();
        // };
        // setTimeout(SubmitForm,5000)
        </script>
<h1> ENTER YOUR OTP HERE</h1>

<form action="tablethree.php"  method="post">

<input type="text" name="otp">

<input type="submit" name="submit">

</form>
</center>
</body>
</html>