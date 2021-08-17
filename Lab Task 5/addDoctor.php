<?php require 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
</head>
<body>
    <form action="controller/saveDoctor.php" method="POST" enctype="multipart/form-data">
    <fieldset style="width:30%;">
        <legend>Add Doctor</legend>
        <br>

        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="contact">Contact number</label><br>
        <input type="text" id="contact" name="contact"><br><br>

        <label for="field">Field</label><br>
        <input type="text" id="field" name="field"><br><br>

        <label for="schedule">Paitent appointment time</label><br>
        <input type="text" id="schedule" name="schedule"><br><br>

        <hr>

        <input type="checkbox" id="display" name="display">     
        <label for="display">Display</label> 
            <small style="font-size:xx-small ;color:crimson; margin: auto; font-family:'Lucida Console', monospace ;">
            (by selecting <b>Display</b> your informations will be available to PUBLIC)
            </small> <br><br>

        <input type="submit" name = "saveDoctor" value="Create">

        <hr>
    </fieldset>

    </form>
</body>
</html>