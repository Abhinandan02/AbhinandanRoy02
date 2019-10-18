<html>
    <head>
        <title>WELCOME GUEST</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="jquerycdn.js"></script>
</head>
<body>
<div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                      <h4 class="modal-title" id="myModalLabel">Login As Guest</h4>
                          <form id="guest" method="POST" action="dataguest.php" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="name" value="" required="" title="Your name" placeholder="please enter your name">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="username" class="control-label">Phone Number</label>
                                  <input type="text" class="form-control" id="userno" name="number" value="" required="" title="Your number" placeholder="please enter your mobile number">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="pwd" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
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
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                             
</form>
<form action="tablefour.php">
<button type="submit" class="btn btn-success btn-block"> Guest Login Details</button>
    </form>
</div>
</div>
</div>
</div>
</body>
</html>