<?php
session_start();
require_once 'C_token.php';

$_SESSION["logeduser"] = '';


	if(isset($_POST['username']) && isset($_POST['password']))
	
	{

 	if($_POST['username'] == "admin" && $_POST['password']=="password")
	
	{

			$_SESSION["logeduser"] = $_POST['username'];			
			$token = Token::generate_token(session_id());
			setcookie("id", session_id());
			setcookie("token", $token);
	        header('Location: Second_page.php');
			header('Location: ./Second_page.php'); //redirect to main
	}
	
  else
  {
    echo "<script>alert('Check username and password');</script>";
    echo "<noscript>Check username and password</noscript>";
  }
}


 
?>


<html>

	<head>
		<meta charset="UTF-8">
		<title>Login Page</title>
		<meta charset="UTF-8">
		<link href="css/testlogin.css" rel="stylesheet">
	</head>

<body>
<img src = "1.jpg" width= "100%" >

<div class="box">
<form id="login" action="" method="post">
<table class="table1">
<tr>
<td><h2> Admin Login</h2></td>
</tr>
<tr>
	<td><label for="name">User Name</label></td> 
	<td>
	  <input class="name" name="username" placeholder="&#xf007  User name" value="" type="text" required>
	</td>
	</tr>		
<tr>	
	<td><label for="pwd">Password </label></td>
	 <td><input class="name" name="password" placeholder="&#xf069  Password" value="" type="password" required></td>
</tr>
<tr>	
	<td><button class="login">login</button></td>
	<td><button class="cancel" type="reset">Reset</button></td>
	
</tr>
</table>


</div>
</html>
