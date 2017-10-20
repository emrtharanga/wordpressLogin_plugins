<?php
/*
 Plugin Name: Test login Plugin
 Pluging URI://github.com/emrtharanga/wordpressLogin_plugins.git
 Description: This is my first wordpress plugin. creat for testing purpose.
 Version: 1.0
 Author: Ramesh Tharanga
 Author URI://linkedin.com/in/ramesh-tharanga
 license: GPLv2 or Later
*/

?>

<html>
<head>
<style type="text/css">
	form{
		text-align: right;
	}
	input{
		width:100px;
	}	
</style>
<title>User Login Form</title>
</head>
<body>
	<form action="login.php"method="post">
		username:<input type="text" name="txtuid"></br>
		password:<input type="password" name="txtpwd"></br>
		<input type="submit" value="Login">
	</form>
</body>
</html>

