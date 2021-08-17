<?php require 'header.php';?>
<?php  
if (!isset($_POST['name'])) 
{
  require_once ('model/model.php');
  $doctors = showAllDoctors();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>All Doctors</title>
</head>
<body>
  <style>
  table,td,th{border:2px solid gray;}
  </style>
  <fieldset style="width:40%;">
  <legend>Display</legend>
  <table>
  <thead>
  <tr>
    <th>Name</th>
    <th>Contact Number</th>
    <th>Field</th>
    <th>Schedule</th>
    <th colspan="2">Edit / Delete</th>
  </tr>
  </thead>
<body>
  <?php 
  foreach ($doctors as $d => $doctor): 
  if ($doctor['Display'] == "YES" || isset($_POST['name'])):
  ?>

  <tr>

  <td><?php echo $doctor['Name'] ?></td>
  <td><?php echo $doctor['Contact'] ?></td>
  <td><?php echo $doctor['Field'] ?></td>
  <td><?php echo $doctor['Schedule'] ?></td>

  <td><a href="editDoctor.php?id=<?php echo $doctor['ID'] ?>">Edit</a></td>
  <td><a href="deleteDoctor.php?id=<?php echo $doctor['ID'] ?>">Delete</a></td>
  </tr>

  <?php endif; endforeach; ?>

</body>
</table>
</fieldset>
</body>
</html>