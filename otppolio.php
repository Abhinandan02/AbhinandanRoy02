<html>
    <head>
            <script src="jquerycdn1.js"></script>
    </head>
    <body>


        <!-- <form id='#ok2'>
            Name:<input type="text" name="name" id="name">
        </form> -->
        <script>

            var setlimit =  new Date().getTime() + 86400;//for 20 seconds
            var x = setInterval(function() {

                var currenttime = new Date().getTime();
                var distance = setlimit - currenttime;
                var days = Math.floor(distance / (1000 * 60 * 60 *24));
                var hours = Math.floor((distance % (1000 * 60 * 60 *24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60 )) / 1000);

                $('#ok').html(days + "d " + hours + "h " + minutes + "m " + seconds + "s ");

                if(distance < 0)
                {
                    clearInterval(x);

                    $('#ok').html("EXPIRED");

                    $('#ok2').submit();
                    window.alert('your session has been expired');
                    window.location="login.php";
                }
            },1000);
            </script>
            <!-- <script>


            function submitForm(){
                $("#ok2").submit();
            };
            setTimeout(SubmitForm,1000);
            
                
                
                



            
        
        
        
        
        </script> -->

<center>
<p id='ok'></p>
<h1>pLEASE  VERIFY YOUR OTP HERE</h1>
<form action="otpcheckpolio.php"method="post">
<input type="text" name="otp">
<input type="submit" name="submit">
</form>
</center>
</body>
</html>