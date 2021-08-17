<?php
    require_once 'db_connect.php';

    function addDoctor($data)
    {
        $conn = db_conn();
        $selectQuery = "INSERT INTO `doctor info`(`Name`,`Contact`,`Field`,`Schedule`,`Display`) values (:name, :contact , :field , :schedule , :display)";
        try
        {
            $stmt = $conn-> prepare($selectQuery);
            $stmt -> execute(
            [
                ':name' => $data['name'],
                ':contact' => $data['contact'],
                ':field' => $data['field'],
                ':schedule' => $data['schedule'],
                ':display' => $data['display']
            ]);
        }
        catch(PDOException $e)
        {
            echo $e -> getMessage();
        }
        $conn = null;
        return true;
    }

    function showAllDoctors()
    {
        $conn = db_conn();
        $selectQuery = 'SELECT * FROM `doctor info`';
        try
        {
            $stmt = $conn -> query ($selectQuery);
        }
        catch(PDOException $e)
        {
            echo $e -> getMessage();
        }
        $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    function updateDoctor($id,$data)
    {
        $conn=db_conn();
        $selectQuery = "UPDATE `doctor info` set `Name` = ? , `Contact` = ? , `Field` = ? , `Schedule` = ? , `Display`=?  where `ID`=?";
        try
        {
            $stmt = $conn -> prepare ($selectQuery);
            $stmt -> execute(
                [
                    $data['name'] , $data['contact'] , $data['field'] , $data['schedule'] ,$data['display'], $id
                ]);
        }
        catch(PDOException $e){echo $e -> getMessage();}

        $conn = null;
        return true;
    }

    function deleteDoctor($id)
    {
        $conn = db_conn();
        $selectQuery = "DELETE FROM `doctor info` WHERE `ID` = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$id]);
        }
        catch(PDOException $e){echo $e->getMessage();}

        $conn = null;

        return true;
    }

    function showDoctor($id)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `doctor info` where ID=? " ;

        try
        {
            $stmt = $conn -> prepare($selectQuery);
            $stmt -> execute([$id]);
        }
        catch(PDOException $e){echo $e -> getMessage();}

        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    function searchDoctor($name)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `doctor info` Where Name like '%$name%' ";

        try
        {
            $stmt = $conn -> query($selectQuery);
        }
        catch(PDOException $e){echo $e -> getMessage();}

        $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
?>