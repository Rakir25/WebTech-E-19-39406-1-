<?php
    require_once 'db_connect.php';

    function addData($data)
    {
        $conn= db_conn();
        $selectQuery="INSERT INTO `registration`(`Name`,`Email`,`Password`,`Date of birth`,`Gender`) VALUES (:name,:email,:password,:dob,:gender)";

        try
        {
            $stmt = $conn -> prepare($selectQuery);
            $stmt -> execute(
                [
                    ':name' => $_POST['name'],
                    ':email' => $_POST['email'],
                    ':password' => $_POST['password'],
                    ':gender' => $_POST['gender'],
                    ':dob' => $_POST['dob']
                ]);
        }
        catch(PDOException $e)
        {
            echo $e -> getMessage();
        }

        $conn=null;
        return true;
    }

    function showAllData()
    {
        $conn= db_conn();
        $selectQuery='SELECT * FROM `registration`';

        try
        {
            $stmt = $conn -> query($selectQuery);
        }
        catch(PDOException $e)
        {
            echo $e -> getMessage();
        }
        $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    function updateData($id,$data)
    {
        $conn = db_conn();
    $selectQuery = "UPDATE `registration` set `Name` = ?, `Email` = ? where `ID` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute(
        [
            $data['name'], $data['email'], $id
        ]);
    }
    catch(PDOException $e){echo $e->getMessage();}
    
    $conn = null;
    return true;
    }

    function updatePassword($id, $data){
        $conn = db_conn();
        $selectQuery = "UPDATE `registration` set `Password` = ? where `ID` = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute(
            [
                $data, $id
            ]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        $conn = null;
        return true;
    }

    function updatePicture($id, $data){
        $conn = db_conn();
        $selectQuery = "UPDATE `registration` set `Image` = ? where `ID` = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                $data, $id
            ]);
        }
        catch(PDOException $e){echo $e->getMessage();}
        
        $conn = null;
        return true;
    }

    function deleteData($id){
        $conn = db_conn();
        $selectQuery = "DELETE FROM `registration` WHERE `ID` = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
    
        return true;
    }

    function showData($id)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `registration` where ID = ?";
        try 
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$id]);
        } 
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $data;
    }

    function searchData($name){
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `registration` WHERE Name = ?";
        try 
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$name]);
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
?>