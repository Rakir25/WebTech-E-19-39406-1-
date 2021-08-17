<?php 
require 'Model/model.php';
$data=showData($_SESSION['id']);

$name = $data["Name"];
$id = $data["ID"];
$email = $data["Email"];
$gender = $data["Gender"];
$dob = $data["Date of Birth"];
$image = $data["Image"];
?>