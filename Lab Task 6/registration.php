<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title> 
</head>  
<body>
<style>

.font
{
  color:honeydew;
  margin: auto; font-family:'Lucida Console', monospace ;
}
fieldset {
  background-color: #eeeeee;
}
.error {color: red;}
</style>

<?php
session_start();

if (isset($_SESSION['name'])){header("location:welcome.php");}
else
{
  require 'Nav/header.php';
}
require 'Controller/storeData.php';

?> 

<fieldset style="margin: auto; height: 515px; width: 200px;">
<legend class=font style="background-color: gray; padding: 15px 25px;";>Registration</legend>                 
  <form method="post"> 
  <label for=name">Name :</label>
  <input type="text" id="name" name="name">
  <span class="error"> <?php echo $nameErr;?></span><hr>

  <label for="email">Email :</label>
  <input type="text" id="email" name="email">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password">
  <span class="error"> <?php echo $passwordErr;?></span><hr>

  <label for="confirm_password">Confirm Password :</label>
  <input type="password" id="confirm_password" name="confirm_password">
  <span class="error"> <?php echo $confirm_passwordErr;?></span><hr>

<fieldset>
<legend> Gender</legend>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label> 
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label> 
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other </label>  
  <span class="error"> <?php echo $genderErr;?></span>
 </fieldset><hr>

<fieldset>
  <legend>Date of Birth</legend>
  <input type="date" name="dob"> 
  <span class="error"> <?php echo $dobErr;?></span>
</fieldset><hr>

<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>  
</fieldset>

<?php require 'Nav/footer.php' ?>
</body>  
</html>  