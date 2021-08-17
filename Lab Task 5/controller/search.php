<?php

require 'model/model.php';

if (isset($_POST['search'])) 
{
    $doctors = searchDoctor($_POST['name']);
    require 'displayDoctor.php';
}
?>