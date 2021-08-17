<?php
    $nameErr = $passwordErr = "";
    $name = $password = "";
    
    if (isset($_POST['name'])) 
    {
        require 'Controller/checkloginData.php';
        if ($_POST['name']==$name && $_POST['password']==$password) 
        {
            $_SESSION['name'] = $name;
            $_SESSION['id'] = $id;
            if(isset($_POST['remember_me']))
            {
                $time = time();
                setcookie('name', $name, $time+50);
                setcookie('password', $_POST['password'], $time+50);
            }
            header("location:welcome.php");
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if (empty($_POST["name"])) 
      {
        $nameErr = "Name is required";
      } 
      else 
      {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z0-9-'_.-]*$/",$name) || str_word_count($name)<2 )
        {
          $nameErr = "Only letters, white space, period, dash allowed and minimum two words";
          $name="";
        }
      }
    
      if (empty($_POST["password"])) 
      {
        $passwordErr = "Password is required";
      } 
      else 
      {
        $password = test_input($_POST["password"]);
        if (strlen($password) < 8)
        {
          $passwordErr = "Must be atleast 8 characters";
          $password="";
          
        }
        else if (!preg_match("/[@,#,$,%]/",$password)) 
        {
          $passwordErr = "Password must contain at least one of the special character (@, #, $,%)";
          $password ="";
        }
      }
    }
    
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>