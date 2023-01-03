<!DOCTYPE html>
<head>
	<title> Login form design</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js.js"></script>
	
</head>
<body>
	<div class="box">
		
		<h1>Register Here</h1>
		<form name="myform1" onsubmit="return vfun1()">
			<p>username</p>
			<input type="text" name="uname1" placeholder="Enter the username">
			<p>Email</p>
			<input type="Email" name="email1" placeholder="Enter the email id">
			<p>Password</p>
			<input type="Password" name="upswd1" placeholder="Enter the password">
			<p>Retype Password</p>
			<input type="password" name="upswd2" placeholder="Re-Enter the password">
			<div id="errorBox"></div>
			<input type="Submit" name=""value="Register">
			<br><br>
			<a href="loginform.php">existing user,login!?</a>
		</form>
	</div>
</body>
</html>