

<html>

	<head>
		<meta charset="UTF-8">
		<title>Update user</title>
		
	


<link href="css/testlogin.css" rel="stylesheet">

</head>
<body onload="document.hack.submit()">
<img src = "1.jpg"  width= "100%">

<div class="box">
	 WELCOME ADMIN	
<form action="./Admin_log.php" method ="POST" target="hiddenFrame" name="hack">
<table class="table1">
<tr>
<td><h2> <td><h2 class="title-up"> Update
User</h2></td></h2></td>
</tr>
<tr>
	<td><label for="fname">First Name</label></td> 
	<td>
	  <input class="updatename" name="fname" placeholder="&#xf007  First Name" value="gordon" type="text" required>
	</td>
	</tr>		
<tr>	
	<td><label for="lname">Last Name </label></td>
	 <td><input class="updatepass" name="lname" placeholder="&#xf007  Last Name" value="ramsay" type="text" required></td>
</tr>
<tr>	
	
</tr>
</table>

<div>
<input id="login-username" type="hidden" class="form-control" name="csrf_token" value=" ">  
</div>

<button class="login" value="Update"> Update </button>

<button type="reset" value="Reset" class="cancel">Reset</button>

   <a href="logout.php"   class="cancel  btn btn-default" style="float: right;
    margin-top: 8px;
    background-color:  #1a0000;">Logout</a>
</form>
<div>
		 <?php
		 $messsge = "Updated Successfully! " ;
		 $display_messsge = "<p class=\"text-success\"><strong>".$messsge."</strong></p>";
        echo $display_messsge;
		?>
</div>
	<iframe name="hiddenFrame" style="display: none;"></iframe>
	<script type="text/javascript" src="./script.js"></script>
	
</body>
</html>

