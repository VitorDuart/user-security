<?php
    require_once("../models/User.php");
    require_once("../data/UserData.php");


    $username = $_POST["username"];
    $password = $_POST["password"];

    $new = new User($username, $password);
    $data = new UserData();
    $fetch = $data->store($new);
    

    if($fetch == 1)
        header("Location:../index.php");
    else
        header("Location:../pages/cadastropage.php");
    
?>