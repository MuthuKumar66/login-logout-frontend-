<!DOCTYPE html>
<head>
	<title> Login form design</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js.js"></script>
	
</head>
<body>
	<div class="box">
		<h1>Login Here </h1>
		<form name="myform" onsubmit="return vfun()">
			<p>username</p>
			<input type="text" name="uname" placeholder="Enter the username">
			<p>Password</p>
			<input type="Password" name="upswd" placeholder="Enter the password">
			<div id="errorBox"></div>
			<input type="Submit" name=""value="Login">
			<br><br>
			<a href="register.php">Register for new account ?</a>
		</form>
	</div>
</body>
</html>