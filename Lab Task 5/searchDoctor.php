<?php require 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <fieldset style="width: 20%;">
    <legend>Search</legend>
    <form method="post">
    <input type="text" name="name" placeholder="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" required> <hr>
    <input type="submit" name="search" value="Search By Name">
    </form>
    </fieldset>

    <?php require 'Controller/search.php';?>
    
</body>
</html>