<?php
$searchByID = "";
require '../Model/model.php';
$data=showData($_GET['Name']);
//echo $_GET['id'];
If($data!=null)
{
$name = $data["Name"];
$id = $data["Id"];
$shift = $data["Shift"];
$email = $data["Email"];
$mobile_number = $data["Mobile Number"];


echo "<table class='table'>";
echo "<tr>";
echo "<th class='table-dark'>ID</th>";
echo "<td  scope='row'>" . $id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Name</th>";
echo "<td  scope='row'>" . $name . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Shift</th>";
echo "<td  scope='row'>" . $shift . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Email</th>";
echo "<td  scope='row'>" . $email . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Mobile Number</th>";
echo "<td  scope='row'>" . $mobile_number . "</td>";
echo "<tr>";
echo "</table>";
}
else if($data==null)
{
	$searchByName="Name not Found";
	echo $searchByName;
}

?>