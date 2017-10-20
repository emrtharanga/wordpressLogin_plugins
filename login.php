<?php require('..\..\..\wp-signup.php');?>
<?php
	$uid=$_POST['txtuid'];
	$pwd=$_POST['txtpwd'];
	
	if(!user_pass_ok($uid,$pwd))
			echo "Login Fail!";
		
		else
			echo "Welcome {$uid}!";
		
		
?>