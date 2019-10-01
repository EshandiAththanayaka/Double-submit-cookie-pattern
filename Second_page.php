<?php

session_start();

require_once 'C_token.php';

 $display_message = "";

  if(isset($_POST['fname'], $_POST['lname'], $_POST['csrf_token'])){

      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $csrf_token = $_POST['csrf_token'];

      if(!empty($fname) && !empty($lname) && !empty($csrf_token))
	  {
        if(Token::check_token($csrf_token))
		{
          $message = "Updated Successfully! " ;
          $display_message = "<p class=\"text-success\"><strong>".$message."</strong></p>";
        }
        else{
          $msg = "Error Invalid Token";
          $display_message = "<p class=\"text-danger\"><strong>".$message."</strong></p>";
        }
      }
      else{
        echo "<script>alert('Check your details');</script>";
      }
  }




?>



<html>

  <head>
    <meta charset="UTF-8">
    <title>Update user</title>
     <meta charset="UTF-8">
      <link href="css/testlogin.css" rel="stylesheet">
  </head>

<body>
<img src = "1.jpg" width= "100%">

<div class="box">
<?php
        if (session_id() == '' || !isset($_SESSION['logeduser'])) { 
          header('Location: ./Admin_log.php');
      ?>
      <?php
        } 
        else {
          echo "Hello";
      ?>
<form action="" method ="post">
<table class="table1">
<tr>
<td><h2> <td><h2 class="Add_mem"> Add Members</h2></td></h2></td>
</tr>
<tr>
  <td><label for="fname">First Name</label></td> 
  <td>
    <input class="updateF_name" name="fname" placeholder="&#xf007  First Name" value="" type="text" required>
  </td>
  </tr>   
<tr>  
  <td><label for="lname">Last Name </label></td>
   <td><input class="updateL_name" name="lname" placeholder="&#xf007  Last Name" value="" type="text" required></td>
</tr>
<tr>  
  
</tr>
</table>

<div>
<input id="login-username" type="hidden" class="form-control" name="csrf_token" value="<?php  echo $_SESSION["token"];  ?>">  
</div>

<button class="login" value="Update" > Update </button>

<button type="reset" value="Reset" class="cancel">Reset</button>

   <a href="logout.php"   class="cancel  btn btn-default" style="float: right;
    margin-top: 8px;
    background-color:  #1a0000;">Logout</a>
</form>
    <div>
     <?php
        echo $display_message;
        }
    ?>
    </div>
  <script type="text/javascript" src="./script.js"></script>
</div>
</div>
</div>  
</body>
</html>
