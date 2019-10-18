<?php 
		session_start();
		if (isset($_SESSION['email'])) { 
			?> 
			<button><a href="signout.php">LOG OUT</a></button>
         <?php }
        ?> 

<html>
<head>
    <title>WELCOME TO LOGIN PAGE</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="jquerycdn.js"></script>
</head>
<body>
<div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Login to E-Hospital</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="logincheck.php" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="email" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="pwd" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label><br>
                                  <label>
                                  <input type="checkbox" id="chk">Show Password
                                </label><br>
                                  <script>
                                       $(document).ready(function(){
            $("#chk").click(function(){
                var x=document.getElementById("pwd")
                if(x.type === "password"){
                    x.type="text";
                }
                else{
                    x.type="password";
                }
            });
        });
                                      </script>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                              <a href="guestlogin.php" class="btn btn-default btn-block">Log In As Guest</a>
                              
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Easy to use</li>
                          <li><span class="fa fa-check text-success"></span> Make appointment online and easy</li>
                          <li><span class="fa fa-check text-success"></span> Save your details</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          
                      </ul>
                      <p><a href="register.php" class="btn btn-info btn-block">Yes please, register now!</a></p>
                  </div>

                  

                 
    
              </div>
          </div>
         
      </div>
  </div>
  

</body>
</html>