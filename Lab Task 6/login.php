<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
  
<style>
.error {color: #FF0000;}
.font
{
  color:honeydew;
  margin: auto; font-family:'Lucida Console', monospace ;
}
fieldset {
  background-color: #eeeeee;
}
</style>

<?php

session_start();
if (isset($_SESSION['name'])){header("location:welcome.php");}
else
{
  require 'Nav/header.php';
}
require 'controller/loginCheck.php';
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <fieldset style="margin: auto; height: 215px; width: 200px;">
  <legend 
    class=font style="background-color: gray; padding: 15px 25px;">
  LOGIN
  </legend>

  <label for="name">Name :</label>
  <input type="text" id="name" name="name" value="<?php if(isset($_COOKIE['name'])){echo $_COOKIE['name'];} ?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>">
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me">
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Log in"> <br><br>
  <a href="forgotPassword.php">Forgot Password?</a>

 </fieldset>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <?php require 'Nav/footer.php';?>
</form>
</body>
</html>