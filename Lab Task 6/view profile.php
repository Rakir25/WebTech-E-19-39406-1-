<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
}
</style> 
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['name'])){require 'Nav/header2.php';}
else{header("location:login.php");}

require 'Controller/showData.php';



?> 

<div style="margin-left: 35%; margin-top: 1%;">
<fieldset class="grid-container," style="width: 500px">
<legend>PROFILE</legend>

<div style="float: left">
  <p>Name        :   <?php echo $name ?></p><hr>
  <p>Email        :   <?php echo $email ?></p><hr>
  <p>Gender        :   <?php echo $gender ?></p><hr>
  <p>Date of Birthday      :   <?php echo $dob ?></p>
</div>

<div style="float: right">
  <img style=" width: 85%" src="Uploads/<?php 
  if ($image!=null){echo $image; $_SESSION['pic']=$image;} 
  else{echo "proPicTemplete.png";}
  ?>" alt="Profile Picture"> 
  <div style="text-align: center"> <a href="change profile picture.php" >Change</a></div>


<br><br><br><br><br><br><br>
<a href="Edit profile.php">Edit Profile</a>
<a href="changePassword.php">Change Password</a>
</fieldset> 
</div>

<?php require 'Nav/footer.php';?>
</body>  
</html> 