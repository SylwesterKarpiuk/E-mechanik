<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
 if($name == '' || $username == '' || password == '' || email == ''){
	 echo 'please fill all values';
 }
 else{
	 require_once('dbConnect.php');
	 $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
	 
	 $check = mysql_fetch_array(mysql_query($con,$sql));
	 
	 if(isset($check)){
		 echo 'username or email already exist';
	 }else{
		 $sql = "INSERT INTO users(name,username,password,email) VALUES('$name','$username','$password','$email')";
		 if(mysql_query($con,$sql)){
			 echo 'successfully registered';
		 }else{
			 echo 'oops! Please try again!';
		 }
	 }
	 mysql_close($con);
 }
}
else{
	echo 'error';
}
		 
	
	
	
	