<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Inventory</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="assets/fonts/text-font/myfont.css" rel="stylesheet" type="text/css" >
<link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/fonts/simple-line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/css/animate.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="pre-login-container">
        <div class="logo-block">
            <h3>Inventory</h3>
        </div>
        <div class="pre-login">
        	<div class="c-line"></div>
        	<div class="padd-30 login">
        		<div class="message-container"></div>
	            <h3>Sign In</h3>
	            <div class="form-group">
	                <input type="text" id="username" class="form-control" placeholder="email@userdomain.com" required>
	            </div>
	            <div class="form-group">
	                <input type="password" id="password" class="form-control" placeholder="Password" required>
	            </div>
	            <div class="form-group forgot">
	                <a href="">Forgot Password</a>
	            </div>
	            <div class="form-group text-center">
	                <button type="button" tabindex="1" class="btn btn-success btn-login"> LOGIN </button>
	            </div>
            </div>
        </div>
    </div>

	<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/script.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.btn-login').click(function(e){
				var username = $('#username').val();
				var password = $('#password').val();
				$.ajax({
			        type: 'POST',
			        url: 'parse/login.php',
			        data: { username: username, password: password },
			        success: function(response) {
			            if(response == "username empty"){
			            	var message = "Please provide information correctly.";
			            	var container = "message-container";
			            	var type = 0;
			            	Inventory.Notify(type, message, container);
			            }
			            else if(response == "error"){
			            	var message = "Wrong Username or Password";
			            	var container = "message-container";
			            	var type = 0;
			            	Inventory.Notify(type, message, container);
			            }
			            else if(response == "done"){
			            	var message = "Login Successful";
			            	var container = "message-container";
			            	var type = 1;
			            	Inventory.Notify(type, message, container);
			            	window.location.replace("index.php");
			            }
			        }
			    });
			});
		});
	</script>
</body>
</html>