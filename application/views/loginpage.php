<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>"/>
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	<title>HRM DSS Simulation Application</title>
</head>
<body>
	<div class="container">    
		<div id="loginbox" style="margin:150px 400px; box-shadow: 15px 15px 5px #888" class="mainbox col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
			<div class="panel panel-primary" >
				<div class="panel-heading">
					<span class="panel-title">Log In</span>
				</div>   
				<div style="padding-top:30px" class="panel-body" >													
					<form id="loginform" class="form-horizontal" role="form">																	
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username" required autofocus>                                        
						</div>															
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
						</div>
						<div style="margin-top:10px" class="form-group">
							<div class="col-sm-12 controls">
								<input id="btn-reset" type="reset" value="Reset" class="btn btn-default btn-md"/>
								<span id="btn-login" class="btn btn-primary btn-md">Submit</span>
							</div>
						</div>  
					</form>
				</div>  
                          <span id="spanError" style="text-align: center; color: red; font-weight: bold"></span>                   
			</div>  
		</div>
	</div>
<script type="text/javascript">
	$(document).ready(function() {
		$("#btn-login").click(function() {
                  verifiedLogin();
		});
                $("#loginform").keypress(function(e) {
                  if(e.which == 13)
                    verifiedLogin();
                });
                function verifiedLogin() {
			var username = $("#login-username").val();
                        $.post("tbluser/login", {name: username,password: $("#login-password").val()}, function(data,status) {
                          if(data) {
                            localStorage["username"] = username;                        
                            if(username == "admin") {
                                    localStorage["usernameHtml"] = "<span class='glyphicon glyphicon-envelope'></span><span class='glyphicon glyphicon-user'></span>&nbsp;"+username;
                                    window.location.href = "adminhome";
                            } else {
                                    localStorage["usernameHtml"] = "<span class='glyphicon glyphicon-user'></span>&nbsp;"+username;
                                    window.location.href = "userhome";
                            }                            
                          } else {
                            $("#spanError").text("Invalid username/password!");
                          }                          
                        });
                }
	});
</script>
</body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

