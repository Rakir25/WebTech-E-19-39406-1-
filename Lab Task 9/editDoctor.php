<?php require 'header.php';?>
<?php 

require_once 'model/model.php';
require_once 'controller/updateDoctor.php';
if(isset($_GET['id']))
{
  $doctor = showDoctor($_GET['id']);  
}
else
{
  header('Location: displayDoctor.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Edit User</title>
</head>
<body>
<form method="POST">
 <fieldset style="width: 20%;">
  <legend>Edit :</legend>

  <label for="name">Name</label><br>
  <input type="text" id="name" name="name" value="<?php echo $doctor['Name'] ?>"><br>

  <label for="contact">Contact Number</label><br>
  <input type="text" id="contact" name="contact" value="<?php echo $doctor['Contact'] ?>"><br>
  
  <label for="field">Field</label><br>
  <input type="text" id="field" name="field" value="<?php echo $doctor['Field'] ?>"><br>
  
  <label for="schedule">Schedule</label><br>
  <input type="text" id="schedule" name="schedule" value="<?php echo $doctor['Schedule'] ?>"><br>


  <hr> 

  <input type="checkbox" id="display" name="display" <?php if( $doctor['Display'] == "YES"){echo "checked";} ?> >
  <label for="display">Display</label><br>

  <hr>
  
  <input type="submit" name = "updateDoctor" value="Update">

 </fieldset>
</form>
</body>
</html>