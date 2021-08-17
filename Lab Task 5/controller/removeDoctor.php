<?php 

require_once '../model/model.php';
if (deleteDoctor($_GET['id']))
{
    echo 'User deleted!';
    header('Location: ../displayDoctor.php');
}

 ?>