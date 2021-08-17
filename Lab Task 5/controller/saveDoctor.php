<?php
    require_once '../model/model.php';

    if(isset($_POST['saveDoctor']))
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


        if(addDoctor($data))
        {
            echo "Doctor Added!";
            header('Location:../displayDoctor.php');
        }
        else echo "Failed to add Doctor";
    }
    else
    {
        echo "ERROR_404 invalid request";
        echo "Couldn't found Data";
    }
?>