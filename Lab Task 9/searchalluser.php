
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table >
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $i => $user): ?>
			<tr>
				<th scope='row' onClick="showData(<?php echo $user['Id'] ?>)"><?php echo $user['Id'] ?></th>
				<th scope='row' onClick="showData(<?php echo $user['Id'] ?>)"><?php echo $user['Name'] ?></th>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>