<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
	<div>
		<a href="searchByName"></a>
		<p>Enter Name: 
			<input type="text" name="searchByName" id="searchByName" onkeyup="searchName(this.value)">
			<span id="searchByNameErr"></span>
		</p>
		<div id="txtHint">Searched Info</div>
		<div id="txtHint1"></div>
	</div>
</div>
</body>
</html>