<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <div style="text-align:right;margin-right: 50px;">
            <?php echo "Greetings || ".$_SESSION['name']." ||" ;?>

            <a href="welcome.php">Home</a>
            <a href="viewProfile.php">Doctor's Information</a>
            <a href="homeService.php">Home Service</a>
            <a href="Controller/logout.php">logout</a>
        </div>
    </header>
    <br>
    <hr style="color:grey";>
</body>
</html>