<!DOCTYPE html>
<html>
<head>
	<style>
		.error
		{
			color: RED;
		}
	</style>
</head>
<body>

<?php
$name = $email = $dd= $mm=$yyyy=$gender=$degree= $bg="";
$nameE= $emailE = $dobE=$genderE =$subjectE = $degreeE= $bgE="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if(empty($_POST["name"])){
		$nameE="<small> Name is requied </small>";
	}
	else
	{
		$name = test_input($_POST["name"]);
		if( preg_match("/^[0-9]/", $name))
			{$nameE="Must start with letter";}
		else if (!preg_match("/^[a-zA-Z-. ?!]/",$name)) {
      	{$nameE = "<small>At least two words </small>";}
	}
	}

	if(empty($_POST["email"])) {
    	$emailE = "<small> Email is required </small>";
  	} 
  	else 
  	{
	    $email = test_input($_POST["email"]);
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    $emailE = "<small> Invalid email format. Format: name@site.com</small>";}
  	}

  	if(empty($_POST["dd"]) or empty($_POST["mm"]) or empty($_POST["yyyy"])){
		$dobE="<small> Put a valid date</small>";


	}
	else
	{
		$dd = test_input($_POST["dd"]);
		$mm = test_input($_POST["mm"]);
		$yyyy = test_input($_POST["yyyy"]);

		if( !filter_var($dd,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1, 
            'max_range' => 31
        )))|!filter_var($mm,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1, 
            'max_range' => 12
        )))|!filter_var($yyyy,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1953, 
            'max_range' => 1998
        ))))
			{$dobE="<small> Must be valid numbers(day:1-31,month: 1-12, year: 1953-1998)</small>";}
	}

	if(!isset($_POST["gender"]))
	{
		$genderE="<small>Select one </small>";
	}
	else{$gender = test_input($_POST["gender"]);}

	if(!isset($_POST["degree"]))
	{
		$degreeE="<small> Select two </small>";		
	}
	else if (sizeof($_POST["degree"])<2)
	{
		$degreeE="At least two must be selected";
	}
	else{$degree = test_input($_POST["degree"]);}

	if(!isset($_POST["bg"]))
	{
		$bgE="<small> Must be selected </small>";
	}
	else
	{
		if($_POST["bg"]=="blank")
		{
			$bgE="<small> Must be selected </small>";
		}
	}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"style="padding-top: 10px">
<fieldset style="width: 300px; ">
<legend><b>NAME</b> </legend>
<input type="text" name="name" value="<?php echo $name;?>" ><span class="error">* <?php echo $nameE;?> </span>
<hr style="color:gray; border: 0.1px solid;">
<br>
</fieldset>

<br>
<fieldset style="width: 300px; ">
<legend><b>EMAIL</b></legend>
<input type="text" name="email" value="<?php echo $email;?>"><span class="error">* <?php echo $emailE;?></span>
<hr style="color:gray; border: 0.1px solid;">
<br>
</fieldset>

<br>

<fieldset style="width: 300px; ">
<legend><b>DATE OF BIRTH</b></legend>
<table>
<tr style="text-align: center;">
	<th style="font-weight: normal;"><label for="dd" >dd</label></th>
	<th></th>
	<th style="font-weight: normal;"><label for="mm" >mm</label></th>
	<th></th>
	<th style="font-weight: normal;"><label for="yyyy" >yyyy</label></th>
	<th></th>
</tr>
<tr>
<td><input type="text" name="dd" style="width: 30px" value="<?php echo $dd;?>"></td>
<td>/</td>
<td><input type="text" name="mm" style="width: 30px" value="<?php echo $mm;?>"></td>
<td>/</td>
<td><input type="text" name="yyyy" style="width: 30px;" value="<?php echo $yyyy;?>"></td>
<td style="padding-left: 10px"><span class="error">* <?php echo $dobE;?></span></td>
</tr>

</table>
<hr style="color:gray; border: 0.1px solid;">
<br>
</fieldset>

<br>

<fieldset style="width: 300px; ">
<legend><b>GENDER</b></legend>
	<input  type="radio" name="gender"<?php if(isset($gender) && $gender=="female") echo "checked";?> value="female">Female

	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male	

	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 
	<span class="error" >* <?php echo $genderE;?></span	> 
	<hr style="color:gray; border: 0.1px solid;">
	<br>	
</fieldset>



<br>

<fieldset style="width: 300px; ">
<legend><b>DEGREE</b></legend>
	<input type="checkbox" id="degree" name="degree[]" value="ssc"> SSC
	<input type="checkbox" id="degree" name="degree[]" value="hsc"> HSC
	<input type="checkbox" id="degree" name="degree[]" value="bsc"> BSc
	<input type="checkbox" id="degree" name="degree[]" value="msc"> MSc	
	<span class="error">* <?php echo $degreeE;?></span>	
	<hr style="color:gray; border: 0.1px solid;">
	<br>
</fieldset>

<br>

<fieldset style="width: 300px; ">
<legend><b>BLOOD GROUP</b></legend>
	<select name="bg" id="bg">
		<option value="blank">Select</option>
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
		<option value="A+">A+</option>
		<option value="A-">A-</option>
		<option value="B+">B+</option>
		<option value="B-">B-</option>
		<option value="O+">O+</option>
		<option value="O-">O-</option>
	</select>	
	<span class="error" >* <?php echo $bgE;?></span>	
	<hr style="color:gray; border: 0.1px solid;">
	<br>
</fieldset>

<input type="submit" name="submit" value="Submit">

</form>
</body>
</html>