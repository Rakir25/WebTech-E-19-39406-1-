<?php
    if (isset($_POST['updateDoctor']))
    {
        $data['name'] = $_POST['name'];
        $data['contact'] = $_POST['contact'];
        $data['field'] = $_POST['field'];
        $data['schedule'] = $_POST['schedule'];

        if (isset($_POST['display'])) 
        {
            $data['display'] = "YES";
        }
        else
            $data['display'] = "NO";

        if(updateDoctor($_GET['id'] , $data))
        {
            echo "Information Updated";
            header('Location: displayDoctor.php');
        }
    }
?>