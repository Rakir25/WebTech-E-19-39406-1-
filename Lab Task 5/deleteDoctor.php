<?php require 'header.php';?>

<?php
    require_once 'model/model.php';

    if(isset($_GET['id']))
    {
        $doctor = showDoctor($_GET['id']);
    }
    else
    {
        header('Location:displayDoctor.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <form method="POST">
    <fieldset style="width: 40%;">
    <legend>Deletion of user</legend>

    <small>Do you wanna delete this User?</small>
    <a href="Controller/removeDoctor.php?id=<?php echo $doctor['ID'] ?>">Delete</a><br><br>
    Name : <?php echo $doctor['Name'] ?><br>

    Contact number : <?php echo $doctor['Contact'] ?><br>

    Field : <?php echo $doctor['Field'] ?><br>

    Schedule : <?php echo $doctor['Schedule'] ?><br>


    <hr>

    </fieldset>
    </form>
</body>
</html>